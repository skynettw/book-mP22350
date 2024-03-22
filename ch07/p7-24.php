<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <!-- Bootstrap CSS -->
    　　　　
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/
4.5.2/css/bootstrap.min.css">
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <header>
            <h1><?php bloginfo('name'); ?></h1>
            <em><?php bloginfo('description'); ?></em>
        </header>