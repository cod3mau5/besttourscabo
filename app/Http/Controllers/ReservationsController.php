<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\NotifyBoundReservation;
use Illuminate\Support\Facades\Mail;

class ReservationsController extends Controller
{
    public function create(Request $request)
    {

        $request->request->add(['token' => 'TK_'.mt_rand()]);
        $request->request->add(['status' => 'BOUND_TO_RESERVE']);
        $raw_phone=$request->get('phone');
        $request->merge([
            'phone' =>  $request->get('newPhone'),
            'raw_phone' => $raw_phone
        ]);
        // return (object)$request->all();

        if($request->get('kids')){
            $request->merge([
                'kids_ages' =>  implode(",", $request->get('kids_ages')),
            ]);
        }


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

            $tours=[
                'cabo_escape'=>[
                    'name'=>'CABO ESCAPE',
                    'img'=>'assets/img/tours/cabo_escape/ea040fcf-84c6-491d-b62c-216d8e8a7e46.jpg'
                ],
                'traditional_arch_tour'=>[
                    'name'=>'TRADITIONAL ARCH TOUR',
                    'img'=>'assets/img/tours/traditional_arch_tour/img_1.webp'
                ],
                'whale_watching'=>[
                    'name'=>'WHALE WATCHING',
                    'img'=>'assets/img/tours/whale_watching/1.jpeg'
                ],
                'la_paz_city_tour'=>[
                    'name'=>'LA PAZ CITY TOUR',
                    'img'=>'assets/img/tours/la_paz_city_tour/6.jpeg'
                ]
            ];
            $tours=(object)$tours;
            return view('pages.buy_tour',compact('reservation','voucher','token','tours'));

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
            $reservation=Reservation::where('voucher',$voucher)->where('token',$token)->firstOrFail();
            $reservation= (object) $reservation;
        }
        $tours=[
            'cabo_escape'=>[
                'name'=>'CABO ESCAPE',
                'img'=>'assets/img/tours/cabo_escape/ea040fcf-84c6-491d-b62c-216d8e8a7e46.jpg'
            ],
            'traditional_arch_tour'=>[
                'name'=>'TRADITIONAL ARCH TOUR',
                'img'=>'assets/img/tours/traditional_arch_tour/img_1.webp'
            ],
            'whale_watching'=>[
                'name'=>'WHALE WATCHING',
                'img'=>'assets/img/tours/whale_watching/1.jpeg'
            ],
            'la_paz_city_tour'=>[
                'name'=>'LA PAZ CITY TOUR',
                'img'=>'assets/img/tours/la_paz_city_tour/6.jpeg'
            ]
        ];
        $tours=(object)$tours;

        return view('pages.buy_tour',compact('reservation','voucher','token','tours'));
    }

    public function update(Request $request, $voucher)
    {

        if($voucher){

                $request->request->add(['token' => 'TK_'.mt_rand()]);
                $request->request->add(['status' => 'BOUND_TO_RESERVE']);
                $raw_phone=$request->get('phone');
                $request->merge([
                    'phone' =>  $request->get('newPhone'),
                    'raw_phone' => $raw_phone
                ]);

                if( $request->get('kids') ){
                    $request->merge([
                        'kids_ages' =>  implode(",", $request->get('kids_ages')),
                    ]);
                }else{
                    $request->request->add(['kids_ages' => '']);
                }

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

                    $tours=[
                        'cabo_escape'=>[
                            'name'=>'CABO ESCAPE',
                            'img'=>'assets/img/tours/cabo_escape/ea040fcf-84c6-491d-b62c-216d8e8a7e46.jpg'
                        ],
                        'traditional_arch_tour'=>[
                            'name'=>'TRADITIONAL ARCH TOUR',
                            'img'=>'assets/img/tours/traditional_arch_tour/img_1.webp'
                        ],
                        'whale_watching'=>[
                            'name'=>'WHALE WATCHING',
                            'img'=>'assets/img/tours/whale_watching/1.jpeg'
                        ],
                        'la_paz_city_tour'=>[
                            'name'=>'LA PAZ CITY TOUR',
                            'img'=>'assets/img/tours/la_paz_city_tour/6.jpeg'
                        ]
                    ];
                    $tours=(object)$tours;

                    return view('pages.buy_tour',compact('reservation','voucher','token','tours'));

                }catch(\Illuminate\Database\QueryException $exception){

                    return [
                        'Error:'=>'An error was ocurred with your voucher, please contact us to help you.',
                        'Exeption'=> $exception
                    ];
                }


            $reservation= (object) $reservation;

        }
        $tours=[
            'cabo_escape'=>[
                'name'=>'CABO ESCAPE',
                'img'=>'assets/img/tours/cabo_escape/ea040fcf-84c6-491d-b62c-216d8e8a7e46.jpg'
            ],
            'traditional_arch_tour'=>[
                'name'=>'TRADITIONAL ARCH TOUR',
                'img'=>'assets/img/tours/traditional_arch_tour/img_1.webp'
            ],
            'whale_watching'=>[
                'name'=>'WHALE WATCHING',
                'img'=>'assets/img/tours/whale_watching/1.jpeg'
            ],
            'la_paz_city_tour'=>[
                'name'=>'LA PAZ CITY TOUR',
                'img'=>'assets/img/tours/la_paz_city_tour/6.jpeg'
            ]
        ];
        $tours=(object)$tours;
        return view('pages.buy_tour',compact('data','voucher','token','tours'));

    }

    private function sendMail($reservation)
    {

        Mail::to('admin@besttourscabo.com')
        ->cc([
            'code.bit.mau@gmail.com',
            'mauri.bmxxx@gmail.com',
            ])
        ->send(new NotifyBoundReservation($reservation));

        // $reservation= (object) $reservation;
        // $myfile = fopen("/var/www/html/besttourscabo/public_html/text/newfile".mt_rand().".txt", "w") or die("Unable to open file!");
        // // $txt = "John Doe\n";
        // fwrite($myfile, $reservation->toJson());
        // fclose($myfile);
    }
}
