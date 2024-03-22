<?php
function howpcp_register_meta_box()
{
    add_meta_box(
        'howpcp_products_meta',
        ' 商品資訊 ',
        'howpcp_product_meta_box',
        'howpcp_product',
        'side',
        'default'
    );
}
function howpcp_product_meta_box($post)
{
    echo " 新的 Meta Box，我在這兒！ ";
}
add_action('add_meta_boxes', 'howpcp_register_meta_box');
