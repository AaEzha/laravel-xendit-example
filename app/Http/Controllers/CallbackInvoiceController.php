<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Xendit\Xendit;

class CallbackInvoiceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (empty($request->all())) {
            return response()->json(['message' => 'Can not process empty request'], 400);
        }

        $json = json_decode($request->getContent());

        Cart::updateOrCreate(
            [
                'order_id' => $json->external_id,
                'amount' => $json->amount,
            ],
            [
                'invoice_id' => $json->id,
                'user_id' => $json->user_id,
                'payment_method' => $json->payment_method,
                'status' => $json->status,
                'paid_amount' => $json->paid_amount,
                'payment_method' => $json->payment_method,
                'payment_channel' => $json->payment_channel,
                'payment_destination' => $json->payment_destination,
                'payer_email' => $json->payer_email,
                'adjusted_received_amount' => $json->adjusted_received_amount,
                'fees_paid_amount' => $json->fees_paid_amount,
                'bank_code' => $json->bank_code,
                'paid_at' => Carbon::parse($json->paid_at)->format('Y-m-d H:i:s'),
            ]
        );

        return response()->json([
            'status' => 200,
            'message' => 'Success',
            'data' => [
                'order_id' => $json->external_id,
                'invoice_id' => $json->id,
                'status' => $json->status,
                'paid_amount' => $json->paid_amount,
            ]
        ]);
    }
}
