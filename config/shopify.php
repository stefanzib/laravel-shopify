<?php

return [

    'credentials' => [

        /*
         * The API access token from the private app.
         */
        'access_token' => env('SHOPIFY_ACCESS_TOKEN', ''),

        /*
         * The shopify domain for your shop.
         */
        'domain' => env('SHOPIFY_DOMAIN', ''),

        /*
         * The shopify api version.
         */
        'api_version' => env('SHOPIFY_API_VERSION', '2021-01'),

    ],

    'webhooks' => [

        /*
         * The webhook secret provider to use.
         */
        'secret_provider' => Signifly\Shopify\Webhooks\ConfigSecretProvider::class,

        /*
         * The shopify webhook secret.
         */
        'secret' => env('SHOPIFY_WEBHOOK_SECRET'),

    ],

    'exceptions' => [

        /*
         * Whether to include the validation errors in the exception message.
         */
        'include_validation_errors' => false,

    ],

    'http' => [

        /*
         * Maximum number of seconds to wait while establishing the TCP/TLS
         * connection to the Shopify Admin API. Keep this short so that
         * transient routing or peering issues fail fast instead of holding
         * queue workers hostage.
         */
        'connect_timeout' => env('SHOPIFY_CONNECT_TIMEOUT', 5),

        /*
         * Maximum total seconds for a single Admin API request, including
         * connection, request body upload, and full response read.
         */
        'timeout' => env('SHOPIFY_TIMEOUT', 30),

    ],
];
