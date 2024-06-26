<body>
    <div class='container'>
        <header>
            <h1>
                <div id='web-title'>
                    <?php bloginfo('name'); ?>
                </div>
                <div id='web-description'>
                    <?php bloginfo('description'); ?>
                </div>
            </h1>
        </header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" arialabel="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mbmd-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
                </div>
            </div>
        </nav>