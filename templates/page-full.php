<?php
/*
Template Name: Full Width
*/
get_header(); ?>
	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">		
			



			<section id="section_one" class="hero">
			

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


			<section id="section_four" class="customers">
				<div class="row">					
						<?php if (get_field('brands') ): ?>
					<?php while (has_sub_field('customer') ): ?>	
						<div class="customer-logo">
							<img src="<?php the_sub_field('logo'); ?>" />
						</div>			
			    	<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</section><!--End Services Section-->




			<section id="section_two" class="about-us">
				<div class="row">
					<div class="large-9 large-centered columns">
						<p><?php the_field('about_us'); ?></p>
					</div>
				</div>
			</section><!--End About Us Section-->



			<section id="section_three" class="services">
				<div class="row">					
						<?php if (get_field('services') ): ?>
					<?php while (has_sub_field('services') ): ?>	
						<div class="large-4 columns">
							<p class="icon"><?php the_sub_field('icon'); ?></p>
							<h3><?php the_sub_field('service'); ?></h3>
		            		<p><?php the_sub_field('services'); ?></p>
						</div>			
			    	<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</section><!--End Services Section-->




			<section id="section_four" class="brands">
				<div class="row">					
						<?php if (get_field('brands') ): ?>
					<?php while (has_sub_field('brands') ): ?>	
						<div class="large-2 medium-3 columns">
							<img src="<?php the_sub_field('logo'); ?>" />
						</div>			
			    	<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</section><!--End Services Section-->









<section id="section_five" class="staff">
<div>
<?php


// Output photos in rows of toggling length
$row = 0;
$row_length = 5;
$photo_index = -1;
if ( get_field('staff') ):
while ( has_sub_field('staff') ):

$image = get_sub_field('image');
$firstname = get_sub_field('first_name');
$lastname = get_sub_field('last_name');
$bio = get_sub_field('bio');


++$photo_index;
if ( $photo_index % $row_length == 0 ) {
$photo_index = 0;
++$row;
// variables
echo '</div><div class="row">';
$row_length = 4 + ( $row_length == 4 ) * 1;
}
echo '<div class="team__item team__link js-team-card-trigger ">';
	echo '<div class="team__card js-team-card">';
	echo '<div class="team__card--top"></div>';
		echo '<div class="team__card-content">';
			print "<h5>$firstname $lastname</h5>";
			print "<p>$bio</p>";
		echo '</div>';
	echo '</div>';
	print "<img class='img--circle team__img' src='$image' />";
echo '</div>';

endwhile;
endif;
if ( !$photo_index == 0 ) {
echo '</div>';
}
?>
</section>









		<div class="row">
		    <?php 
		        $total_width = 0;
		        if( have_rows('column') ) : while( have_rows('column') ) : the_row(); 
		            $width = get_sub_field('column_width');
		            $last = get_sub_field('last_column');
		            $body = get_sub_field('column_body');
		            $total_width += $width;

		        if ($total_width > 12) {
		            $total_width = $width;
		            ?></div><div class="row"><?php
		        }
		    ?>
		    <div class="small-12 medium-<?php echo $width ?> columns">
		        <?php echo $body ?>
		    </div>
		        <?php
		        if ($last == '1') {
		            $total_width = 0;
		            ?></div><div class="row"><?php
		        } endwhile; endif;
		    ?>
		</div>



		












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
