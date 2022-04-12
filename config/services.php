<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyAGu6NvA0LZORZqedOCSNFkGpTH_HhQrOQ',
        'auth_domain' => 'laravelfirebase-2d6e3.firebaseapp.com',
        'database_url' => 'https://laravelfirebase-2d6e3.firebaseapp.com',
        'project_id' => 'laravelfirebase-2d6e3',
        'storage_bucket' => 'laravelfirebase-2d6e3.appspot.com',
        'messaging_sender_id' => '142538320298',
        'app_id' => '1:142538320298:web:2091acec5d6139f2f3a3d3',
        'measurement_id' => 'G-0G20K48BVX',
    ],

];
