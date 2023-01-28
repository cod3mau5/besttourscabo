<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function homepage(){
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
            ],
            'camel_ride'=>[
                'name'=>'CAMEL RIDE',
                'img'=>'assets/img/tours/camel_ride/1.jpeg'
            ]
        ];
        $tours=(object)$tours;
        return view('pages.homepage',compact('tours'));
    }

    public function about_us(){
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
                'img'=>'assets/img/tours/la_paz_city_tour/1.jpeg'
            ],
            'camel_ride'=>[
                'name'=>'CAMEL RIDE',
                'img'=>'assets/img/tours/camel_ride/1.jpeg'
            ]
        ];
        $tours=(object)$tours;
        return view('pages.about_us',compact('tours'));
    }
    
    public function contact(){
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
                'img'=>'assets/img/tours/la_paz_city_tour/1.jpeg'
            ],
            'camel_ride'=>[
                'name'=>'CAMEL RIDE',
                'img'=>'assets/img/tours/camel_ride/1.jpeg'
            ]
        ];
        $tours=(object)$tours;
        return view('pages.contact',compact('tours'));
    }

    public function getLanguages($language){

        $options=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        ); 
        if($language == 1){
            return json_decode(file_get_contents(asset('assets/json/english.json'),false,stream_context_create($options)), true);
        }else{
            return json_decode(file_get_contents(asset('assets/json/spanish.json'),false,stream_context_create($options)), true);
        }
    }
}
