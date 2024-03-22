<?php
public function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : 
    esc_html( ' 網站計數器 ' );
    ?>
    <p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
    <?php echo esc_attr( ' 標題：' ); ?></label> 
    <input class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" 
    name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" 
    type="text" value="<?php echo esc_attr( $title ); ?>">
    </p>
    <?php 
   }