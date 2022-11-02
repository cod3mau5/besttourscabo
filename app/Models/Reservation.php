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
        'token',
        'voucher' ,
        'email'   ,
        'phone'   ,
        'tour_name',
        'tour_day',
        'tour_time',
        'tour_min_age',
        'adults',
        'kids',
        'kids_ages',
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
