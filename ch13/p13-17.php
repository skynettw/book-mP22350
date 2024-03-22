<?php
class HOWPCP_Site_Counter_Widget extends WP_Widget
{
    /**
     * Sets up the widgets name etc
     */
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'HOWPCP_Site_Counter_Widget',
            'description' => ' 這是我們自己定義的 Site Counter 小工具 ',
        );
        parent::__construct(
            'HOWPCP_Site_Counter_Widget',
            'HOWPCP 網站計數器 ',
            $widget_ops
        );
        $this->update(array('title' => ' 網站計數器 '), array());
    }
    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        // outputs the content of the widget
        echo "<h2> 這是網站計數器小工具 </h2>";
    }
    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form($instance)
    {
        // outputs the options form on admin
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
            (!empty($new_instance['title'])) ?
            strip_tags($new_instance['title']) : ' 網站計數器 ';
        return $instance;
    }
}
add_action('widgets_init', function () {
    register_widget('HOWPCP_Site_Counter_Widget');
});
