<?php get_header(); ?>
<section>
    <?php while (have_posts()) : the_post(); ?>
        <div class='panel panel-primary'>
            <div class='panel-heading'>
                <?php the_title(); ?>
            </div>
            <div class='panel-body'>
                <?php the_content(); ?>
            </div>
            <div class='panel-footer'>
                <?php the_author(); ?><br>
                <?php the_tags(); ?><br>
                <?php the_category(); ?>
            </div>
        </div>
    <?php endwhile; ?>
</section>
<aside>
    <?php get_sidebar(); ?>
</aside>
<footer>
    <?php get_footer(); ?>
</footer>
</div>