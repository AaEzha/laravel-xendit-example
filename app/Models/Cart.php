<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = [
        'xendit_id', 'adjusted_received_amount', 'fees_paid_amount',
        'payment_channel', 'payment_destination', 'amount'
    ];
}
