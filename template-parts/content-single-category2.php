<article id="post-<?php the_ID(); ?>" <?php post_class('w-2/3 perpost p-2 rounded-lg mx-auto');?>>
    <header class="entry-header justify-center flex rounded-lg rounded-b-none mb-2"  data-type="background" data-speed="10" style="background: url('<?php bloginfo('template_directory'); ?>/assets/img/grey.jpg') 50% 0 repeat fixed; min-height: 300px;">
			<div class="flex flex-col items-center justify-center w-full m-4 perpost1 rounded-full">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title text-white">', '</h1>' );
				else :
					the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					
				<div class="post-details text-white flex flex-col">
					<div class="mb-2">
						<i class="fa fa-user"></i> <?php the_author(); ?>
					</div>
					<div class="mb-2">
						<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
					</div>
					<div class="link mb-2">
						<i class="fa fa-folder"></i> <?php the_category(', ');	?>
					</div>
					<div class="link mb-2">
						<i class="fa fa-tags"></i> <?php the_tags(); ?>
					</div>

					<?php edit_post_link( 'Edit', '<i class="fa fa-pencil"></i>', '' ); ?>
				</div><!-- post-details -->			

				<?php endif; ?>
			</div>
		</header><!-- .entry-header -->
		
		<!-- Video Content -->
		<?php if(get_field('list_video')): ?>
		<div class="">
			<iframe width="100%" height="415" src="https://www.youtube.com/embed/<?php echo get_field('list_video'); ?>" frameborder="0" allowfullscreen></iframe>
		</div><!-- end col -->
		<?php endif; ?>

		<div class="post-body mb-2">
			<?php the_content(); ?>
		</div><!-- post-excerpt -->

			<?php
			// Check if have a list of photo
			if( have_rows('editor') ): ?>
			<div class="bg-grey p-2 rounded-lg mb-2">
				<span class="underline">Editor :</span>	
				<ul class="list-reset flex-row flex">                    	
					<?php while( have_rows('editor') ): the_row();           		
						// vars    
						$nama = get_sub_field('nama');      		      		
						$photo_editor = get_sub_field('photo_editor');                   		
						?>            		            		
							<li>
								<div class="border-l-4 border-white flex items-center ml-2 pl-2">
									<span><?php echo $nama ?></span>            		                       
									<?php if($photo_editor){ ?>
									<img class="rounded-full ml-2 h-5" width="20px" height="20px" src="<?php echo $photo_editor['url']; ?>">
									<?php }else{ ?>
									<i class="fa fa-user ml-2"></i>
									<?php } ?>
								</div>                     
							</li>
					<?php endwhile; endif;?>  
				</ul>

			</div>      