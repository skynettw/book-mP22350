<?php
function my2024t_scripts()
{
    wp_enqueue_style(
        'my2024t-font-hei',
        'https://fonts.googleapis.com/earlyaccess/cwtexhei.css'
    );
    wp_enqueue_style(
        'my2024t-font-kai',
        'https://fonts.googleapis.com/earlyaccess/cwtexkai.css'
    );
    wp_enqueue_style('my2024t-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('my2024t-style', 'rtl', 'replace');
    wp_enqueue_script('my2024t-navigation', get_template_directory_uri() . '/js/
navigation.js', array(), _S_VERSION, true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
wp_enqueue_script(
    'bootstrap',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js',
    array(),
    '5.1.3',
    true
);
wp_enqueue_style(
    'bootstrap',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css',
    array(),
    '5.1.3'
);
wp_enqueue_style(
    'my-style',
    get_template_directory_uri() . '/my-style.css',
    array(),
    _S_VERSION
);
