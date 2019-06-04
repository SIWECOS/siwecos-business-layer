<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Core API URL
    |--------------------------------------------------------------------------
    |
    | This value determines the URL to your running instance of
    | SIWECOS/siwecos-core-api. The Core API is responsible for the actual site
    | scans.
    |
    */
    'coreApiScanStartUrl'              => env('CORE_API_SCAN_START_URL'),

    /*
    |--------------------------------------------------------------------------
    | Default Token credits
    |--------------------------------------------------------------------------
    |
    | You can set the amount of credits each user will get daily.
    |
    */
    'defaultTokenCredits' => env('DEFAULT_TOKEN_CREDITS', 50),


    /*
    |--------------------------------------------------------------------------
    | 3rd Party Token Credits
    |--------------------------------------------------------------------------
    |
    | You can set the amount of credits the 3rd Party Tokens will get daily.
    |
    */
    'thirdPartyTokenCredits' => env('THIRD_PARTY_TOKEN_CREDITS', 10),


    /*
    |--------------------------------------------------------------------------
    | Technical Support E-Mail Address
    |--------------------------------------------------------------------------
    |
    | If the application detects serious problems the technical support team
    | can be notified if you define an appropriate mail address.
    |
    */
    'technicalSupportMail'    => env('TECHNICAL_SUPPORT_MAIL'),

    /*
    |--------------------------------------------------------------------------
    | Redirect URL When An User Activates His Account
    |--------------------------------------------------------------------------
    |
    | You can define to which site the user should be redirected when the
    | related activation button in the verification mail was clicked.
    |
    */
    'activation_redirect_uri' => env('ACTIVATIONREDIRECTURI', 'https://siwecos.de/willkommen-bei-siwecos/'),

    /*
    |--------------------------------------------------------------------------
    | Password Reset URL
    |--------------------------------------------------------------------------
    |
    | This value will be used in the password reset mail and defines to which
    | URL the User will be redirected to change his password.
    |
    */
    'password_reset_uri'      => env('PASSWORDRESETURI', 'https://siwecos.de/app/#processreset/'),

    /*
    |--------------------------------------------------------------------------
    | SIWECOS Main URL
    |--------------------------------------------------------------------------
    |
    | The main SIWECOS URL. It is used for the header information in mails.
    |
    */
    'main_url'                => env('MAINURL', 'https://siwecos.de/'),
];
