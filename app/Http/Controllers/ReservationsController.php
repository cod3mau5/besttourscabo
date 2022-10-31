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

            $reservation=Reservation::create($data);
            return view('pages.buy_tour',compact('data','voucher'));

        }catch(\Illuminate\Database\QueryException $exception){
            // return [ 'success' => false, 'exeption' => $exception->errorInfo, 'data' => $data ];
            // return back()->with('exception');

            ## TODO ##
            // here we can send an error email message!!!
            // also we can make a prety page to show this info
            return 'An error was ocurred with your voucher, please contact us to help you.';
        }

    }

    public function sendMail(){
        //
    }
}
