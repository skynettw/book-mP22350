<div class="container">
    <header class='blog-header'>
        <div class="card">
            <div class="card-header">
                <h1><a href="<?php bloginfo('url'); ?>">
                        <?php bloginfo('name'); ?></a></h1>
                <p><?php bloginfo('description'); ?></p>
            </div>
            <div class="card-body">
                <a class="btn btn-primary btn-sm" href='https://104.es'> 作者網站 </a>
            </div>
            <div class="card-footer">
                <nav class='navbar navbar-default'>
                    <?php wp_nav_menu(array('theme-location' => 'primary-menu')); ?>
                </nav>
            </div>
        </div>
    </header>
</div>