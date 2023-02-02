<?php

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;
use App\Models\Transportation\Resort;


// HOMEPAGE
Route::get('/', [Controllers\PagesController::class,'homepage'] )->name('homepage');

Route::get('/resorts', function(){
    return Resort::all();
} )->name('resorts');

// INFO PAGES
Route::get('/about_us', [Controllers\PagesController::class,'about_us'] )->name('about_us');
Route::get('/contact', [Controllers\PagesController::class,'contact'] )->name('contact');
Route::get('/gallery', [Controllers\PagesController::class,'gallery'] )->name('gallery');
# Languages for vue
Route::get('/languages/{language}',[Controllers\PagesController::class,'getLanguages'])->name('getLanguages');
// TRANSPORTATION
Route::get('/transportation/{language?}', [Controllers\TransportationController::class,'index'] )->name('transportation');
Route::post('/send-reservation',[Controllers\ReservationsController::class,'sendReservation'])->name('sendReservation');

// TOUR PAYMENT PROCESS
Route::get('/checkout/{voucher}/{token}/tour',[Controllers\ReservationsController::class, 'edit'])->name('editTour');
Route::post('/checkout/{voucher}/create_tour',[Controllers\ReservationsController::class, 'create'])->name('createTour');
Route::post('/checkout/{voucher}/update_tour',[Controllers\ReservationsController::class, 'update'])->name('updateTour');

//  Confirm JavaScript payment PayPal
Route::get('/paypal/process/{orderID}/{voucher}', [Controllers\Payments\PayPalCardController::class, 'process'])->name('paypal.process');

Route::get('/payment_successful',function(Request $request,$payer_name=null){
    $tours=[
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
            'img'=>'assets/img/tours/la_paz_city_tour/6.jpeg'
        ],
        'camel_ride'=>[
            'name'=>'CAMEL RIDE',
            'img'=>'assets/img/tours/camel_ride/1.jpeg'
        ]
    ];
    $tours=(object)$tours;
    if ($request->has('payer_name')) {
        $payer_name = $request->input('payer_name');
        return view('pages.thanks',compact('payer_name','tours'));
     }else{
        return "Oops!, may be you don't finish correctly your tour reservation form.";
     }

});
Route::get('/payment_canceled',function(){return 'CANCELED PAYMENT';});

// CreateReservation
// Route::post('/create_reservation',[Controllers\ReservationsController::class, 'create'])->name('createReservation');

//SEND MAIL
Route::post('/send_mail', [Controllers\ReservationsController::class,'sendMail'])->name('sendMail');
Route::post('/send_contact_mail', [Controllers\ReservationsController::class,'sendContactMail'])->name('sendContactMail');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// TOURS_CONTROLLER
Route::get('/{tourName}/{voucher?}/{token?}',[Controllers\ToursController::class,'tour'])->name('tour');