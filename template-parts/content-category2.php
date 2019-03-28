<article id="post-<?php the_ID(); ?>" <?php post_class('w-1/3 border-blue border m-2 p-2 rounded-lg perpost'); ?>>
	<header class="entry-header">
		<?php if(has_post_thumbnail()){ //check for feature image ?>
		<div class="post-image-custom">
			<?php the_post_thumbnail(array(193, 130));?>
		</div><!-- post-image -->
		<?php }else{ ?>
		<div class="post-image-custom">
			<img width="193" height="130" src='<?php bloginfo('template_directory'); ?>/assets/img/video.jpg'>
		</div><!-- post-image -->	
		<?php }?>
	</header><!-- .entry-header -->

	<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		
		<div class="post-excerpt p-2">
			<?php the_excerpt(); ?>
		</div><!-- post-excerpt -->

		<div class="post-details bg-blue p-2">
			<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
			<i class="fa fa-folder"></i> <?php the_category(', ');	?>
			<i class="fa fa-tags"></i> <?php the_tags(); ?>

			<?php edit_post_link( 'Edit', '<i class="fa fa-pencil"></i>', '' ); ?>
		</div><!-- post-details -->			

		<?php endif; ?>

</article>