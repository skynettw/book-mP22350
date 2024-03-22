<?php
$args = array(
    'cat' => 2,
    'posts_per_page' => 3
);
$my_query = new WP_Query($args);
if ($my_query->have_posts()) :
    echo "<ul>";
    while ($my_query->have_posts()) :
        $my_query->the_post();
        echo "<li>";
        the_title();
        echo "</li>";
    endwhile;
    echo "</ul>";
endif;
wp_reset_postdata();
