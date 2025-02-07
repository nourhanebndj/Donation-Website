<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

 return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'), // Or 'live' for production
    'sandbox' => [
        'client_id'     => env('PAYPAL_SANDBOX_CLIENT_ID', 'your-sandbox-client-id'),
        'client_secret' => env('PAYPAL_SANDBOX_CLIENT_SECRET', 'your-sandbox-client-secret'),
        'app_id'        => '', // Optional
    ],
    'live' => [
        'client_id'     => env('PAYPAL_LIVE_CLIENT_ID', 'your-live-client-id'),
        'client_secret' => env('PAYPAL_LIVE_CLIENT_SECRET', 'your-live-client-secret'),
        'app_id'        => '', // Optional
    ],
    'payment_action' => 'Sale', // Can be 'Sale', 'Authorization', 'Order'
    'currency'       => 'USD',
    'notify_url'     => '', // Change this accordingly
    'locale'         => 'en_US',
    'validate_ssl'   => true,
];