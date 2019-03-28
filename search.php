<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Tehema
 */

get_header();
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main w-4/5 mx-auto flex flex-row">
			<article class="w-2/3 mx-auto">

		<?php if ( have_posts() ) : ?>

			<header class="page-header flex justify-center">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'theme' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			?>

				<?php
				the_posts_pagination( array(
					'mid_size' => 2,
					'prev_text' => __( 'Back', 'textdomain' ),
					'next_text' => __( 'Next', 'textdomain' ),
					'screen_reader_text' => 'Going to ?',
				) );
				?>

			<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</article>

	<!-- Check if Sidebar is True -->
	<?php if ( is_active_sidebar('sidebar-1')){ ?>
	<aside  class="w-1/3 px-4">
		<?php 
			get_sidebar(); 
		?>
	</aside>
	<?php } ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
