<?php
get_header();
the_post();
?>
<div class='row'>
    <div id='front-page'>
        <?php if (has_post_thumbnail()) { ?>
            <div id='front-page-feature'>
                <?php the_post_thumbnail('medium'); ?>
            </div>
        <?php } ?>
        <?php the_content(); ?>
    </div>
</div>
<div class='row'>
    <div class='col-sm-4 front-page-column'>
        <div class='column-title'>
            最近選入的詩
        </div>
        <?php
        $args = array(
            'category_name' => ' 詩 ',
            'posts_per_page' => 3
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) :
            echo "<ul>";
            while ($my_query->have_posts()) :
                $my_query->the_post();
                echo "<li>";
                echo "<a href='" . get_the_permalink() . "'>";
                the_title();
                echo "</a></li>";
            endwhile;
            echo "</ul>";
        endif;
        wp_reset_postdata();
        ?>
    </div>
    <div class='col-sm-4 front-page-column'>
        <div class='column-title'>
            最近選入的詞
        </div>
        <?php
        $args = array(
            'category_name' => ' 詞 ',
            'posts_per_page' => 3
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) :
            echo "<ul>";
            while ($my_query->have_posts()) :
                $my_query->the_post();
                echo "<li>";
                echo "<a href='" . get_the_permalink() . "'>";
                the_title();
                echo "</a></li>";
            endwhile;
            echo "</ul>";
        endif;
        wp_reset_postdata();
        ?>
    </div>
    <div class='col-sm-4 front-page-column'>
        <div class='column-title'>
            最近選入的新詩
        </div>
        <?php
        $args = array(
            'category_name' => ' 新詩 ',
            'posts_per_page' => 3
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) :
            echo "<ul>";
            while ($my_query->have_posts()) :
                $my_query->the_post();
                echo "<li>";
                echo "<a href='" . get_the_permalink() . "'>";
                the_title();
                echo "</a></li>";
            endwhile;
            echo "</ul>";
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>
<?php get_footer(); ?>