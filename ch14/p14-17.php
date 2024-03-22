<?php
$query_string = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
);
$ranks = new WP_Query($query_string);
if ($ranks->have_posts()) {
    echo '<ol>';
    while ($ranks->have_posts()) {
        $ranks->the_post();
        echo '<li>';
        echo '<a href=';
        echo '"' . get_the_permalink() . '">';
        echo get_the_title();
        echo "</a>";
        echo '</li>';
    }
    echo '</ol>';
}
wp_reset_postdata();
