<?php

namespace App\Http\Controllers;

use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Importez la façade Log

class PaymentController extends Controller
{
    public function goPayment()
    {
        return view('index'); 
    }

    public function payment(Request $request)
    {
        $provider = new PayPalClient; 
        $provider->setApiCredentials(config('paypal')); // Load credentials from config/paypal.php
        $paypal = $provider->getAccessToken();
    
        $orderData = [
            "intent" => "CAPTURE",
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD", 
                        "value" => "1.00" // Change this to your desired amount
                    ]
                ]
            ],
            "application_context" => [
                "cancel_url" => route('payment.cancel'),
                "return_url" => route('payment.success'),
            ]
        ];
    
        try {
            $response = $provider->createOrder($orderData);
    
            if (isset($response['id']) && $response['status'] === "CREATED") {
                foreach ($response['links'] as $link) {
                    if ($link['rel'] === 'approve') {
                        return redirect()->away($link['href']);
                    }
                }
            } else {
                return redirect()->route('payment.cancel')->with('error', 'Payment could not be initiated.');
            }
        } catch (\Exception $e) {
            return redirect()->route('payment.cancel')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
    

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal')); 
        $provider->getAccessToken();
    
        try {
            $response = $provider->capturePaymentOrder($request->token);
    
            if (isset($response['status']) && in_array($response['status'], ['COMPLETED', 'APPROVED'])) {
                return view('donations.success');
            } else {
                return view('donations.error');
            }
        } catch (\Exception $e) {
            return view('donations.error')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
    public function cancel()
{
    // Log the cancellation or handle it accordingly
    Log::info('Payment was cancelled by the user.');

    // Redirect to a specific page or show a cancellation message
    return view('donations.cancel')->with('message', 'Payment has been cancelled.');
}

    
}