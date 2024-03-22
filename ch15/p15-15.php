<?php
class HOWPCP_Easylist_Lucky extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'HOWPCP_Easylist_Lucky',
            'description' => ' 隨機推薦任一商品 ',
        );
        parent::__construct(
            'HOWPCP_Easylist_Lucky',
            'HOWPCP 隨機商品推薦 ',
            $widget_ops
        );
    }
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        echo $args['before_title'];
        if (!empty($instance['title'])) {
            echo apply_filters('widget_title', $instance['title']);
        } else {
            echo " 我的幸運商品 ";
        }
        echo $args['after_title'];
        $query_string = array(
            'post_type' => 'howpcp_product',
            'posts_per_page' => 1,
            'orderby' => 'rand',
        );
        $ranks = new WP_Query($query_string);
        if ($ranks->have_posts()) {
            while ($ranks->have_posts()) {
                $ranks->the_post();
                $meta_data = get_post_meta(
                    get_the_ID(),
                    '_easylist_product_data',
                    true
                );
                echo '<a href=';
                echo '"' . get_the_permalink() . '">';
                echo get_the_title();
                echo "</a>";
                echo "<br>";
                echo " 價格：" . $meta_data['price'] . " 元 ";
                echo "<br>";
                echo "<img src='" .
                    get_the_post_thumbnail_url() . "' width=100>";
            }
        }
        wp_reset_postdata();
        echo $args['after_widget'];
    }
    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] :
            esc_html(' 我的幸運商品 ');
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                <?php esc_attr(' 標題：'); ?></label>
            <input id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
<?php
    }
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] =
            (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}
add_action('widgets_init', function () {
    register_widget('HOWPCP_Easylist_Lucky');
});
