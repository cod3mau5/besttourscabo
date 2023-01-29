<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
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
                'sunset_cruise'=>[
                    'name'=>'SUNSET CRUISE',
                    'img'=>'assets/img/tours/sunset_cruise/ea040fcf-84c6-491d-b62c-216d8e8a7e46.jpg'
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
            'sunset_cruise'=>[
                'name'=>'SUNSET CRUISE',
                'img'=>'assets/img/tours/sunset_cruise/ea040fcf-84c6-491d-b62c-216d8e8a7e46.jpg'
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
                        'sunset_cruise'=>[
                            'name'=>'SUNSET CRUISE',
                            'img'=>'assets/img/tours/sunset_cruise/ea040fcf-84c6-491d-b62c-216d8e8a7e46.jpg'
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
            'sunset_cruise'=>[
                'name'=>'SUNSET CRUISE',
                'img'=>'assets/img/tours/sunset_cruise/ea040fcf-84c6-491d-b62c-216d8e8a7e46.jpg'
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
            ])
        ->send(new NotifyBoundReservation($reservation));

        // $reservation= (object) $reservation;
        // $myfile = fopen("/var/www/html/besttourscabo/public_html/text/newfile".mt_rand().".txt", "w") or die("Unable to open file!");
        // // $txt = "John Doe\n";
        // fwrite($myfile, $reservation->toJson());
        // fclose($myfile);
    }
    public function sendContactMail(Request $request){

        if(empty($request['email']) || empty($request['phone'])){
            return [ 'success' => false, 'data' => $request->all() ];
        }else{
            Mail::to('admin@besttourscabo.com')
            ->cc([
                'code.bit.mau@gmail.com',
                ])
                ->send(new ContactMail($request->all()));
            return [ 'success' => true, 'data' => $request->all() ];
        }
    }

    public function sendReservation(Request $request){
        //         $resort_id = $request['_location_start'] > 0 ? $request['_location_start'] : $request['_location_end'];
        //         $trip_type = $request['_trip_type'] == 'o' ? 'oneway' : 'roundtrip';
        //         $message_t = $request['_trip_type'] == 'o' ? 'ARRIVAL' : 'ROUND-TRIP';
        //         $voucher   = "CD-".mt_rand();
        
        //         if ($request['_trip_type'] == 'o')
        //         {
        //             if ($request['_location_start'] == 0)
        //                 $message_t = "ARRIVAL";
        //             if ($request['_location_end'] == 0)
        //                 $message_t = "DEPARTURE";
        //         } else {
        //             $message_t = 'ROUND TRIP';
        //         }
            
        //         // //fetch resort name
        //         $resort = Resort::find($resort_id);
        //         //fetch unit name
        //         $unit   = Unit::find($request['_unit']);
        //         $location_start = $resort->name;
        //         if (!empty($request['_arrival_date']))
        //             $request['_arrival_date'] = date('Y-m-d', strtotime($request['_arrival_date']));
        
        //         if (!empty($request['_departure_date'])) {
        //             $request['_departure_date'] = date('Y-m-d', strtotime($request['_departure_date']));
        //         } else {
        //             $request['_departure_date'] = null;
        //         }
        //         if (!empty($request['_arrival_time']))
        //             $request['_arrival_time'] = date('H:i:s', strtotime($request['_arrival_time']));
        
        //         if (!empty($request['_departure_time'])) {
        //             $request['_departure_time'] = date('H:i:s', strtotime($request['_departure_time']));
        //         } else {
        //             $request['_departure_time'] = null;
        //         }
        
        //         $fullname = $request['_contact_firstname'] . " " . $request['_contact_lastname'];
        // // dd($request->all());
        //         // $wpdb now is $reservation
        //         $reservation=Reservation::create([
        //                "resort_id"          => $resort_id,
        //                "unit_id"            => $request['_unit'],
        //                "location_start"     => $request['_location_start'],
        //                "location_end"       => $request['_location_end'],
        //                "voucher"            => $voucher,
        //                "fullname"           => $fullname,
        //                "email"              => $request['_contact_email'],
        //                "type"               => $trip_type,
        //                "phone"              => $request['_contact_phone'],
        //                "passengers"         => $request['_passengers'],
        //                "children"           => $request['_children'],
        //                "booster_seat"       => $request['_booster_seat'] == 'true' ? true : false,
        //                "car_seat"           => $request['_car_seat'] == 'true' ? true : false,
        //                "shopping_stop"      => $request['_shopping_stop'] == 'true' ? true : false,
        //                "total_travelers"    => $request['_children'] + $request['_passengers'],
        //                "arrival_date"       => $request['_arrival_date'],
        //                "arrival_time"       => $request['_arrival_time'],
        //                "arrival_airline"    => $request['_arrival_company'],
        //                "arrival_flight"     => $request['_arrival_flight'],
        //                "departure_date"     => $request['_departure_date'],
        //                "departure_time"     => $request['_departure_time'],
        //                "departure_airline"  => $request['_departure_company'],
        //                "departure_flight"   => $request['_departure_flight'],
        //                "comments"           => $request['_contact_request'],
        //                "payment_type"       => $request['pay_method'],
        //                "subtotal"           => !empty($request['_subtotal']) ? $request['_subtotal'] : 0,
        //                "total"              => !empty($request['_total']) ? $request['_total'] : 0,
        //                "source"             => 'web',
        //                "created_at"         => date('Y-m-d H:m:i'),
        //                "updated_at"         => date('Y-m-d H:m:i')
        //         ]);
        
        //         $reservation->language = $request['language'];
        //         $reservation->message_t=$message_t;
        //         $reservation->resort=$resort;
        //         $reservation->unit=$unit;
        //         $reservation->arrivalFlight=$request['_arrival_company']." ".$request['_arrival_flight'];
        //         $reservation->arrivalDate= date('m/d/Y', strtotime($request['_arrival_date'])). " ". date('h:i a', strtotime($request['_arrival_time']));
        
        //         $reservation->departureFlight=$request['_departure_company']." ".$request['_departure_flight'];
        //         $reservation->departureDate= date('m/d/Y', strtotime($request['_departure_date'])). " ". date('h:i a', strtotime($request['_departure_time']));
        
                // Mail::to($reservation->email)
                //         ->cc([
                //             'cabodriversservices@gmail.com',
                //             'maubkpro@hotmail.com',
                //             'cabodriverloscabos@gmail.com'
                //             ])
                //         ->send(new SendReservation($reservation));
        
        $reservation=true;
                if($reservation){
                    $notification="la reserva se ha guardado correctamente";
                }else{
                    $notification="Hubo un problema al guardar la reserva";
                }
                return back()->with(compact('notification'));
        
    }
}
