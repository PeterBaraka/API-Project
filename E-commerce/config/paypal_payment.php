<?php

return [
    # Define your application mode here
    'mode' => 'sandbox',

    # Account credentials from developer portal
    'account' => [
        'client_id' => env('AQV_UcziPNSWgL5IQr4D23LwV2nhplS_5Ck1VAzbimOa44rG2qHfP5kXIiDvzteSiSehB-KbgyOxv1zQ', ''),
        'client_secret' => env('EOipOgTPwnreELFp5jLMoBFDuQhCkERgfHlVJCThdX4Pbt3SuHxM3QbudRtJWoROu-FRhyjEcPJfY60Y', ''),
    ],

    # Connection Information
    'http' => [
        'connection_time_out' => 30,
        'retry' => 1,
    ],

    # Logging Information
    'log' => [
        'log_enabled' => true,

        # When using a relative path, the log file is created
        # relative to the .php file that is the entry point
        # for this request. You can also provide an absolute
        # path here
        'file_name' => '../PayPal.log',

        # Logging level can be one of FINE, INFO, WARN or ERROR
        # Logging is most verbose in the 'FINE' level and
        # decreases as you proceed towards ERROR
        'log_level' => 'FINE',
    ],
];
