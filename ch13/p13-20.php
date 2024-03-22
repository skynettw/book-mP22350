<?php
public function widget( $args, $instance ) {
    echo $args['before_widget'];
    echo $args['before_title'];
    if ( !empty($instance['title']) ) {
    echo apply_filters( 'widget_title', $instance['title']);
    }
    else {
    echo apply_filters( 'widget_title', ' 網站計數器 ');
    }
    echo $args['after_title'];
    echo "<div id='howpcp-site-counter' style='text-align:center;'>";
    echo "<h3 style='color:white;background-color:red;'>";
    echo get_option( 'howpcp_site_counter' );
    echo "</h3></div>";
    echo $args['after_widget'];
    }
    