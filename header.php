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
<div style="display: none;">
    <div class="box-modal" id="messgeModal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class = "modalline" id = "lineIcon">
    </div>
    
    <div class = "modalline" id = "lineMsg">
    </div>
    </div>
</div>
<div style="display: none;">
    <div class="box-modal" id="order-modal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class = "modalline" id = "lineIcon">
        	<h2 class="section-title">Обратный звонок</h2>
        	<form action="" class="main-form">
		          <input type="email" placeholder="Ваш электронный адрес" name="email">
		          <input type="text" placeholder="Ваше Имя" name="name">
		          <input type="tel" placeholder="Ваш телефон" name="tel">
		          <a href="#" class="button uniSendBtn">Перезвоните мне</a>
		          <div class="way-item__block">
		            <input type="checkbox" checked="checked" id="policy-input-2">
		            <label for="policy-input-2">Я согласен на <a href="<?php echo get_permalink(3)?>" class="tdu">обработку персональных данных</a> и с договором оферты</label>
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
			<a href="<?php echo home_url('/');?>" class="logo"></a>
			<div class="hamburger">
				<span class="hamburger-top"></span>
				<span class="hamburger-middle"></span>
				<span class="hamburger-bottom"></span>
			</div>
			<?php main_menu();?>
		</div>
	</div>
	<header class="header header__khara" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('header_bg'), 'full')[0]?>);">
	    <div class="container">
	      <div class="header-content">
	        <div class="header-content__date">
	          <span class="color-orange"><?php echo carbon_get_the_post_meta("tur_data");?></span>
	          <?php echo carbon_get_the_post_meta("tur_year");?> <br> <?php echo carbon_get_the_post_meta("tur_where");?>
	        </div>
	        <div class="header-content__live">
	        	<?php echo carbon_get_the_post_meta('live_tur');?>
	        </div>
	        <div class="header-content__update">
	          Живой мастер-класс
	          <span># ПерепроШивка</span>
	          Твоя Жизнь <br> уже никогда не будет прежней…
	        </div>
	        <div class="header-content__live">
	          
	        </div>
	      </div>
	    </div>
	  </header>

	<div id="content" class="site-content">
