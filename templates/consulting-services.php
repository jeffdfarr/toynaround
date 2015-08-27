<?php
/*
Template Name: Consulting Services
*/
get_header(); ?>
	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">		
			



			<section class="hero">
			<div class="tagline">
			<?php if (get_field('tagline') ): ?>
				<h2><?php the_field('tagline'); ?></h2>
			<?php endif; ?>
			</div>

			<?php
			echo '<div class="slick-slider clearfix">';
			if ( have_rows( 'slick_slides' ) ) :
			while ( have_rows( 'slick_slides' ) ) : the_row();
			$image 		= get_sub_field( 'image' );
			$image_url	= $image['url'];
			echo '<div class="slide">';
			printf( '<img src="%s" />', $image_url );
			echo '</div>';
			endwhile;
			endif;
			echo '</div>';
			?>

			</section><!--End Hero Section-->



			<section class="services">
					<?php if (have_rows('services') ): ?>
						<div class="row">					
							<?php while (has_sub_field('services') ): ?>	
								<div class="large-4 columns">
									<p class="icon"><?php the_sub_field('icon'); ?></p>
									<h3><?php the_sub_field('service'); ?></h3>
				            		<p><?php the_sub_field('services'); ?></p>
								</div>			
			    			<?php endwhile; ?>
			    		</div>
					<?php endif; ?>	
			</section><!--End Services Section-->






			<?php

				// check if the repeater field has rows of data
				if( have_rows('services') ):
					
				 	// loop through the rows of data
					
					$counter = 0;
				
				    while ( have_rows('services') ) : the_row();
				    
				    if ($counter % 2 == 0) { 
					   	echo '<div class="large-4 columns">';
					   	the_sub_field('service');
					   	the_sub_field('services');
				        echo '</div>';						
					}
					
					$counter ++;
					
				    endwhile;
				   
				else :

				    // no rows found

				endif;

			?>








			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

<?php get_footer(); ?>
