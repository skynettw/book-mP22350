<?php
class HOWPCP_Easylist_New extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'HOWPCP_Easylist_New',
            'description' => ' 新進商品 ',
        );
        parent::__construct('HOWPCP_Easylist_New', 'HOWPCP 新進商品 ', $widget_ops);
    }

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] :
            esc_html(' 最新到貨 ');
        $category = !empty($instance['category']) ? $instance['category'] :
            esc_html(' 圖書 ');
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                <?php echo esc_attr(' 標題：'); ?></label>
            <input id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
            <br>
            <label for="<?php echo esc_attr($this->get_field_id('category')); ?>">
                <?php echo esc_attr(' 顯示類別：'); ?></label>
            <input id="<?php echo esc_attr($this->get_field_id('category')); ?>" name="<?php echo esc_attr($this->get_field_name('category')); ?>" type="text" value="<?php echo esc_attr($category); ?>">
        </p>
<?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] =
            (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['category'] =
            (!empty($new_instance['category'])) ?
            strip_tags($new_instance['category']) : '';
        return $instance;
    }
    public function widget($args, $instance)
    {
        $filter = (!empty($instance['category'])) ?
            $instance['category'] : '';
        echo $args['before_widget'];
        echo $args['before_title'];
        if (!empty($instance['title'])) {
            echo apply_filters('widget_title', $instance['title']);
        } else {
            echo " 最新到貨 ";
        }
        echo $args['after_title'];
        $query_string = array(
            'post_type' => 'howpcp_product',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'tax_query' => array(
                array(
                    'taxonomy' => 'howpcp_easylist_taxonomy',
                    'field' => 'slug',
                    'terms' => $filter
                )
            )
        );
        $ranks = new WP_Query($query_string);
        if ($ranks->have_posts()) {
            echo "<ol>";
            while ($ranks->have_posts()) {
                $ranks->the_post();
                $meta_data = get_post_meta(
                    get_the_ID(),
                    '_easylist_product_data',
                    true
                );
                echo '<li><a href=';
                echo '"' . get_the_permalink() . '">';
                echo get_the_title();
                echo "</a>";
                echo "：" . $meta_data['price'] . " 元 </li>";
            }
            echo "</ol>";
        }
        wp_reset_postdata();
        echo $args['after_widget'];
    }
}

add_action('widgets_init', function () {
    register_widget('HOWPCP_Easylist_New');
});
