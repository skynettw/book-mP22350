<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php
    if (is_singular() && get_option('thread_comments'))
        wp_enqueue_script('comment-reply');
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    　　　　
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/
dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MX
xSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">　　　　　　　　
    　　　　<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhay
i8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    　　　　<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.
bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/
o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel='stylesheet' type='text/css' />
    <title>
        <?php bloginfo('name'); ?>
    </title>
</head>