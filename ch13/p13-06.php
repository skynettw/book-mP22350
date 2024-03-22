<?php
/*
Plugin Name: HOWPCP 網站計數器
Plugin URI: https://104.es
Description: 非常簡單的網站計數器
Version: 0.1a
Author: Min-Huang Ho
Author URI: https://104.es
*/
function howpcp_site_counter_init()
{
    $counter = get_option('howpcp_site_counter');
    if (empty($counter)) {
        update_option('howpcp_site_counter', '1');
    }
}
register_activation_hook(__FILE__, 'howpcp_site_counter_init');
function howpcp_site_counter_uninstall()
{
    delete_option('howcp_site_counter');
}
register_uninstall_hook(__FILE__, 'howpcp_site_counter_uninstall');
function howpcp_inc_site_counter()
{
    $counter = get_option('howpcp_site_counter');
    $counter++;
    update_option('howpcp_site_counter', $counter);
}
add_action('wp_head', 'howpcp_inc_site_counter');
function howpcp_display_site_counter()
{
    if (!is_home()) return;
    $counter = get_option('howpcp_site_counter');
    echo "<h3 style='color:white;background-color:blue;'>";
    echo " 本站已被瀏覽過： " . $counter . " 次 </h3>";
}
add_action('loop_start', 'howpcp_display_site_counter');
