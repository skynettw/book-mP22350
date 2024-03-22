<?php
function howpcp_add_column($defaults)
{
    global $post;
    if (get_post_type($post) != 'howpcp_product')
        return $defaults;
    $defaults['price'] = ' 商品價格 ';
    $defaults['stock'] = ' 商品庫存 ';
    return $defaults;
}
add_filter('manage_posts_columns', 'howpcp_add_column');
