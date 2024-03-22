<?php
/*
Template Name: 關於本站版面
Template Post Type: page 
*/
?>
<?php get_header();
the_post();
?>
<nav class='page-sub-menu'>
    <?php wp_list_pages(array(
        'child_of' => $post->ID,
        'title_li' => ''
    )); ?>
</nav>
<main id='page-about'>
    <article class='about'>
        <section class='about-title'>
            <?php the_title("<p>", "</p>"); ?>
        </section>
        <section class='about-body'>
            <?php if (has_post_thumbnail()) { ?>
                <div id='about-feature'>
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