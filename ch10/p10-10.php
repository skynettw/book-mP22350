<div class="entry-content">
    <?php
    if (is_singular()) :
        the_content(
            sprintf(
                wp_kses(
                    __('Continue reading<span class="screen-reader-text"> "%s"
</span>', 'my2024t'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post(get_the_title())
            )
        );
    else :
        the_excerpt();
    endif;
