<table class="table table-striped table-sm table-hover">
    <tr>
        <th>
            <?php _e(" 篇名 ", "my2024"); ?>
        </th>
        <th>
            <?php _e(" 分類 ", "my2024"); ?>
        </th>
    </tr>
    <?php while (have_posts()) : the_post(); ?>
        <tr>
            <td><?php the_title(); ?></td>
            <td><?php the_category(__(", ", "my2024")); ?></td>
        </tr>
    <?php endwhile; ?>
</table>