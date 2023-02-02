<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Transportation\Rate;
use App\Models\Transportation\Unit;
use App\Models\Transportation\Resort;

class TransportationController extends Controller
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
            'img'=>'assets/img/tours/whale_watching/1.jpeg'
        ],
        'la_paz_city_tour'=>[
            'name'=>'LA PAZ CITY TOUR',
            'img'=>'assets/img/tours/la_paz_city_tour/1.jpeg'
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

    public function index($language=1){
        $resort_options = '';
        $unit_options   = '';
        $vehicles = array();
        // $resorts = $wpdb->get_results('SELECT * FROM resorts ORDER BY name ASC');
        // $units   = $wpdb->get_results('SELECT * FROM units ORDER BY name ASC');
        // $rates   = $wpdb->get_results('SELECT * FROM rates ORDER BY zone_id, unit_id');
        $resorts = Resort::all()->sortBy("name");
        $units   = Unit::all()->sortBy("name");
        # ONLY SUBURBAN
        // $rates   = Rate::where('unit_id','1')->get()->sortBy('zone_id');
        #ALL UNTIS ENABLED
        $rates= Rate::all()->sortBy('zone_id'); 
        foreach ($resorts as $row) {
            $resort_options .=  '<option value="'.$row->id.'" data-zone="'.$row->zone_id.'">'.
                                    htmlentities($row->name).
                                '</option>';
        }
    
        foreach ($units as $unit) {
            $vehicles[$unit->id] = ['name'=> $unit->name, 'capacity'=> $unit->capacity];
            $unit_options .=  '<option value="'.$unit->id.'" data-name="'.$unit->id.'">'.
                                    htmlentities($unit->name).
                                '</option>';
        }
    
        $start_location = (isset($_GET['start_location'])) ? $_GET['start_location'] : '';
        $end_location   = (isset($_GET['end_location'])) ? $_GET['end_location'] : '';
        $passengers     = (isset($_GET['passengers'])) ? (int) $_GET['passengers'] : '';
        $date_arrival   = (isset($_GET['arrival'])) ?  $_GET['arrival'] : '';
        $date_departure = (isset($_GET['departure'])) ? $_GET['departure'] : '';

        $options=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        ); 

        if($language == 1){
            $language= json_decode(file_get_contents(asset('assets/json/english.json'),false,stream_context_create($options)), true);
            $langUpdate=1;
        }else{
            $language= json_decode(file_get_contents(asset('assets/json/spanish.json'),false,stream_context_create($options)), true);
            $langUpdate=0;
        }

        $tours=(object)$this->tours_images;

        return view('pages.transportation',compact(
                                                'resort_options','unit_options','vehicles',
                                                'resorts','units','rates','start_location',
                                                'end_location','passengers','date_arrival',
                                                'date_departure','language','langUpdate',
                                                'tours'
                                            ));
    }
}
