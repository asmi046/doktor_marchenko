<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package montenegro
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Страница не найдена', 'monte' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Такой страницы не существует. Попробуйте воспользоваться поиском:', 'monte' ); ?></p>

					<?php
					get_search_form();

					// the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<?php
					/* translators: %1$s: smiley */
					$monte_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'monte' ), convert_smilies( ':)' ) ) . '</p>';
					// the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$monte_archive_content" );

					// the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
