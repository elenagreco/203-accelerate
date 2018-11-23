<?php
/**
 * The page is for displaying the 404 status
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<div class="wrong-turn-description">
				<h1 class="wrong-turn-header">Whoops!  Took a Wrong Turn...</h1>
				<p>Sorry, this page no longer exists, never existed or has been moved.  We feel like complete jerks for totally misleading you.</p>
				<p>Feel free to take a look around our <a href="<?php echo site_url('/blog/') ?>">blog</a> or some of our featured <a href="<?php echo site_url('/case-studies/') ?>">work</a>.</p>
			</div>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
