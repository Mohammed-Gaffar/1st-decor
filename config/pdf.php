<?php

return [
    'mode'                  => 'utf-8',
    'format'                => 'A4',
    'author'                => '',
    'subject'               => '',
    'keywords'              => '',
    'creator'               => 'mg Pdf',
    'display_mode'          => 'fullpage',
    'tempDir'               => base_path('../temp/'),
    'pdf_a'                 => false,
    'pdf_a_auto'            => false,
    'icc_profile_path'      => '',
    'font_path' => public_path('/asset/fonts/'),
    'font_data' => [
        'Cairo' => [
            'R'  => 'cairo-Regular.ttf',    // regular font
            'B'  => 'cairo-Bold.ttf',       // optional: bold font
            'I'  => 'cairo-Italic.ttf',     // optional: italic font
            'BI' => 'cairo-Bold-Italic.ttf' // optional: bold-italic font
            //'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
            //'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
        ],
        'Roboto' => [
            'R'  => 'Roboto-Regular.ttf',    // regular font
            'B'  => 'Roboto-Bold.ttf',       // optional: bold font
            'I'  => 'Roboto-Italic.ttf',     // optional: italic font
            'BI' => 'Roboto-Bold-Italic.ttf' // optional: bold-italic font
            //'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
            //'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
        ],
        'Noto_Naskh_Arabic' => [
            'R'  => 'Noto_Naskh_Arabic-Regular.ttf',    // regular font
            'B'  => 'Noto_Naskh_Arabic-Bold.ttf',       // optional: bold font
            'I'  => 'Noto_Naskh_Arabic-Italic.ttf',     // optional: italic font
            'BI' => 'Noto_Naskh_Arabic-Bold-Italic.ttf' // optional: bold-italic font
            //'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
            //'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
        ]
    ]
];
