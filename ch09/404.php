<?php // 404.php 
?>
<?php get_header(); ?>
<div class='row'>
    <div class='col-sm-8'>
        <main id='page-404'>
            <?php
            $my_query = new WP_Query(array(
                'orderby' => 'rand',
                'posts_per_page' => 8
            ));
            ?>
            <?php if ($my_query->have_posts()) : ?>
                <div>
                    <h3 class='alert alert-danger'>
                        找不到您要的資訊，<br> 也許你可以試試以下這些詩文：
                    </h3>
                </div>
                <div id='main-content' class='list-group'>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <div class='title'>
                            <a class='list-group-item' href='<?php the_permalink(); ?>'>
                                <div class='poem-title'>
                                    <?php the_title("", ""); ?>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </main>
    </div>
    <div class='col-sm-4'>
        <aside id='sidebar'>
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>
<?php get_footer(); ?>