<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unquieted
 */

?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer__wrap">
			<?php
			// Make sure there is a social menu to display.
			if ( has_nav_menu( 'social' ) ) { ?>
			<nav class="social-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'social',
						'menu_class'     => 'social-links-menu',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>' . unquieted_get_svg( array( 'icon' => 'chain' ) ),
					) );
				?>
			</nav><!-- .social-menu -->
			<?php } ?>

			<?php 
                        /*
			<div class="site-info">
				<div><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'unquieted' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'unquieted' ), 'WordPress' ); ?></a></div>
				<div><?php printf( esc_html__( 'Theme: %1$s by %2$s', 'unquieted' ), 'unquieted', '<a href="https://edwardingram.com" rel="designer">edward ingram</a>' ); ?></div>
			</div><!-- .site-info -->
                         */
                        ?>
		</div><!-- .site-footer__wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>