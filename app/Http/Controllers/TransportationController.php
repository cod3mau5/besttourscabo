<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransportationController extends Controller
{
    public function index(){
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
        return view('pages.transportation',compact('tours'));
    }
}
