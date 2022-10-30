<?php

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOMEPAGE
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// TOURS
Route::get('/traditional_arch_tour', function () {
    $tour_name="TRADITIONAL ARCH TOUR";
    $tour_price=19.96;
    return view('pages.traditional_arch_tour',compact('tour_name','tour_price'));
})->name('traditional_arch_tour');

Route::post('/buy-tour', function (Request $request) {
    dd($request->all());
    // $client_info= $request->get('client_info');
    // $tour_info= $request->get('tour_info');
    return view('pages.buy_tour',compact('client_info','tour_info'));
})->name('buyTour');

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
Route::post('/create_reservation',[Controllers\ReservationsController::class, 'create'])->name('createReservation');
Route::post('/send_mail', [Controllers\ReservationsController::class,'sendMail'])->name('sendMail');
