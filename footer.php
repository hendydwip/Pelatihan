<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tehema
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer items-stretch py-4 px-2 bg-grey-lightest shadow-inner mt-2 flex justify-between items-center border-b-4 border-teal flex-col md:flex-row footeran">
		<div class="site-info justify-between">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'theme' ), 'theme', '<a href="http://Hendy">Hendy</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
