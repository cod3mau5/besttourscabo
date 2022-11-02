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

    $reservation= new Reservation;
    if($voucher && $token){
        $reservation=Reservation::where('voucher',$voucher)->where('token',$token)->firstOrFail();
        $reservation=(object)$reservation;
    }

    $tour_name="TRADITIONAL ARCH TOUR";
    $tour_price=19.96;
    $tour_min_age=3;
    // return  $reservation->kids_ages;
    return view('pages.traditional_arch_tour',compact('tour_name','tour_price','tour_min_age','voucher','token','reservation'));

})->name('traditional_arch_tour');



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

//  Confirm JavaScript payment PayPal (credit card)
Route::get('/paypal/process/{orderID}', [Controllers\Payments\PayPalCardController::class, 'process'])->name('paypal.process');

// CreateReservation
// Route::post('/create_reservation',[Controllers\ReservationsController::class, 'create'])->name('createReservation');
Route::post('/send_mail', [Controllers\ReservationsController::class,'sendMail'])->name('sendMail');
