<?php // search.php 
?>
<?php get_header(); ?>
<div class='row'>
    <div class='col-sm-8'>
        <main id='search'>
            <div class='archive-title'>
                <h2 class='alert alert-warning'>
                    「<?php the_search_query(); ?>」
                    的搜尋結果如下：
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