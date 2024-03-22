<?php
/*
Plugin Name: 自動建立聯盟行銷連結第二版
Plugin URI: https://104.es
Description: 這個外掛會針對特定的字詞加上聯盟行銷的連結。
Version: 0.2a
Author: Min-Huang Ho
Author URI: https://104.es
*/
if (!defined('ABSPATH')) {
    exit;
}
add_action('wp_before_admin_bar_render', 'howpcp_add_admin_bar');
function howpcp_add_admin_bar()
{
    global $wp_admin_bar;
    $arg = array(
        'id' => 'howpcp_mysiteurl',
        'title' => ' 前往禾泊橙舍 ',
        'href' => 'https://104.es'
    );
    $wp_admin_bar->add_menu($arg);
}
