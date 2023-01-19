<?php

use App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;



// HOMEPAGE
Route::get('/', [Controllers\PagesController::class,'homepage'] )->name('homepage');
// INFO PAGES
Route::get('/about_us', [Controllers\PagesController::class,'about_us'] )->name('about_us');
Route::get('/contact', [Controllers\PagesController::class,'contact'] )->name('contact');
// TRANSPORTATION
Route::get('/transportation', [Controllers\TransportationController::class,'index'] )->name('transportation');

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// TOURS_CONTROLLER
Route::get('/{tourName}/{voucher?}/{token?}',[Controllers\ToursController::class,'tour'])->name('tour');