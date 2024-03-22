<?php get_header(); ?>
<?php
global $query_string;
$args = array(
    'posts_per_page' => 21,
    'post_type' => 'any',
    'post_status' => 'any'
);
query_posts($args);
$i = 0;
?>
<div class="row">
    <?php while (have_posts()) : the_post(); ?>
        <div class='col-4'>
            <?php
            if (is_sticky())
                echo "<div class='card text-gray bg-warning'>";
            else
                echo "<div class='card mt-8'>";
            ?>
            <?php the_title("<div class='card-header'><h3>", "</h3></div>"); ?>
            <div class='card-body'>
                <?php the_excerpt(); ?>
            </div>
            <div class='card-footer'>
                <em>Posted: <?php the_date(); ?>
                    at <?php the_time(); ?>
                </em>
            </div>
        </div>
</div>
<?php endwhile; ?>
</div>
<?php get_footer(); ?>