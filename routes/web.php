<?php

use App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;


// HOMEPAGE
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// TOURS_CONTROLLER
Route::get('/traditional_arch_tour/{voucher?}/{token?}', function ($voucher=null,$token=null) {

    if($voucher && $token){
        $data=Reservation::where('voucher',$voucher)->where('token',$token)->firstOrFail();
    }

    $tour_name="TRADITIONAL ARCH TOUR";
    $tour_price=19.96;
    return view('pages.traditional_arch_tour',compact('tour_name','tour_price','voucher'));

})->name('traditional_arch_tour');

// TOUR PAYMENT PROCESS
Route::post('/checkout/{voucher}/tour',[Controllers\ReservationsController::class, 'create'])->name('buyTour');
Route::get('/checkout/{voucher}/{token}/tour',[Controllers\ReservationsController::class, 'update'])->name('updateTour');

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

//  Confirm JavaScript payment PayPal (credit card)
Route::get('/paypal/process/{orderID}', [Controllers\Payments\PayPalCardController::class, 'process'])->name('paypal.process');

// CreateReservation
// Route::post('/create_reservation',[Controllers\ReservationsController::class, 'create'])->name('createReservation');
Route::post('/send_mail', [Controllers\ReservationsController::class,'sendMail'])->name('sendMail');
