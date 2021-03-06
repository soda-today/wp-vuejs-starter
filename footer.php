<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-vuejs-starter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wpvs' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'wpvs' ), 'WordPress' );
				?></a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Starter Theme: %1$s by %2$s.', 'wpvs' ), '<a href="wp-vuejs-starter">wp-vuejs-starter</a>', '<a href="https://soda.today/">Soda Studios</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<page-loader></page-loader>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
