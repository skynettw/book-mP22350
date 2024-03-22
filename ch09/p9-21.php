<em class='list-group-item'>
    <?php
    $tags = get_the_tags();
    if ($tags != NULL) {
    ?>
        《
        <a href='<?php echo get_tag_link($tags[0]->term_id); ?>'>
            <?= $tags[0]->name; ?>
        </a>
        》
    <?php } ?>
</em>