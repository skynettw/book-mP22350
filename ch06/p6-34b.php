<?php
register_sidebar(array(
    'name' => __('footer widgets', '2015a'),
    'id' => 'footer-sidebar',
    'description' => __(
        'Add widgets here to appear in your sidebar.',
        '2015a'
    ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
));
?>