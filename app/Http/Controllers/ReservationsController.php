<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function create(Request $request)
    {

        $request->request->add(['token' => 'TK_'.mt_rand()]);
        // return (object)$request->all();

        $rules= [
            'phone'=>'required|min:8',
            'email'=>'required|email',
            'adults'=>'required',
            'tour_name'=>'required',
            'tour_day'=>'required',
            'tour_time'=>'required',
            'voucher'=>'required|unique:reservations,voucher|min:4',
            'subtotal'=>'required|between:2,9999999',
            'token'=>'required|min:4'
        ];
        $reservation=$request->all();

        // control
        $voucher = $request->get('voucher');
        $token = $request->get('token');
        $request->validate($rules);

        try{

            $reservation=Reservation::create($reservation);
            $this->sendMail($reservation);
            $reservation= (object) $reservation;
            return view('pages.buy_tour',compact('reservation','voucher','token'));

        }catch(\Illuminate\Database\QueryException $exception){
            // return [ 'success' => false, 'exeption' => $exception->errorInfo, 'data' => $data ];
            // return back()->with('exception');

            ## TODO ##
            // here we can send an error email message!!!
            // also we can make a prety page to show this info
            return [
                'Error:'=>'An error was ocurred with your voucher, please contact us to help you.',
                'Exeption'=> $exception
            ];
        }

    }

    public function edit($voucher,$token)
    {
        if($voucher){
            $data=Reservation::where('voucher',$voucher)->where('token',$token)->firstOrFail();
            $data= (object) $data;
        }

        return view('pages.buy_tour',compact('data','voucher','token'));
    }

    public function update(Request $request, $voucher)
    {

        if($voucher){

                $request->request->add(['token' => 'TK_'.mt_rand()]);
                $rules= [
                    'phone'=>'required|min:8',
                    'email'=>'required|email',
                    'adults'=>'required',
                    'tour_name'=>'required',
                    'tour_day'=>'required',
                    'tour_time'=>'required',
                    'subtotal'=>'required|between:2,9999999',
                    'token'=>'required|min:4'
                ];
                $request->validate($rules);

                try{
                    $data=Reservation::where('voucher',$voucher)->firstOrFail();
                    $reservation=$data;
                    $data->update($request->all());

                    $reservation= (object) $reservation;
                    $token= $reservation->token;
                    return view('pages.buy_tour',compact('reservation','voucher','token'));

                }catch(\Illuminate\Database\QueryException $exception){

                    return [
                        'Error:'=>'An error was ocurred with your voucher, please contact us to help you.',
                        'Exeption'=> $exception
                    ];
                }


            $reservation= (object) $reservation;

        }
        return view('pages.buy_tour',compact('data','voucher','token'));

    }

    private function sendMail($reservation)
    {
        $myfile = fopen("/var/www/html/besttourscabo/public_html/text/newfile".mt_rand().".txt", "w") or die("Unable to open file!");
        $txt = "John Doe\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    }
}
