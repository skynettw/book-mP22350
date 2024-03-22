<?php
/*
Plugin Name: HOWPCP Easy List
Plugin URI: https://104.es
Description: 非常簡單的商品管理
Version: 0.1a
Author: Min-Huang Ho
Author URI: https://104.es
*/
function howpcp_register_easylist()
{
    register_post_type(
        'howpcp_product',
        array(
            'labels' => array(
                'name' => ' 商品 ',
                'singular_name' => ' 商品 ',
                'add_new' => ' 新增商品 ',
                'add_new_item' => ' 新增商品 ',
                'edit_item' => ' 編輯商品 ',
                'all_items' => ' 所有的商品 ',
                'view_item' => ' 商品列表 ',
                'view_items' => ' 商品列表 ',
                'search_items' => ' 搜尋商品 ',
                'featured_image' => ' 商品圖片 ',
                'insert_into_item' => ' 新增商品 ',
                'set_featured_image' => ' 設定商品圖片 ',
                'remove_featured_image' => ' 移除商品圖片 '
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_admin_bar' => true,
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}
add_action('init', 'howpcp_register_easylist');
