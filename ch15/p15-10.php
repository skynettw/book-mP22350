<?php
function howpcp_product_meta_box($post)
{
    $el_meta = get_post_meta($post->ID, '_easylist_product_data', true);
    $sku = !empty($el_meta['sku']) ? $el_meta['sku'] : '';
    $price = !empty($el_meta['price']) ? $el_meta['price'] : '';
    $stock = !empty($el_meta['stock']) ? $el_meta['stock'] : '';
    wp_nonce_field('meta-box-save', 'howpcp-easylist');
?>
    <div class='product-metabox'>
        <table>
            <tr>
                <td> 商品編號：</td>
                <td>
                    <input type='text' name='howpcp_product[sku]' value='<?= $sku ?>' size='5'>
                </td>
            </tr>
            <tr>
                <td> 價格：</td>
                <td>
                    <input type='text' name='howpcp_product[price]' value='<?= $price ?>' size='5'> 元
                </td>
            </tr>
            <tr>
                <td> 庫存數量：</td>
                <td>
                    <input type='text' name='howpcp_product[stock]' value='<?= $stock ?>' size='3'>
                </td>
            </tr>
        </table>
    </div>
<?php
}
add_action('add_meta_boxes', 'howpcp_register_meta_box');
