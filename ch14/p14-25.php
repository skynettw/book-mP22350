<?php
class HOWPCP_Latest_News extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'HOWPCP_Latest_News',
            'description' => ' 最新消息小工具 ',
        );
        parent::__construct('HOWPCP_Latest_News', 'HOWPCP 最新消息 ', $widget_ops);
    }
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        echo $args['before_title'];
        if (!empty($instance['title'])) {
            echo apply_filters('widget_title', $instance['title']);
        } else {
            echo " 最新消息 ";
        }
        echo $args['after_title'];
        $query_string = array(
            'post_type' => 'howpcp_sitenews',
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $ranks = new WP_Query($query_string);
        if ($ranks->have_posts()) {
            echo '<ol>';
            while ($ranks->have_posts()) {
                $ranks->the_post();
                echo '<li>';
                echo '<a href=';
                echo '"' . get_the_permalink() . '">';
                echo get_the_title();
                echo "</a>";
                echo '</li>';
            }
            echo '</ol>';
        }
        wp_reset_postdata();
        echo $args['after_widget'];
    }
    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] :
            esc_html(' 最新消息 ');
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                <?php echo esc_attr(' 標題：'); ?></label>
            <input id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
<?php
    }
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] =
            (!empty($new_instance['title'])) ?
            strip_tags($new_instance['title']) : '';
        return $instance;
    }
}
add_action('widgets_init', function () {
    register_widget('HOWPCP_Latest_News');
});
