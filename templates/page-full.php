<?php
/*
Template Name: Full Width
*/
get_header(); ?>
	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			

			<section id="section_one" class="hero">
				<div class="row">
					<div class="large-12 columns">
					</div>
				</div>		
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
					
					<div class="medium-4 columns">
					<img src="<?php the_sub_field('image'); ?>" alt="" />
					<h3><?php the_sub_field('first_name'); ?> <?php the_sub_field('last_name'); ?></h3>
					<p><?php the_sub_field('bio'); ?></p>
					</div>

					<?php endwhile; ?>

				<?php endif; ?>
				</div>
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
