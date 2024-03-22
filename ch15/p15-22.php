<?php
function howpcp_easylist_shortcode($attr)
{
    if (array_key_exists('category', $attr)) {
        $html = " 找不到指定類別的商品 ";
        $category = $attr['category'];
        $query_string = array(
            'post_type' => 'howpcp_product',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'tax_query' => array(
                array(
                    'taxonomy' => 'howpcp_easylist_taxonomy',
                    'field' => 'slug',
                    'terms' => $category
                )
            )
        );
        $posts = new WP_Query($query_string);
        if ($posts->have_posts()) {
            $html = "<ol>";
            while ($posts->have_posts()) {
                $posts->the_post();
                $meta_data = get_post_meta(
                    get_the_ID(),
                    '_easylist_product_data',
                    true
                );
                $html = $html . '<li><a href=';
                $html = $html . '"' . get_the_permalink() . '">';
                $html = $html . get_the_title();
                $html = $html . "</a>";
                $html = $html . "：" . $meta_data['price'] . " 元 </li>";
            }
            $html = $html . "</ol>";
        }
        wp_reset_postdata();
        return $html;
    } else {
        return "<p><em><< 您忘了指定類別了 >></em></p>";
    }
}
add_shortcode('easylist', 'howpcp_easylist_shortcode');
