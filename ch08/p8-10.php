<?php get_header(); ?>
<section>
    <?php if (have_posts()) : ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
                <li><?php the_title(); ?></li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</section>
<hr>
<aside>
    <?php get_sidebar(); ?>
</aside>
<?php get_footer(); ?>