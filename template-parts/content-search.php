<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tehema
 */

?>

<?php 
if ( in_category('category1') ) { 
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('p-2 rounded-lg my-2 perpost'); ?>>
		<header class="entry-header">
		<?php 
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );


			if ( 'post' === get_post_type() ) :
				?>
				
			<div class="post-details bg-blue">
				<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
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
		<div class="post-excerpt">
			<?php the_excerpt(); ?>
		</div><!-- post-excerpt -->

	</article>
	<?php
 }









if ( in_category('category2') ) { 
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('p-2 rounded-lg my-2 perpost'); ?>>
		<header class="entry-header">
			<?php
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

			if ( 'post' === get_post_type() ) :
				?>
				
			<div class="post-details bg-grey">
				<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
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