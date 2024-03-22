<?php get_header();
the_post();
$tags = get_the_tags();
$author = $tags[0]->name;
?>
<div class='row'>
    <div class='col-md-8'>
        <main id='single-post'>
            <article class='post'>
                <section class='post-title'>
                    <?php the_title("<p>", "</p>"); ?>
                    <p class='post-author'>《<?= $author ?>》</p>
                </section>
                <section class='post-body'>
                    <?php
                    the_content();
                    ?>
                </section>
            </article>
        </main>
    </div>
    <div class='col-sm-4'>
        <aside id='sidebar'>
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>
<?php get_footer(); ?>