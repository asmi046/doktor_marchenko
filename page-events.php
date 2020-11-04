<?php
/**
 * Template Name: События
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
		while ( have_posts() ) :
			the_post();
			$arr_events = carbon_get_theme_option('monte_events');
			foreach($arr_events as $event):?>
				<div class="events-item">
					<div class="events-item__photo" style="background-image: url(<?php echo wp_get_attachment_image_src($event['image'], 'full')[0];?>);"></div>
					<div class="events-item__content">
						<div class="events-item__date"><?php echo $event['date']?></div>
						<div class="events-item__title"><?php echo $event['title']?></div>
						<div class="events-item__descr"><?php echo $event['about']?></div>
						<a href="<?php echo $event['link']?>" class="events-item__link light-button light-button__inverse">Подробнее</a>
					</div>
				</div>
			<?php endforeach;
			//get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?> 
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
