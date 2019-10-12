<?php
/**
 * The template for displaying the 404 page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">

			<div class="page-404">

					<div class="text-404-1">
						<h2>Whoops, Took a Wrong Turn...</h2>
					</div>

					<div class="text-404-2">
						<p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
						<p>Feel free to take a look around our <a class="link-404" href="<?php echo site_url('/blog/') ?>" >blog</a> or some of our featured <a class="link-404" href="<?php echo site_url('/blog/') ?>" >work.</a></p>
					</div>

			</div>
		</div>
	</div>

<?php get_footer(); ?>
