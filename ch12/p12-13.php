<?php
function howpcp_add_affiliation_setting_menu()
{
    add_menu_page(
        'Aff 連結設定 ',
        ' 聯盟行銷連結設定 ',
        'manage_options',
        'howpcp_affiliation_settings',
        'howpcp_aff_mainpage',
        null,
        66
    );
    add_action('admin_init', 'howpcp_register_settings');
}
add_action('admin_menu', 'howpcp_add_affiliation_setting_menu');
function howpcp_register_settings()
{
    register_setting(
        'howpcp-settings-group',
        'aff_options',
        'howpcp_sanitize_options'
    );
}
function howpcp_aff_mainpage()
{
?>
    <br><br><br>
    <div class='row'>
        <div class='col-sm-1'></div>
        <div class='col-sm-10'>
            <div class='card'>
                <div class='card-header'>
                    <h2> 聯盟行銷連結設定 </h2>
                </div>
                <div class='card-body'>
                    <form method='post' action='options.php'>
                        <?php
                        settings_fields('howpcp-settings-group');
                        $aff_options = get_option('aff_options');
                        $aff_option_name = esc_attr($aff_options['name']);
                        $aff_option_url = esc_url($aff_options['url']);
                        ?>
                        替代名稱：<input type='text' name='aff_options[name]' value='<?= $aff_option_name; ?>'>
                        <br>
                        連結網址：<input type='text' name='aff_options[url]' value='<?= $aff_option_url; ?>' size=50><br>
                        <br>
                        <input type='submit' value=' 儲存設定 '>
                    </form>
                </div>
                <div class='card-footer'>
                    <p> 這是 WordPress 站長練功秘笈的範例 </p>
                </div>
            </div>
        </div>
    </div>
<?php
}
function howpcp_sanitize_options($input)
{
    $input['name'] = sanitize_text_field($input['name']);
    $input['url'] = esc_url($input['url']);
    return $input;
}
function howpcp_auto_affiliation2($content)
{
    $aff_options = get_option('aff_options');
    $aff_name = $aff_options['name'];
    $aff_link = $aff_options['url'];
    return str_replace(
        $aff_name,
        "<a href='" . $aff_link . "'>" . $aff_name . "</a>",
        $content
    );
}
add_filter("the_content", "howpcp_auto_affiliation2");
