<?php
/*
Plugin Name: HOWPCP 最新消息
Plugin URI: https://104.es
Description: 非常簡單的自定義型態貼文範例
Version: 0.1a
Author: Min-Huang Ho
Author URI: https://104.es
*/
function howpcp_register_custom_post()
{
    register_post_type(
        'howpcp_sitenews',
        array(
            'labels' => array(
                'name' => ' 最新消息 ',
                'singular_name' => ' 消息 '
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}
add_action('init', 'howpcp_register_custom_post');
