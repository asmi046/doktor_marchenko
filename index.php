<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package montenegro
 */

get_header('home');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="qualification">
				<div class="container">
					<h2 class="section-title section-title-main">Квалификация</h2>
					<?php $array_q = carbon_get_theme_option('monte_qualification');?>
					<div class="qualification-wrapper">
						<?php foreach($array_q as $q):?>
							<div class="qualification-item">
								<?php echo $q['monte_text'];?>
							</div>
						<?php endforeach;?>
					</div>
					<div class="btn-wrap">
						<a href="<?php echo get_permalink(25);?>" class="light-button light-button__inverse">Подробнее</a>
					</div>
				</div>
			</section>
			<?php get_template_part('template-parts/tours', 'section');?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer('home');
