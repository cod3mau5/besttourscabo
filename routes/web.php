<?php

use App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;


// HOMEPAGE
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// TOURS_CONTROLLER
//cabo escape
Route::get('/cabo_escape/{voucher?}/{token?}', [Controllers\ToursController::class,'cabo_escape'] )->name('cabo_escape');

// TRADITIONAL ARCH TOUR
Route::get('/traditional_arch_tour/{voucher?}/{token?}', [Controllers\ToursController::class,'traditional_arch_tour'] )->name('traditional_arch_tour');

// WHALE WATCHING
Route::get('/whale_watching/{voucher?}/{token?}', [Controllers\ToursController::class,'whale_watching'] )->name('whale_watching');


Route::get('/payment_successfull/{payer_name?}',function($payer_name=null){
    // return 'Hello, '.$payer_name.'your payment was completed, thanks for your purchase!';
    return view('pages.thanks',compact('payer_name'));
});
Route::get('/payment_canceled',function(){return 'CANCELED PAYMENT';});


Route::get('/whale_watching', function () {
    return view('pages.whale_watching');
})->name('whale_watching');
Route::get('/fishing_tours', function () {
    return view('pages.fishing_tours');
})->name('fishing_tours');
Route::get('/sunset_at_sea', function () {
    return view('pages.sunset_at_sea');
})->name('sunset_at_sea');
Route::get('/snorkel', function () {
    return view('pages.snorkel');
})->name('snorkel');


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

// CreateReservation
// Route::post('/create_reservation',[Controllers\ReservationsController::class, 'create'])->name('createReservation');

//SEND MAIL
Route::post('/send_mail', [Controllers\ReservationsController::class,'sendMail'])->name('sendMail');
