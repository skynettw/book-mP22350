<?php
get_header();
the_post();
?>
<div id='front-page'>
    <?php if (has_post_thumbnail()) { ?>
        <div id='front-page-feature'>
            <?php the_post_thumbnail('medium'); ?>
        </div>
    <?php } ?>
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>