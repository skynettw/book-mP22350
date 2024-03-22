<?php // tag.php 
?>
<?php get_header(); ?>
<div class='row'>
    <div class='col-sm-8'>
        <main id='tag'>
            <div class='archive-title'>
                <h2 class='alert alert-primary'>
                    <?php single_tag_title(); ?>
                    作品集
                </h2>
            </div>
            <?php get_template_part('mainloop'); ?>
        </main>
    </div>
    <div class='col-sm-4'>
        <aside id='sidebar'>
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>
<?php get_footer(); ?>