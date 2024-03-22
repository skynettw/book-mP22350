<?php get_header(); ?>
<section>
    <?php if (have_posts()) : ?>
        <table class="table table-striped table-sm table-hover">
            <tr>
                <th> 篇名 </th>
                <th> 分類 </th>
            </tr>
            <?php while (have_posts()) : the_post(); ?>
                <tr>
                    <td><?php the_title(); ?></td>
                    <td><?php the_category(", "); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php endif; ?>
</section>
<hr>
<aside>
    <?php get_sidebar(); ?>
</aside>
<?php get_footer(); ?>