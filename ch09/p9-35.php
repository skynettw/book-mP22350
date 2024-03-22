<?php
function poem_customize_title_image($wp_customize)
{
    $wp_customize->add_setting('poems-title-image');
    $wp_customize->add_section(
        'poems-title-section',
        array('title' => ' 更換標頭影像檔案 ')
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'poems-title-control',
            array(
                'label' => ' 標頭影像檔案 ',
                'section' => 'poems-title-section',
                'settings' => 'poems-title-image',
                'width' => 500,
                'height' => 250
            )
        )
    );
}
add_action('customize_register', 'poem_customize_title_image');
