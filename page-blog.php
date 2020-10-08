<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Блог
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package montenegro
 */

get_header('page');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
					  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					}
				?>
			</div>
			<div class="container">
			<?php 
					$args = array(
						'post_type' => 'post',
						'cat' => 2,
					);
					$query = new WP_Query($args);
					if($query->have_posts()):
						while($query->have_posts()):
							$query->the_post();
							get_template_part( 'template-parts/content', 'loop' );
						endwhile;
					endif; wp_reset_postdata();
				?>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
			</div>

			<?php get_template_part('template-parts/tours', 'section');?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
