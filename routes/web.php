<?php

use App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;


// HOMEPAGE
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// TOURS_CONTROLLER
Route::get('/cabo_escape/{voucher?}/{token?}', function ($voucher=null,$token=null) {

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
        'check_in'=> '4:45 PM'
    ];
    $tour= (object)$tour;
    // return  $reservation->kids_ages;
    return view('pages.cabo_escape',compact('tour','reservation'));

})->name('cabo_escape');

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
