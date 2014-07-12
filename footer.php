<?php
/**
 * The template for displaying the footer.
 *
 * @package flexbox
 */
?>
<div class="site-info">
    <?php esc_attr_e( '&copy;', 'flexbox' ); _e( date( 'Y' ) ); ?>
    <a href="<?php echo esc_url(home_url( '/' )) ?>" target="_blank" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>

    <span class="sep"> | </span>
        <?php printf( __( 'Theme: %1$s by %2$s ', 'flexbox' ), 'Flexbox', '<a href="http://vanweerd.com" rel="designer">vanweerd.com</a>' ); ?>
    <span class="sep"> | </span>
        <?php printf( __( 'Powered by ', 'flexbox' )); ?><a href="http://wordpress.org/" rel="generator">
        <?php printf( __( '%s', 'flexbox' ), 'WordPress' ); ?></a>             
</div>

<?php wp_footer(); ?>

</body>
</html>