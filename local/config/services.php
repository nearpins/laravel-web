<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'github' => [
        'client_id'     => '20f052112a7fda23b38e',
        'client_secret' => '3f7782a7ef69c238b97b78a7fc8d4a1822a5a2eb',
        'redirect'      => 'http://demo.local/login/github/callback',
    ],
    'instagram' => [
        'client_id' => '6826cca6b8c342d2abd554e54074a265',
        'client_secret' => '894c7d61d5a9453e90dc3996064903e7',
        'redirect' => 'http://demo.local/login/instagram/callback'
    ],

];
