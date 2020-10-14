<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package montenegro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon/fav.png" type="image/png">
	
	<meta name="theme-color" content="#4cae9f"> 
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part('template-parts/popup-modal');?>

<div id="page" class="site belarus">
	<div class="header-top">
		<div class="container">
			<a href="<?php echo home_url('/');?>" class="logo"></a>
			<div class="hamburger">
				<span class="hamburger-top"></span>
				<span class="hamburger-middle"></span>
				<span class="hamburger-bottom"></span>
			</div>
			<?php main_menu();?>
		</div>
	</div>
	<header class="header" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('header_bg'), 'full')[0]?>);">
	    <!-- <div class="container"> -->

	    	<div class="header-baner">
	    		<!-- <div class="container"> -->
	    			<div class="header-baner__block-row">

							<div class="header-baner__text">

								<div class="header-content">
	        				<div class="header-content__date">
	          				<span class="color-orange">
											<?php echo carbon_get_the_post_meta("tur_data");?>
			  						</span>
	          					<?php echo carbon_get_the_post_meta("tur_year");?> <br> <?php echo carbon_get_the_post_meta("tur_where");?>
	        				</div>
	        				<div class="header-content__live">
	          				<?php echo carbon_get_the_post_meta("live_tur");?>
	        				</div>
	        				<div class="header-content__update">
	         				 Мастер-класс
	          				<span># Доски Садху</span>
	          			Загляни в глубь себя <br> 
	        				</div>
	        				<div class="header-content__live">
	         				 познаем себя через боль
	        				</div>
	      				</div>
							</div>
							<div class="header-baner__image">

			<div class="header-baner__item baner__item-01 baner__item-bot" style="background-image: url(<?php echo get_template_directory_uri()?>/img/01.jpg)"></div>
			<div class="header-baner__item baner__item-02 baner__item-top" style="background-image: url(<?php echo get_template_directory_uri()?>/img/02.jpg)"></div>
			<div class="header-baner__item baner__item-03 baner__item-bot" style="background-image: url(<?php echo get_template_directory_uri()?>/img/03.jpg)"></div>
			<div class="header-baner__item baner__item-04 baner__item-top" style="background-image: url(<?php echo get_template_directory_uri()?>/img/04.jpg)"></div>
			<div class="header-baner__item baner__item-05 baner__item-bot" style="background-image: url(<?php echo get_template_directory_uri()?>/img/05.jpg)"></div>
			
		</div>

		</div>

		<!-- </div> -->
	</div>

	    <!-- </div> -->
	  </header>

	<div id="content" class="site-content site-content__boards">
