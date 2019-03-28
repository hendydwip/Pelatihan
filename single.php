<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap_to_WordPress
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main w-4/5 mx-auto flex flex-row">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', "single" );
				
			?>

				<div class="bg-grey p-2 rounded mb-2">
					<?php
						the_post_navigation(array(
							'screen_reader_text' => __( 'Next stop?' ),
						));
						?>
				</div>


				<div class="bg-grey p-2 rounded mb-2">
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
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
