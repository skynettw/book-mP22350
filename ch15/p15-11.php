<?php
function howpcp_save_meta_box($post_id)
{

    if ((get_post_type($post_id) == 'howpcp_product')
        && isset($_POST['howpcp_product'])
    ) {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return;
        wp_verify_nonce('meta-box-save', 'howpcp-easylist');
        $howpcp_product_data = $_POST['howpcp_product'];
        array_map('sanitize_text_field', $howpcp_product_data);
        update_post_meta(
            $post_id,
            '_easylist_product_data',
            $howpcp_product_data
        );
    }
}
add_action('save_post', 'howpcp_save_meta_box');
