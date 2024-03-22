<?php get_header(); ?>
<div class='container'>
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
    ?>
            <div class='card mx-auto mt-3' style='width:40rem'>
                <div class='card-header bg-primary text-white'>
                    <?php the_title(); ?>
                </div>
                <div class='card-body'>
                    <?php the_content(); ?>
                </div>
                <div class='card-footer'>
                    <?php the_author(); ?>
                    <?php the_tags(); ?>
                    <?php the_category(); ?>
                </div>
            </div>
    <?php
        }
    }
    wp_reset_postdata();
    ?>
</div>
<div id='sidebar'>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>