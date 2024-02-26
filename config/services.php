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
        'key' => env('AWS_SES_ACCESS_KEY_ID'),
        'secret' => env('AWS_SES_SECRET_ACCESS_KEY'),
        'region' => env('AWS_SES_DEFAULT_REGION', 'us-east-1'),
    ],

    'twitter' => [
        'client_id' => env('TRAIVIS_TWITTER_API_KEY'),
        'client_secret' => env('TRAIVIS_TWITTER_API_KEY_SECRET'),
        // 'ACCESS_TOKEN' => env('TRAIVIS_TWITTER_ACCESS_TOKEN'),
        // 'ACCESS_TOKEN_SECRET' => env('TRAIVIS_TWITTER_ACCESS_TOKEN_SECRET')
        'redirect' => env('TRAIVIS_TWITTER_REDIRECT_LINK'),
    ],

    'facebook' => [
        'client_id' => env('TRAIVIS_FACEBOOK_API_KEY'),
        'client_secret' => env('TRAIVIS_FACEBOOK_API_KEY_SECRET'),
        // 'ACCESS_TOKEN' => env('TRAIVIS_FACEBOOK_ACCESS_TOKEN'),
        // 'ACCESS_TOKEN_SECRET' => env('TRAIVIS_FACEBOOK_ACCESS_TOKEN_SECRET'),
        'redirect' => env('TRAIVIS_FACEBOOK_REDIRECT_LINK'),
        'DEFAULT_GRAPH_VERSION' => env('TRAIVIS_FACEBOOK_DEFAULT_GRAPH_VERSION', 'v15.0'),
    ],
    'linkedin' => [
        'client_id' => env('TRAIVIS_LINKEDIN_API_KEY'),
        'client_secret' => env('TRAIVIS_LINKEDIN_API_KEY_SECRET'),
        'redirect' => env('TRAIVIS_LINKEDIN_REDIRECT_URL'),
        'scopes' => env('TRAIVIS_LINKEDIN_SCOPES'),
    ],
    'pinterest' => [
        'API_KEY' => env('TRAIVIS_PINTEREST_API_KEY'),
        'API_KEY_SECRET' => env('TRAIVIS_PINTEREST_API_KEY_SECRET'),
        'REDIRECT_URL' => env('TRAIVIS_PINTEREST_REDIRECT_URL'),
    ],
];
