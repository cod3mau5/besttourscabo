<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            //status
            $table->string('status',255)->nullable();

            //personal info
            $table->string('fullname',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('phone', 30)->nullable();

            // pax
            $table->unsignedTinyInteger('adults')->nullable();
            $table->unsignedTinyInteger('kids')->nullable();

            //tour
            $table->string('tour_name',255)->nullable();
            $table->date('tour_day')->nullable();
            $table->time('tour_time')->nullable();

            // control
            $table->string('voucher',255)->unique();;

            //paypal
            $table->string('order_id',255)->nullable();
            $table->string('payer_id',255)->nullable();
            $table->string('account_id',255)->nullable();

            // amount
            $table->decimal('subtotal',10,2)->nullable();
            $table->decimal('total',10,2)->nullable();
            $table->decimal('paypal_fee',10,2)->nullable();
            $table->decimal('revenue',10,2)->nullable();
            $table->string('currency')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
