<?php
/*
Template Name: 詩詞作者版面
Template Post Type: page
*/
?>
<?php get_header();
the_post();
?>
<main id='page-author'>
    <article class='author'>
        <section class='author-title'>
            <?php the_title("<p>", "</p>"); ?>
        </section>
        <section class='author-body'>
            <?php if (has_post_thumbnail()) { ?>
                <div id='author-feature'>
                    <?php the_post_thumbnail('medium'); ?>
                </div>
            <?php } ?>
            <?php
            the_content();
            ?>
        </section>
    </article>
</main>
<?php get_footer(); ?>