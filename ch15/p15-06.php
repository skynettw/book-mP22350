<?php
function howpcp_register_taxonomy()
{
    $labels = array(
        'name' => ' 商品類別 ',
        'singular_name' => ' 商品類別 ',
        'search_items' => ' 搜尋商品類別 ',
        'all_items' => ' 所有的商品類別 ',
        'edit_item' => ' 編輯商品類別 ',
        'update_item' => ' 更新商品類別 ',
        'add_new_item' => ' 新增商品類別 ',
        'new_item_name' => ' 新商品類別名稱 ',
        'menu_name' => ' 商品分類 '
    );
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'product')
    );
    register_taxonomy('howpcp_easylist_taxonomy', 'howpcp_product', $args);
}
add_action('init', 'howpcp_register_taxonomy');
