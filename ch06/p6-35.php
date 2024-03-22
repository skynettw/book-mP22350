</div><!-- .site-content -->
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
    </div><!-- .site-info -->
    <div id="footer-sidebar">
        <?php
        if (is_active_sidebar('footer-sidebar')) {
            dynamic_sidebar('footer-sidebar');
        }
        ?>
    </div>
</footer><!-- .site-footer -->
</div><!-- .site -->
<?php wp_footer(); ?>
</body>

</html>