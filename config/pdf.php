<?php

return [
    'custom_font_dir'  => public_path('/fonts/Arial/'), // don't forget the trailing slash!
    'custom_font_data' => [
        'examplefont' => [ // must be lowercase and snake_case
            'R'  => 'arial_bolditalicmt.ttf',    // regular font
            'B'  => 'arialmt.ttf',       // optional: bold font
            'I'  => 'lalithabai.ttf',     // optional: italic font
            'BI' => 'moviefilmstrip.ttf' // optional: bold-italic font
        ]
    ],
    'mode'                     => '',
    'format'                   => 'A4',
    // 'default_font_size'        => '2',
    'default_font'             => 'examplefont',
    'margin_left'              => 0,
    'margin_right'             => 0,
    'margin_top'               => 0,
    'margin_bottom'            => 10,
    'margin_header'            => 0,
    'margin_footer'            => 0,
    'orientation'              => 'P',
    'title'                    => 'Laravel mPDF',
    'subject'                  => '',
    'author'                   => '',
    'watermark'                => '',
    'show_watermark'           => false,
    'show_watermark_image'     => false,
    'watermark_font'           => 'sans-serif',
    'display_mode'             => 'fullpage',
    'watermark_text_alpha'     => 0.1,
    'watermark_image_path'     => '',
    'watermark_image_alpha'    => 0.2,
    'watermark_image_size'     => 'D',
    'watermark_image_position' => 'P',
    'custom_font_dir'          => '',
    'custom_font_data'         => [],
    'auto_language_detection'  => false,
    'temp_dir'                 => storage_path('app'),
    'pdfa'                     => false,
    'pdfaauto'                 => false,
    'use_active_forms'         => false,
];
