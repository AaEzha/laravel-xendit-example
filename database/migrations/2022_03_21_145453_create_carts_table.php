<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('user_id')->nullable();
            $table->string('invoice_id')->nullable();
            // detail produk
            $table->string('amount');
            $table->string('description');
            // detail pembeli
            $table->string('name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('city');
            $table->string('country');
            $table->string('postal_code');
            $table->string('state');
            $table->string('street_line1');
            $table->string('street_line2')->nullable();
            // pembayaran
            $table->string('payment_method')->nullable();
            $table->string('payment_channel')->nullable();
            $table->string('payment_destination')->nullable();
            $table->string('paid_amount')->nullable();
            $table->string('payer_email')->nullable();
            $table->string('adjusted_received_amount')->nullable();
            $table->string('fees_paid_amount')->nullable();
            $table->string('bank_code')->nullable();
            $table->dateTime('paid_at')->nullable();
            $table->string('status')->nullable()->default('UNPAID');
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
        Schema::dropIfExists('carts');
    }
};
