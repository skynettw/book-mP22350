<?php
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => __(' 側邊欄 '),
        'id' => 'sidebar',
        'before_widget' => '<section id="%1s" class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>'
    ));
}
