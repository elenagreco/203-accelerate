<?php
/**
 * The template for displaying the About page
 *
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

	<section class="about-page-services">
		<div class="site-content">
			<div class="services-section-header">

					<h4 class="our-services-header">Our Services</h4>
					<p class="our-services-subheader"><?php the_field('our_services'); ?></p>

			</div>
			<ul class="service-items">
				<?php query_posts('posts_per_page=6&post_type=services'); ?>
					<?php while ( have_posts() ) : the_post(); 
							$image_1 = get_field('image_1');
							$size = "thumbnail"; ?>

							<article>
								<div class="individual-service">
									<div class="service-description">
										<h2><?php the_title(); ?></h2>
										<p><?php the_content(); ?></p>
									</div>
									<figure class="service-image">
										<a href="<?php the_permalink(); ?>"><?php if($image_1) {
										echo wp_get_attachment_image( $image_1, $size );
									} ?></a>
									</figure>
								</div>
							</article>
								
								<?php endwhile; // end of the loop ?> 
					<?php wp_reset_query(); // resets the alterd query back to the original ?>
			</ul>	
			
			<div class="work-with-us">
				<h2 class="work-with-us-text"><?php the_field('contact_us'); ?></h2>
				<p class="about-contact"><a class="button contact-button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></p>
			</div>

		</div>

	</section>
<?php get_footer(); ?>

