<?php
/*
Plugin Name: 我的第一個文字過濾外掛
Plugin URI: https://104.es
Description: 這個外掛的功用在於只要文章的內容出現「自殺」這個字串，
 就會在文章的後面加上一段自殺防治文字。
Version: 0.1a
Author: Min-Huang Ho
Author URI: https://104.es
*/
function howpcp_suicide_prevention($content)
{
    $msg = "
   <h4> 生命可貴，我們可以幫助您 </h4>
   <hr>
   <p> 自殺防治諮詢安心專線：0800-788995</p>
   <p> 生命線協談專線：1995。</p>
   <p> 張老師專線：1980</p>
   <hr>
    ";
    if (stripos($content, " 自殺 ") !== false) {
        $content = $content . "<div id='suicide-prevention'>" .
            $msg . "</div>";
    }
    return $content;
}
add_filter("the_content", "howpcp_suicide_prevention");
function howpcp_custom_css()
{
    echo "
    <style type='text/css'>
    #suicide-prevention {
    border: red 1px solid;
    background-color: #ffc;
    padding: 5px;
    box-shadow: 10px 10px 5px #888;
    }
    </style>
    ";
}
add_action('wp_head', 'howpcp_custom_css');
