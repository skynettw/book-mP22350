<?php 
function howpcp_register_custom_post() {
    register_post_type( 'howpcp_sitenews',
    array(
    'labels' => array(
    'name' => ' 最新消息 ',
    'singular_name' => ' 消息 ', 
    'add_new' => ' 新增消息 ',
    'add_new_item' => ' 新增消息 ', 
    'edit_item' => ' 編輯消息 ', 
    'all_items' => ' 所有的消息 ',
    'view_item' => ' 消息列表 ', 
    'view_items' => ' 消息列表 ', 
    'search_items' => ' 搜尋消息 '
    ),
    'public' => true,
    'has_archive' => true,
    'show_in_admin_bar' => true
    )
    );