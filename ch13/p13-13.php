<?php
function howpcp_display_post_counter($content)
{
    if (!is_single()) return $content;
    global $post;
    $counter = get_post_meta($post->ID, "views", true);
    return "<p> 本文閱讀人次：" . $counter . "</p>" . $content;
}
add_filter('the_content', 'howpcp_display_post_counter', 10, 1);
