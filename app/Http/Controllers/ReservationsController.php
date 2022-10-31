<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function create(Request $request){
        $data=$request->all();

        // control
        $data['voucher'] = $request->get('voucher');
        $voucher=$data['voucher'];


        try{
            return $data;
            $reservation=Reservation::create($data);
            $data= (object) $reservation;
            return view('pages.buy_tour',compact('data','voucher'));

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

    public function update($voucher=null,$token=null){
        if($voucher){
            $data=Reservation::where('voucher',$voucher)->where('token',$token)->firstOrFail();
            // dd($data->get()->all());
            $data=$data->get()->all();
            $data=$data[0];
        }

        return view('pages.buy_tour',compact('data','voucher'));
    }

    public function sendMail(){
        //
    }
}
