<?php
/*
Plugin Name: 自動建立聯盟行銷連結
Plugin URI: https://104.es
Description: 這個外掛會針對特定的字詞加上聯盟行銷的連結。
Version: 0.1a
Author: Min-Huang Ho
Author URI: https://104.es
*/
function howpcp_auto_affiliation($content)
{
    $aff_name = "GreenGeeks";
    $aff_link = " https://www.greengeeks.com/track/skynettw/cp-default";
    return str_replace(
        $aff_name,
        "<a href='" . $aff_link . "'>" . $aff_name . "</a>",
        $content
    );
}
add_filter("the_content", "howpcp_auto_affiliation");
