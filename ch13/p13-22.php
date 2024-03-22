<?php
public function update( $new_instance, $old_instance ) {
 $instance = array();
 $instance['title'] = 
 ( ! empty( $new_instance['title'] ) ) ? 
 strip_tags( $new_instance['title'] ) : ' 網站計數器 ';
 return $instance; 
}