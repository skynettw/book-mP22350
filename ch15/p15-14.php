<?php
function howpcp_display_column($column_name)
{
    global $post;
    if (get_post_type($post) != 'howpcp_product')
        return;
    $meta_data = get_post_meta($post->ID, '_easylist_product_data', true);
    if ($column_name == 'price') {
        echo "<em>" . $meta_data['price'] . "</em> 元 ";
    } else if ($column_name == 'stock') {
        echo $meta_data['stock'];
    }
}
add_action('manage_posts_custom_column', 'howpcp_display_column');
