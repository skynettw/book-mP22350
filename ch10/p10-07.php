<?php
function my2024t_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'my2024t'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'my2024t'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'my2024t_widgets_init');
function my2024t_content_width()
{
    $GLOBALS['content_width'] = apply_filters('my2024t_content_width', 640);
}
add_action('after_setup_theme', 'my2024t_content_width', 0);
