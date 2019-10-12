<?php
/**
 * The template for displaying the about page
 * *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

		<div id="primary" class="about-page hero-content">
			<div class="main-content" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>
			</div><!-- .main-content -->
		</div><!-- #primary -->

<!-- Services -->
		<section class="services">
			<div class="intro-services">
					<h4>Our Services</h4>
					<p>We take pride in our clients and the content we create for them.</p>
					<p>Here's a brief overview of our offered services.</p>
			</div>



				<?php query_posts('post_type="services"'); ?>
				<!-- the loop -->
				<?php while (have_posts() ) : the_post();
					$size = "full";
					$image = get_field('image'); ?>

			<div class="individual-services" >

				<div class="individual-services-text">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</div>

				<div class="individual-services-image">
					<a href="<?php the_permalink(); ?>">
						<?php if($image) {
							echo wp_get_attachment_image( $image, $size );
							} ?>
					</a>
				</div>

			</div>

				<?php endwhile; ?>
				<?php wp_reset_query(); ?>



			<div class="contact-services" >
							<aside class="contact-us">
								<h2>Interested in working with us?</h2>
							</aside>
							<aside class="contact-us-button">
								<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
							</aside>
			</div>

		</section>


<?php get_footer(); ?>
