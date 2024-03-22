<?php // mainloop.php 
?>
<?php if (have_posts()) : ?>
    <div class='list-group'>
        <?php while (have_posts()) : the_post(); ?>
            <div class='title'>
                <a class='list-group-item' href='<?php the_permalink(); ?>'>
                    <div class='poem-title'>
                        <?php the_title("", ""); ?>
                    </div>
                </a>
            </div>
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