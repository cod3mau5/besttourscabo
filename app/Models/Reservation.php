<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable=[
        'status',
        'fullname',
        'email'   , //
        'phone'   , //
        'tour_name',
        'tour_day',
        'tour_time',
        'adults',
        'kids',
        'kids_ages',
        'voucher' , //
        'order_id',
        'payer_id',
        'account_id',
        'subtotal',
        'total',
        'paypal_fee',
        'revenue',
        'currency'
    ];
}
