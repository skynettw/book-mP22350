<?php
class HOWPCP_Hot_Posts_Widget extends WP_Widget
{
    /**
     * Sets up the widgets name etc
     */
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'HOWPCP_Hot_Posts',
            'description' => ' 這是一個列出熱門文章排行用的小工具 ',
        );
        parent::__construct('HOWPCP_Hot_Posts', 'HOWPCP 熱門文章排行榜 ', $widget_ops);
    }
    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        echo $args['before_title'];
        if (!empty($instance['title'])) {
            echo apply_filters('widget_title', $instance['title']);
        } else {
            echo " 熱門文章排行榜 ";
        }
        echo $args['after_title'];
        echo "<p>";
        echo " 在這裡顯示熱門文章排行 ";

        echo "</p>";
        echo $args['after_widget'];
    }
    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] :
            esc_html(' 熱門文章排行榜 ');
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                <?php esc_attr(' 標題：'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
<?php
    }
    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] =
            (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}
add_action('widgets_init', function () {
    register_widget('HOWPCP_Hot_Posts_Widget');
});
