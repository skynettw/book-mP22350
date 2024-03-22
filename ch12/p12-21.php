<?php
/*
Plugin Name: 我的自訂短代碼
Plugin URI: https://104.es
Description: 這個外掛會找出設定的短代碼，設定網址，並以 <iframe> 的方式嵌入該網頁。
Version: 0.1a
Author: Min-Huang Ho
Author URI: https://104.es
*/
function my_short_code()
{
    if (is_single()) {
        $url = 'https://drho.club/seo-basics/';
        return "<iframe width=800 height=600 src='" .
            $url .
            "'></iframe>";
    } else {
        return "<< 點擊文章內容才可顯示短代碼內容 >>";
    }
}
add_shortcode('fetchsite', 'my_short_code');
