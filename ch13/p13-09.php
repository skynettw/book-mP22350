<?php
function howpcp_description_site_counter($value, $field)
{
    if ($field != 'description') return $value;
    $counter = get_option('howpcp_site_counter');
    return $value . "[ 本網站瀏覽人次：" . $counter . "]";
}
add_filter('bloginfo', 'howpcp_description_site_counter', 10, 2);
