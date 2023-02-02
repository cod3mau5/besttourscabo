<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ToursController extends Controller
{

    private  $tours =[
                'traditional_arch_tour'=>[
                    'name'          => "TRADITIONAL ARCH TOUR",
                    'price'         => 25,
                    'duration'      => '40 45 min',
                    'min_age'       => 0,
                    'description'   => "The walk to the arch in the traditional glass bottom boat consists of a 40-45 min tour where we will visit different points.
                    1. Piedra del Pelícano (also known as Playa Pelícano, where the natural aquarium is located, we find reefs and thousands of marine species, one of the best areas for snorkeling 2. Playa del Amor (the only beach in America where we will find two seas In Playa del Amor Mar de Cortez and a few meters walking we find the Pacific Ocean or better known as Playa del Dicorcio for its open sea that is a bit aggressive 3. The finger of Neptune (or BAJA CALIFORNIA SUR backwards 4. window to the pacific ( also known as the kiss since the two seas meet there 5. the emblematic arch (the most expected here we can appreciate the iconic arch where we will take the best photos and take our memories home 6. colony of sea lions (here we will find many sea lions marine depending on the time and season as they go hunting for their food or partner 7.the end of the earth (the last stone in BAJA where we can still see a sea lion). he is always taking care of it 8. the stone of scobby doo papa xD (in one of the largest rock formations and similar to the famous figure of scobby doo, cast by nothing more and nothing less than the best architect in the world NATURE 8. the pirate's cave . (The story goes that the pirates protected their treasures there when they came shouting from their enemies.",
                    'includes'      =>'Includes safe equipment. Certified Captain. And drop off at Playa del Amor or Playa del Pelicano for a minimum of one hour until 4:30 p.m.',
                    'not_includes'  => 'does not include transportation, drinks, or access to the pier since all are private and charge a tax of 1 to 2 dlls per person',
                    'voucher'       => null,
                    'token'         => null,
                    'gallery'       => [],
                    'min_time'=>'9:00am',
                    'max_time'=>'3:30pm',
                    'time_interval'=>30,
                    'extra_fees'=>null
                ],
                'sunset_cruise'=>[
                    'name' => "SUNSET CRUISE",
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
                    'voucher' => null,
                    'token' => null,
                    'gallery'       => [],
                    'check_in'=> '4:30 pm',
                    'min_time'=>'5:00pm',
                    'max_time'=>'5:00pm',
                    'time_interval'=>30,
                    'extra_fees'=>null
                ],
                'whale_watching'=>[
                    'name'          => "WHALE WATCHING",
                    'price'         => 50,
                    'duration'      => '40 45 min',
                    'min_age'       => 0,
                    'description'   => "Discover the awe-inspiring beauty of Cabo San Lucas on a once in a lifetime whale watching tour! From the comfort of our state-of-the-art boats, you'll witness the majestic humpback and gray whales as they migrate through the crystal-clear waters of the Sea of Cortez. Our expert guides will provide insightful information about these incredible creatures and their habitats, making it a perfect educational opportunity for the whole family.

                    You'll be amazed by the graceful acrobatic displays of these gentle giants as they breach, tail slap and spy hop right in front of you. The tour also includes a stop at the famous Arch of Cabo San Lucas, where you'll snap unforgettable photos of the iconic natural rock formation.
                    
                    Don't miss out on this once in a lifetime opportunity! Book your tour now and make memories that will last a lifetime!",
                    'includes'      =>'Includes safe equipment. Certified Captain. And drop off at Playa del Amor or Playa del Pelicano for a minimum of one hour until 4:30 p.m.',
                    'not_includes'  => 'does not include transportation, drinks, or access to the pier since all are private and charge a tax of 1 to 2 dlls per person',
                    'voucher'       => null,
                    'token'         => null,
                    'gallery' => [],
                    'min_time'=>'9:00am',
                    'max_time'=>'3:30pm',
                    'time_interval'=>30,
                    'extra_fees'=>null
                ],
                'la_paz_city_tour'=>[
                    'name'          => "LA PAZ CITY TOUR",
                    'price'         => 119,
                    'duration'      => '12 hours',
                    'min_age'       => 4,
                    'description'   => "Experience the ultimate all-day adventure at Balandra Beach! Join us as we set out at 6am and return at 8pm, where you will stay in the stunning  Balandra Beach for 2 hours, where you'll discover the unique Balandra Stone Mushroom and various hiking trails. Next, we'll head to Coromuel Beach for 2 hours of relaxation. Take a city tour to explore the most historic and iconic sites, including the La Paz Malecón, Misión, Letras, the Pearl of the Sea of Cortez, and enjoy some free time for shopping and photos. Discover the magical town of Todos Santos, including Letras la Misión, the Aztec Calendar, and the legendary Hotel California, with plenty of time to explore. This tour will take approximately 12 hours.",
                    'includes'      =>'Round trip transportation from your hotel in San José del Cabo, the tourist corridor, or Cabo San Lucas. Bottled water throughout the tour. Enjoy a breakfast, either a sandwich or burrito, and a delicious lunch, with options of grilled fish, beef or chicken fajitas (Vegetarian options available) The meals will be served at a restaurant, only paying for any additional beverages consumed.',
                    'not_includes'  => 'does not include drinks, you will have to pay for the drinks you consume.',
                    'voucher'       => null,
                    'token'         => null,
                    'gallery' => [],
                    'check_in'=> 'we start picking up people at 4:30 am',
                    'min_time'=>'6:00am',
                    'max_time'=>'6:00pm',
                    'time_interval'=>30,
                    'extra_fees'=>null
                ],
                'camel_ride'=>[
                    'name'          => "CAMEL RIDE",
                    'price'         => 95,
                    'duration'      => '2 hours',
                    'min_age'       => 4,
                    'description'   => "Experience the ultimate desert adventure with our Camel Safari Tour in Cabo San Lucas! Join us for a 2-hour journey through the beautiful ecological reserve on the back of a majestic camel. Our experienced, bilingual guides will lead the way, providing a safe and enjoyable experience for all.

                    For just $95 per person ($60 for children), you'll get to enjoy a buffet of delicious tacos including chicken, pork, and more. Plus, indulge in some tequila tasting while taking in the stunning desert landscape.
                    
                    Your tour includes transportation, safety equipment, and refreshing natural and flavored water. You'll have an opportunity to explore the reserve, and enjoy the stunning landscape of Cabo San Lucas.
                    
                    Don't miss out on this once-in-a-lifetime opportunity to take a Safari tour on a camel! Book now and experience the thrill of the desert.",
                    'includes'      =>'Transportation included, taco buffet chicken meat pork, tequila testing, Walk through the ecological reserve, Bilingual guides with experience in handling camels, safari tour, Natural and flavored water and Safety equipment',
                    'not_includes'  => 'does not include sunscreen.',
                    'voucher'       => null,
                    'token'         => null,
                    'gallery' => [],
                    'min_time'=>'9:00am',
                    'max_time'=>'4:00pm',
                    'time_interval'=>60,
                    'extra_fees'=>[
                        'park entrance'=> [
                            'cost'=>20,
                            'description'=>'You must pay $20 USD park entrance fee per person. Optional protection benefits offered at check-in'
                        ]
                    ]
                ]
    ];

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
                ]
    ];

    public function tour($tour,$voucher=null,$token=null){
        $reservation= new Reservation;
        if($voucher && $token){
            $reservation=Reservation::where('voucher',$voucher)->where('token',$token)->firstOrFail();
            $reservation=(object)$reservation;
        }

        switch ($tour) {
            case 'sunset_cruise':
                $directory = base_path("public_html/assets/img/tours/$tour/");
                $tour= $this->tours['sunset_cruise'];
                break;
            case 'traditional_arch_tour':
                $directory = base_path("public_html/assets/img/tours/$tour/");
                $tour= $this->tours['traditional_arch_tour'];
                break;
            case 'whale_watching':
                $directory = base_path("public_html/assets/img/tours/$tour/");
                $tour= $this->tours['whale_watching'];
                break;
            case 'la_paz_city_tour':
                $directory = base_path("public_html/assets/img/tours/$tour/");
                    $tour= $this->tours['la_paz_city_tour'];
                break;
            case 'camel_ride':
                $directory = base_path("public_html/assets/img/tours/$tour/");
                    $tour= $this->tours['camel_ride'];
                break;
            default:
                abort(404);
        }

        
        // Abre el directorio y lee su contenido
        $dir = opendir($directory);
        $img_gallery = array();
        // Recorre cada archivo en el directorio
        while (($file = readdir($dir)) !== false) {
            // Si el archivo es una imagen, agregarlo al array
            if (preg_match("/(\.jpg|\.png|\.webp|\.jpeg)$/i", $file)) {
                $fullpath=$directory.$file;
                $relativepath=str_replace(base_path()."/public_html/",'',$fullpath);
                array_push($img_gallery, $relativepath);
            }
        }
        // return $img_gallery;
        // Cierra el directorio
        closedir($dir);
        $tour['gallery']=$img_gallery;
        $tour['voucher']=$voucher? $voucher:'';
        $tour['token']=$token? $token:'';
        $tour= (object)$tour;
        $tours=$this->tours_images;
        $tours=(object)$tours;
        // return  $tour->gallery;
        return view('pages.tours',compact('tours','tour','reservation'));

    }

}
