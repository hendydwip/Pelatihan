<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tehema
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/main.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css">
	<!-- Font Awesome Icons -->
	<link href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<!--	<a class="skip-link screen-reader-text" href="#content">--><?php //esc_html_e( 'Skip to content', 'tailwindtheme' ); ?><!--</a>-->

	<header id="masthead" class="site-header py-4 px-2 bg-grey-lightest shadow mb-2 flex justify-between items-center border-t-4 border-teal flex-col md:flex-row">
		<div class="site-branding">
			<?php
			the_custom_logo();
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				<?php
			$theme_description = get_bloginfo( 'description', 'display' );
			if ( $theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $theme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<?php
						wp_nav_menu(array(
							'theme_location'	=> 'MainMenu',
							'container'			=> 'nav',
							'menu_class'		=> 'menu'
						));
					?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
