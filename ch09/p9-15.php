<?php if (!is_tag()) : ?>
    <div class='author'>
        <em class='list-group-item'>《
            <?php
            $tags = get_the_tags();
            ?>
            <a href='<?php echo get_tag_link($tags[0]->term_id); ?>'>
                <?= $tags[0]->name; ?>
            </a>
            》
        </em>
    </div>
<?php endif; ?>