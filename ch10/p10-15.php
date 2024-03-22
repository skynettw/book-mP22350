<?php
function my2024t_custom_header_setup()
{
    add_theme_support(
        'custom-header',
        apply_filters(
            'my2024t_custom_header_args',
            array(
                'default-image' => '',
                'default-text-color' => '000000',
                'width' => 1000,
                'height' => 250,
                'flex-height' => true,
                'wp-head-callback' => 'my2024t_header_style',
            )
        )
    );
}
