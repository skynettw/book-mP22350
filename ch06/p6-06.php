<?php get_header(); ?>
<div id='content'>
    <div id='mainpart'>
        <ul>
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    echo "<li>" . get_the_title() . "</li>";
                }
            }
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</div>
<?php get_footer(); ?>