<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ToursController extends Controller
{
    public function cabo_escape($voucher=null,$token=null){
        $reservation= new Reservation;
        if($voucher && $token){
            $reservation=Reservation::where('voucher',$voucher)->where('token',$token)->firstOrFail();
            $reservation=(object)$reservation;
        }
    
        // $tour=new \stdClass;
    
        $tour= [
            'name' => "CABO ESCAPE",
            'price' => 80,
            'duration'=> '2 hours',
            'min_age' => 5,
            'description'=>'it is a unique experience to tour the bay of los cabos and witness the beautiful sunset
            of the Pacific sea accompanied by good music a delicious poollo fajita bar,
            beef and vegetarian in addition to having an open bar and small shows this and more
            they have the friendly staff of the gigantic cape scape ready...',
            'includes'      =>'includes beef chicken and vegetarian fajitas dinner, open bar in national drinks,
            dj shows',
            'not_includes'  => 'does not include the entrance to the dock is an access that all marinas charge for being deprived of two dlls per pax premium drinks',
            'voucher' => $voucher? $voucher:'',
            'token' => $token? $token:'',
            'check_in'=> '4:45 PM',
            'gallery'       => [
                'assets/img/tours/cabo_escape/ea040fcf-84c6-491d-b62c-216d8e8a7e46.jpg',
                'assets/img/tours/cabo_escape/cabo-escape-los-cabos-2.jpg',
                'assets/img/tours/cabo_escape/cabo-escape-los-cabos-5.jpg',
                'assets/img/tours/cabo_escape/cabo-escape-2019-r8.jpg'
            ]
        ];
    
        $tour= (object)$tour;
        // return  $reservation->kids_ages;
        return view('pages.tours',compact('tour','reservation'));
    }

    public function traditional_arch_tour($voucher=null,$token=null){
        $reservation= new Reservation;
        if($voucher && $token){
            $reservation=Reservation::where('voucher',$voucher)->where('token',$token)->firstOrFail();
            $reservation=(object)$reservation;
        }
    
        // $tour=new \stdClass;
    
        $tour= [
            'name'          => "TRADITIONAL ARCH TOUR",
            'price'         => 25,
            'duration'      => '40 45 min',
            'min_age'       => 0,
            'description'   => "The walk to the arch in the traditional glass bottom boat consists of a 40-45 min tour where we will visit different points.
            1. Piedra del Pelícano (also known as Playa Pelícano, where the natural aquarium is located, we find reefs and thousands of marine species, one of the best areas for snorkeling 2. Playa del Amor (the only beach in America where we will find two seas In Playa del Amor Mar de Cortez and a few meters walking we find the Pacific Ocean or better known as Playa del Dicorcio for its open sea that is a bit aggressive 3. The finger of Neptune (or BAJA CALIFORNIA SUR backwards 4. window to the pacific ( also known as the kiss since the two seas meet there 5. the emblematic arch (the most expected here we can appreciate the iconic arch where we will take the best photos and take our memories home 6. colony of sea lions (here we will find many sea lions marine depending on the time and season as they go hunting for their food or partner 7.the end of the earth (the last stone in BAJA where we can still see a sea lion). he is always taking care of it 8. the stone of scobby doo papa xD (in one of the largest rock formations and similar to the famous figure of scobby doo, cast by nothing more and nothing less than the best architect in the world NATURE 8. the pirate's cave . (The story goes that the pirates protected their treasures there when they came shouting from their enemies.",
            'includes'      =>'Includes safe equipment. Certified Captain. And drop off at Playa del Amor or Playa del Pelicano for a minimum of one hour until 4:30 p.m.',
            'not_includes'  => 'does not include transportation, drinks, or access to the pier since all are private and charge a tax of 1 to 2 dlls per person',
            'voucher'       => $voucher? $voucher:'',
            'token'         => $token? $token:'',
            'gallery'       => [
                'assets/img/tours/traditional_arch_tour/img_1.webp',
                'assets/img/tours/traditional_arch_tour/img_2.jpg',
                'assets/img/tours/traditional_arch_tour/img_3.jpg',
                'assets/img/tours/traditional_arch_tour/img_4.jpg'
            ]
        ];
    
        $tour= (object)$tour;
        // return  $reservation->kids_ages;
        return view('pages.tours',compact('tour','reservation'));
    }

    public function whale_watching($voucher=null,$token=null){
        $reservation= new Reservation;
        if($voucher && $token){
            $reservation=Reservation::where('voucher',$voucher)->where('token',$token)->firstOrFail();
            $reservation=(object)$reservation;
        }
    
        // $tour=new \stdClass;
    
        $tour= [
            'name'          => "WHALE WATCHING",
            'price'         => 25,
            'duration'      => '40 45 min',
            'min_age'       => 0,
            'description'   => "The walk to the arch in the traditional glass bottom boat consists of a 40-45 min tour where we will visit different points.
            1. Piedra del Pelícano (also known as Playa Pelícano, where the natural aquarium is located, we find reefs and thousands of marine species, one of the best areas for snorkeling 2. Playa del Amor (the only beach in America where we will find two seas In Playa del Amor Mar de Cortez and a few meters walking we find the Pacific Ocean or better known as Playa del Dicorcio for its open sea that is a bit aggressive 3. The finger of Neptune (or BAJA CALIFORNIA SUR backwards 4. window to the pacific ( also known as the kiss since the two seas meet there 5. the emblematic arch (the most expected here we can appreciate the iconic arch where we will take the best photos and take our memories home 6. colony of sea lions (here we will find many sea lions marine depending on the time and season as they go hunting for their food or partner 7.the end of the earth (the last stone in BAJA where we can still see a sea lion). he is always taking care of it 8. the stone of scobby doo papa xD (in one of the largest rock formations and similar to the famous figure of scobby doo, cast by nothing more and nothing less than the best architect in the world NATURE 8. the pirate's cave . (The story goes that the pirates protected their treasures there when they came shouting from their enemies.",
            'includes'      =>'Includes safe equipment. Certified Captain. And drop off at Playa del Amor or Playa del Pelicano for a minimum of one hour until 4:30 p.m.',
            'not_includes'  => 'does not include transportation, drinks, or access to the pier since all are private and charge a tax of 1 to 2 dlls per person',
            'voucher'       => $voucher? $voucher:'',
            'token'         => $token? $token:'',
            'gallery' => [
                'assets/img/tours/whale_watching/1.jpeg',
                'assets/img/tours/whale_watching/2.jpeg',
                'assets/img/tours/whale_watching/3.jpeg',
                'assets/img/tours/whale_watching/4.jpeg',
                'assets/img/tours/whale_watching/5.jpeg',
                'assets/img/tours/whale_watching/6.jpeg',
                'assets/img/tours/whale_watching/7.jpeg'
            ]
        ];
    
        $tour= (object)$tour;
        // return  $tour->gallery;
        return view('pages.tours',compact('tour','reservation'));
    }
}
