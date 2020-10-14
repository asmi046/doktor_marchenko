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

<div style="display: none;">
    <div class="box-modal" id="order-modal-2">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class = "modalline" id = "lineIcon">
        	<h2 class="section-title win-title">Обратный звонок</h2>
        	<form action="" class="main-form">
		          <input type="email" placeholder="Введите Ваш электронный адрес" name="email">
		          <input type="text" placeholder="Введите Ваше Имя" name="name">
		          <input type="tel" placeholder="Введите Ваш телефон" name="tel">
		          <a href="#" class="button uniSendBtn-2" data-formid="Форма на главной в шапке" data-mailmsg="Форма на главной в шапке">Перезвоните мне</a>
		          <div class="way-item__block">
		            <input type="checkbox" checked="checked" id="policy-input-22">
		            <label for="policy-input-22">Я согласен на <a href="<?php echo get_permalink(3)?>" class="tdu">обработку персональных данных</a> и с договором оферты</label>
		          </div>
	        </form>
	    </div>
    
    <div class = "modalline" id = "lineMsg">
    </div>
    </div>
</div>
<div id="page" class="site">
	<div class="header-top">
		<div class="container">
			<div class="logo"></div>
			<div class="hamburger">
				<span class="hamburger-top"></span>
				<span class="hamburger-middle"></span>
				<span class="hamburger-bottom"></span>
			</div>
			<?php main_menu();?>
		</div>
	</div>
	<div class="main-slider-wrapper">
		<div class="container">
			<div class="header-content">
				<div class="header-content__home">
					<h1 class="h1">Нина <br> Марченко</h1>
					<div class="position">психотерапевт, психиатр, <br/>гипнотерапевт, сексолог</div>
					<a href="#" class="light-button popup-modal-2 light-button-bg">Записаться на прием</a>
					<a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('monte_phone_2'))?>" class="light-button popup-modal-phone light-button-bg">Записаться на прием</a>
				</div>
			</div>
		</div>
		<div class="main-slider">
			<div id = "mainSlide1" class="main-slider__item main-slider__item1" style="background-image: url(<?php echo get_template_directory_uri();?>/img/f_1.jpg); background-position:top center;"></div>
			<div id = "mainSlide2" class="main-slider__item main-slider__item2" style="background-image: url(<?php echo get_template_directory_uri();?>/img/f_2.jpg); background-position:top center;"></div>
			<div id = "mainSlide3" class="main-slider__item main-slider__item3" style="background-image: url(<?php echo get_template_directory_uri();?>/img/f_3.jpg); background-position:top center;"></div>
		</div>
	</div>
	<!-- <header class="header">
	    <div class="container">
	      <div class="header-content">
	      	<div class="logo"></div>
	      	<div class="header-content__home">
		      	<h1 class="h1">Нина<br> Марченко</h1>
		      	<div class="position">практикующий<br> психотерапевт</div>
		      	<a href="#" class="light-button popup-modal" data-winmsg = "Получить консультацию">Получить консультацию</a>
	      	</div>
	      </div>
	    </div>
	    <div class="home-header-bg"></div>
	  </header> -->

	<div id="content" class="site-content">
