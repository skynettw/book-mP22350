<?php
function howpcp_inc_post_counter()
{
    if (!is_single()) return;
    global $post;
    $post_id = $post->ID;
    $counter_key = 'views';
    $counter = get_post_meta($post_id, $counter_key, true);
    if ($counter == '') {
        delete_post_meta($post_id, $counter_key);
        add_post_meta($post_id, $counter_key, '0');
    } else {
        $counter++;
        update_post_meta($post_id, $counter_key, $counter);
    }
}
add_action('wp_head', 'howpcp_inc_post_counter');
