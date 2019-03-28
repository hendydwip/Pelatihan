<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Tehema
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main w-4/5 my-16 mx-auto justify-center flex">

			<div id="notfound">
				<div class="notfound flex justify-center flex-col">
					<div class="notfound-404 justify-center flex flex-col">
						<div class="justify-center flex">
							<h3>Oops! Page not found</h3>
						</div>
						<div class="justify-center flex">
							<h1><span>4</span><span>0</span><span>4</span></h1>
						</div>
					</div>
					<h2>we are sorry, but the page you requested was not found. Comeback here if your loss "<a href="<?php echo home_url(); ?>">here</a>"</h2>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
