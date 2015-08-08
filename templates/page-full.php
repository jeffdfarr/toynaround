<?php
/*
Template Name: Full Width
*/
get_header(); ?>
	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">		
			



			<section id="section_one" class="hero">
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







			<section id="section_two" class="about-us">
				<div class="row">
					<div class="large-9 large-centered columns">
						<p><?php the_field('about_us'); ?></p>
					</div>
				</div>
			</section><!--End About Us Section-->



			<section id="section_three" class="brands">
				<div class="row">
					<div class="large-12 columns">
						<p>Brands Here</p>
					</div>
				</div>
			</section><!--End Brands Section-->



			<section id="section_four" class="customers">
				<div class="row">
					<div class="large-12 columns">
						<p>Customers Here</p>
					</div>
				</div>
			</section><!--End Customers Section-->



			

		<section id="section_five" class="staff">
			<div class="row">
				
					<?php if (get_field('staff') ): ?>
					<?php while (has_sub_field('staff') ): ?>
    					<div class="team__item team__link js-team-card-trigger ">
       						<div class="team__card js-team-card">
            					<div class="team__card--top"></div>
            					<div class="team__card-content">
	            					<h5><?php the_sub_field('first_name'); ?> <?php the_sub_field('last_name'); ?></h5>
	                				<p><?php the_sub_field('bio'); ?></p>
                				</div><!--End team__card-content-->
            				</div><!--End team__card-->
            				<img class="img--circle team__img" src="<?php the_sub_field('image'); ?>" />
        				</div><!--End team__item-->	
			    	<?php endwhile; ?>
					<?php endif; ?>
				
			</div><!--End Row-->
		</section><!--End Staff Section-->






			<div class="entry-content">
				<div class="row">
					<div class="large-12 columns">
						<?php the_content(); ?>
					</div>
				</div>
			</div><!--End Main Content-->


			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

<?php get_footer(); ?>
