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
        'client_id' =>  env('1654202244899812'),
        'client_secret' => env('6111ebef6d4ecca488c9a43c651e4c7507839a4e'),
        'redirect' => env('http://localhost:8000/auth/github/callback'),
    ],
    'facebook' => [
         'client_id' => env('FACEBOOK_CLIENT_ID'),
    'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
    'redirect' => env('CALLBACK_URL'),
    ],
    'google' => [
        'client_id' =>  env('614489611495-bak039osl1auag8tm64c0r1sjp932f56.apps.googleusercontent.com'),
        'client_secret' => env('ycn3LktQ52jtv7jVBaKx2gB3'),
        'redirect' => env('http://localhost:8000/auth/google/callback'),
    ]
];
