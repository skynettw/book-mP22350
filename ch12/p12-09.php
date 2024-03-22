<?php
function howpcp_load_bootstrap()
{
    wp_enqueue_style('bootstrap_css', ' https://cdn.jsdelivr.net/npm/bootstrap@5.3.2
   /dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap_js', ' https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/
   dist/js/bootstrap.min.js');
}
add_action('admin_enqueue_scripts', 'howpcp_load_bootstrap');
function howpcp_aff_mainpage()
{
?>
    <div class="container">
        <div class='row'>
            <div class='col-2'></div>
            <div class='col-8'>
                <div class='card'>
                    <div class='card-header'>
                        <h2> 聯盟行銷連結設定 </h2>
                    </div>
                    <div class='card-body'>
                        body
                    </div>
                    <div class='card-footer'>
                        footer
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
