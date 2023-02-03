<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class PagesController extends Controller
{

    private $tours_images=[
        'sunset_cruise'=>[
            'name'=>'SUNSET CRUISE',
            'img'=>'assets/img/tours/sunset_cruise/ea040fcf-84c6-491d-b62c-216d8e8a7e46.jpg'
        ],
        'traditional_arch_tour'=>[
            'name'=>'TRADITIONAL ARCH TOUR',
            'img'=>'assets/img/tours/traditional_arch_tour/tat_5.jpg'
        ],
        'whale_watching'=>[
            'name'=>'WHALE WATCHING',
            'img'=>'assets/img/tours/whale_watching/ww_9.jpg'
        ],
        'la_paz_city_tour'=>[
            'name'=>'LA PAZ CITY TOUR',
            'img'=>'assets/img/tours/la_paz_city_tour/6.jpeg'
        ],
        'camel_ride'=>[
            'name'=>'CAMEL RIDE',
            'img'=>'assets/img/tours/camel_ride/1.jpeg'
        ],
        'clear_boat'=>[
            'name'=>'CLEAR BOAT',
            'img'=>'assets/img/tours/clear_boat/Enva-Tours-Clear-Boat1.jpg'
        ],
        'horseback_riding_for_begginer_and_novice'=>[
            'name'=>'HORSEBACK RIDING FOR BEGGINER AND NOVICE',
            'img'=>'assets/img/tours/horseback_riding_for_begginer_and_novice/8.jpg'
        ],
        'single_atv_tour'=>[
            'name'=>'SINGLE ATV TOUR',
            'img'=>'assets/img/tours/single_atv_tour/1.jpg'
        ],
        'horseback_riding_for_intermediate_and_advanced'=>[
            'name'=>'HORSEBACK RIDING FOR INTERMEDIATE AND ADVANCED',
            'img'=>'assets/img/tours/horseback_riding_for_intermediate_and_advanced/5.jpg'
        ],
        'side_by_side_adventure'=>[
            'name'=>'SIDE BY SIDE ADVENTURE',
            'img'=>'assets/img/tours/side_by_side_adventure/7.jpg'
        ],
];


    public function homepage(){
        $tours=(object)$this->tours_images;
        return view('pages.homepage',compact('tours'));
    }

    public function about_us(){
        $tours=(object)$this->tours_images;
        return view('pages.about_us',compact('tours'));
    }

    public function contact(){
        $tours=(object)$this->tours_images;
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
