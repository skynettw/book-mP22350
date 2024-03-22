<?php
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
