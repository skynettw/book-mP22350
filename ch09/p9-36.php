<header>
    <h1>
        <div id='web-title'>
            <?php if (get_theme_mod('poems-title-image')) : ?>
                <img src="<?php echo wp_get_attachment_url(
                                get_theme_mod('poems-title-image')
                            ); ?>" width=300>
            <?php else :
                echo bloginfo('name');
            endif;
            ?>
        </div>
        <div id='web-description'>
            <?php bloginfo('description'); ?>
        </div>
    </h1>
</header>