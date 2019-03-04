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
        'client_id' => env('GIT_CLIENT_ID'),
        'client_secret' => env('GIT_CLIENT_SECRET'),
        'redirect' => env('GIT_REDIRECT')
    ],

    'qq' => [
        'client_id' => env('QQ_KEY'),
        'client_secret' => env('QQ_SECRET'),
        'redirect' => env('QQ_REDIRECT_URI')
    ],

    'weixin' => [
        'client_id' => env('WEIXIN_KEY','wx2302f019c8102ee4'),
        'client_secret' => env('WEIXIN_SECRET','3fde2281caf45b12130865e9b9ee8a34'),
        'redirect' => env('WEIXIN_REDIRECT_URI','')
    ],

];
