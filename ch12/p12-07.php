<?php
function howpcp_aff_mainpage()
{
    echo "<h2>Hello world!</h2>";
}
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
}
add_action('admin_menu', 'howpcp_add_affiliation_setting_menu');
