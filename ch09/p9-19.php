<?php // category.php 
?>
<?php get_header(); ?>
<div class='row'>
    <div class='col-sm-8'>
        <main id='category'>
            <h2 class='alert alert-info'>
                <div class='archive-title'>
                    <?php single_cat_title(); ?>
                    類的所有內容
                </div>
            </h2>
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