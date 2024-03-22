<?php
function my_short_code_v2($attr)
{
    if (is_single()) {
        $target_url = 'https://drho.club/seo-basics/';
        $width = 800;
        $height = 600;
        if (array_key_exists('url', $attr))
            $target_url = $attr['url'];
        if (array_key_exists('w', $attr))
            $width = $attr['w'];
        if (array_key_exists('h', $attr))
            $height = $attr['h'];
        return "<iframe width=$width height=$height src=$target_url></iframe>";
    } else {
        return "<< 點擊文章內容才可顯示短代碼內容 >>";
    }
}
add_shortcode('fetchsite', 'my_short_code_v2');
