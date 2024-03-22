<div class='archive-title'>
    <h2 class='alert alert-primary'>
        <?php
        if (is_category()) {
            single_cat_title();
        } elseif (is_tag()) {
            echo single_tag_title() . " 在本站的作品 ";
        } elseif (is_month()) {
            echo get_the_date() . " 的所有貼文 ";
        } else {
            echo " 以下為彙整資訊 ";
        }
        ?>
    </h2>
</div>