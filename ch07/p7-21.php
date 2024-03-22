<?php get_header(); ?>
<div>
    <div>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href='<?= the_permalink() ?>'>
                        <?php the_title(); ?>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
<?php get_footer(); ?>