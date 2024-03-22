<?php // archive.php 
?>
<?php get_header(); ?>
<div class='row'>
    <div class='col-sm-8'>
        <main>
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
            <?php if (have_posts()) : ?>
                <div id='main-content' class='list-group'>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class='title'>
                            <a class='list-group-item' href='<?php the_permalink(); ?>'>
                                <div class='poem-title'>
                                    <?php the_title("", ""); ?>
                                </div>
                            </a>
                        </div>
                        <?php if (!is_tag()) : ?>
                            <div class='author'>
                                <em class='list-group-item'>《
                                    <?php
                                    $tags = get_the_tags();
                                    ?>
                                    <a href='<?php echo get_tag_link($tags[0]->term_id); ?>'>
                                        <?= $tags[0]->name; ?>
                                    </a>
                                    》
                                </em>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <div class='list-group-item'>
                        <p>
                            <?php the_posts_pagination(); ?>
                        <div class='clearfix'></div>
                        </p>
                    </div>
                <?php
            else :
                ?>
                    <p> 沒有可以顯示的內容 </p>
                </div>
            <?php endif; ?>
        </main>
    </div>
    <div class='col-sm-4'>
        <aside id='sidebar'>
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>
<?php get_footer(); ?>