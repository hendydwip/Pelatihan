<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_WordPress
 */

?>

<?php 
if ( in_category('category1') ) { 
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('p-2 rounded-lg perpost mb-2 mx-auto'); ?>>
		<header class="entry-header  mb-2">
			<?php
			if ( is_singular() ) :
				the_title( '<h3 class="entry-title">', '</h3>' );
			else :
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				
			<div class="post-details bg-blue p-2 rounded-lg">
				<i class="fa fa-clock-o"></i> <time><?php echo get_the_date(); ?></time>
				<i class="fa fa-folder"></i> <?php the_category(', ');	?>
				<i class="fa fa-tags"></i> <?php the_tags(); ?>

				<?php edit_post_link( 'Edit', '<i class="fa fa-pencil"></i>', '' ); ?>
			</div><!-- post-details -->			

			<?php endif; ?>
		</header><!-- .entry-header -->
		
		
		<?php if(has_post_thumbnail()){ //check for feature image ?>
		<div class="post-image">
			<?php the_post_thumbnail();?>
		</div><!-- post-image -->
		<?php }else{
			?>
		<div class="post-image">
			<img src='<?php bloginfo('template_directory'); ?>/assets/img/foto.png'>
		</div><!-- post-image -->			
			<?php
		} ?>
		<div class="post-excerpt p-2">
			<?php the_excerpt(); ?>
		</div><!-- post-excerpt -->

	</article>
	<?php
 }









if ( in_category('category2') ) { 
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('p-2 rounded-lg perpost mb-2 mx-auto'); ?>>
		<header class="entry-header mb-2">
			<?php
			if ( is_singular() ) :
				the_title( '<h3 class="entry-title">', '</h3>' );
			else :
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				
			<div class="post-details bg-grey  p-2 rounded-lg">
				<i class="fa fa-clock-o"></i> <time><?php echo get_the_date(); ?></time>
				<i class="fa fa-folder"></i> <?php the_category(', ');	?>
				<i class="fa fa-tags"></i> <?php the_tags(); ?>
				<?php edit_post_link( 'Edit', '<i class="fa fa-pencil"></i>', '' ); ?>
			</div><!-- post-details -->			

			<?php endif; ?>
		</header><!-- .entry-header -->
		
		
		<?php if(has_post_thumbnail()){ //check for feature image ?>
		<div class="post-image">
			<?php the_post_thumbnail();?>
		</div><!-- post-image -->
		<?php }else{
			?>
		<div class="post-image">
			<img src='<?php bloginfo('template_directory'); ?>/assets/img/video.jpg'>
		</div><!-- post-image -->			
			<?php
		} ?>
		<div class="post-excerpt p-2">
			<?php the_excerpt(); ?>
		</div><!-- post-excerpt -->

	</article>
	<?php	
 }?>