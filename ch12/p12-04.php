<?php
function howpcp_add_admin_bar()
{
    global $wp_admin_bar;
    $arg = array(
        'id' => 'howpcp_mysiteurl',
        'title' => ' 推薦連結 ',
    );
    $arg_sub1 = array(
        'id' => 'howpcp_mysiteurl_sub1',
        'parent' => 'howpcp_mysiteurl',
        'title' => ' 前往禾泊橙舍 ',
        'href' => 'https://104.es'
    );
    $arg_sub2 = array(
        'id' => 'howpcp_mysiteurl_sub2',
        'parent' => 'howpcp_mysiteurl',
        'title' => 'Google 新聞 ',
        'href' => 'https://tw.news.yahoo.com/most-popular/'
    );
    $wp_admin_bar->add_menu($arg);
    $wp_admin_bar->add_menu($arg_sub1);
    $wp_admin_bar->add_menu($arg_sub2);
}
