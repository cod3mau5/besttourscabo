<?php

use App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;


// HOMEPAGE
Route::get('/', function () {
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
        ]
    ];
    $tours=(object)$tours;
    return view('pages.home',compact('tours'));
})->name('home');

// TOURS_CONTROLLER
Route::get('/{tourName}/{voucher?}/{token?}',[Controllers\ToursController::class,'tour'])->name('tour');


// TRANSPORTATION
Route::get('/transportation', function () {
    return view('pages.transportation');
})->name('transportation');

// INFO PAGES
Route::get('/about_us', function () {
    return view('pages.about_us');
})->name('about_us');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// TOUR PAYMENT PROCESS
Route::get('/checkout/{voucher}/{token}/tour',[Controllers\ReservationsController::class, 'edit'])->name('editTour');
Route::post('/checkout/{voucher}/create_tour',[Controllers\ReservationsController::class, 'create'])->name('createTour');
Route::post('/checkout/{voucher}/update_tour',[Controllers\ReservationsController::class, 'update'])->name('updateTour');

//  Confirm JavaScript payment PayPal
Route::get('/paypal/process/{orderID}/{voucher}', [Controllers\Payments\PayPalCardController::class, 'process'])->name('paypal.process');

Route::get('/payment_successfull/{payer_name?}',function($payer_name=null){
    // return 'Hello, '.$payer_name.'your payment was completed, thanks for your purchase!';
    return view('pages.thanks',compact('payer_name'));
});
Route::get('/payment_canceled',function(){return 'CANCELED PAYMENT';});

// CreateReservation
// Route::post('/create_reservation',[Controllers\ReservationsController::class, 'create'])->name('createReservation');

//SEND MAIL
Route::post('/send_mail', [Controllers\ReservationsController::class,'sendMail'])->name('sendMail');
