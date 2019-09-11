<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Core API URL
    |--------------------------------------------------------------------------
    |
    | This value determines the URL to the running instance of
    | SIWECOS/siwecos-core-api. The Core API is responsible for the actual site
    | scans.
    |
    */
    'coreApiScanStartUrl' => env('CORE_API_SCAN_START_URL'),


    /*
    |--------------------------------------------------------------------------
    | Default Token credits
    |--------------------------------------------------------------------------
    |
    | The amount of credits each user will get daily.
    |
    */
    'defaultTokenCredits' => env('DEFAULT_TOKEN_CREDITS', 50),


    /*
    |--------------------------------------------------------------------------
    | 3rd Party Token Credits
    |--------------------------------------------------------------------------
    |
    | The amount of credits the 3rd Party Tokens will get daily.
    |
    */
    'thirdPartyTokenCredits' => env('THIRD_PARTY_TOKEN_CREDITS', 10),

    /*
    |--------------------------------------------------------------------------
    | Free Scan Cashing Hours
    |--------------------------------------------------------------------------
    |
    | You can set the amount of credits the 3rd Party Tokens will get daily.
    |
    */
    'freeScanCashingHours' => env('FREE_SCAN_CASHING_HOURS', 12),

    /*
    |--------------------------------------------------------------------------
    | Technical Support E-Mail Address
    |--------------------------------------------------------------------------
    |
    | If the application detects serious problems the technical support team
    | can be notified if an appropriate mail address is defined.
    |
    */
    'technicalSupportMail' => env('TECHNICAL_SUPPORT_MAIL'),


    /*
    |--------------------------------------------------------------------------
    | Redirect URL When An User Activates His Account
    |--------------------------------------------------------------------------
    |
    | Definition to which site the user should be redirected when the
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
    'password_reset_uri' => env('PASSWORDRESETURI', 'https://siwecos.de/app/#processreset/'),


    /*
    |--------------------------------------------------------------------------
    | SIWECOS Main URL
    |--------------------------------------------------------------------------
    |
    | The main SIWECOS URL. It is used for the header information in mails.
    |
    */
    'main_url' => env('MAINURL', 'https://siwecos.de/'),


    /*
    |--------------------------------------------------------------------------
    | Scanner weight for total score rating
    |--------------------------------------------------------------------------
    |
    | Some scanners are more powerful or critical than others.
    | You can define how much an individual scanner score should influence the
    | total score.
    |
    | The weight can be set to zero, if the scanner should not influence the
    | total score.
    |
    */
    'scanner_weight' => [
        'DOMXSS' => env('SCANNER_SCORE_WEIGHT_DOMXSS', 1.0),
        'HSHS' => env('SCANNER_SCORE_WEIGHT_HSHS', 1.0),
        'INFOLEAK' => env('SCANNER_SCORE_WEIGHT_INFOLEAK', 1.0),
        'INI_S' => env('SCANNER_SCORE_WEIGHT_INI_S', 1.0),
        'PORT' => env('SCANNER_SCORE_WEIGHT_PORT', 1.0),
        'TLS' => env('SCANNER_SCORE_WEIGHT_TLS', 1.0),
        'VERSION' => env('SCANNER_SCORE_WEIGHT_VERSION', 1.0),
    ],
];
