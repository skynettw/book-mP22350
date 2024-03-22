<?php get_header(); ?>
<main>
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
        </div>
    <?php endif; ?>
</main>
<aside id='sidebar'>
    <?php get_sidebar(); ?>
</aside>
<?php get_footer(); ?>