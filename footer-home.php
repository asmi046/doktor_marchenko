<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package montenegro
 */

?>

	</div><!-- #content -->

	  <footer class="footer">
	    <div class="container">
	      <div class="footer-logo" style="background-image: url(<?php echo get_template_directory_uri()?>/img/home-logo.svg)"></div>
	      <div class="footer-social">
	        <div class="footer-title">Мы в соцсетях:</div>
	        <ul class="ul-clean">
	          <li><a href="<?php echo carbon_get_theme_option('monte_insta');?>" style="background-image: url(<?php echo get_template_directory_uri()?>/img/instagram-white.svg)"></a></li>
	          <li><a href="<?php echo carbon_get_theme_option('monte_vk');?>" style="background-image: url(<?php echo get_template_directory_uri()?>/img/vk-white.svg)"></a></li>
	        </ul>
	      </div>
	      <div class="footer-contacts">
	        <div class="footer-title">По всем вопросам обращайтесь:</div>
	        <a href="mailto:weerw@sdf.ru">mail</a>
	        <ul class="ul-clean">
	          <li><a href="<?php echo carbon_get_theme_option('monte_telegram');?>" style="background-image: url(<?php echo get_template_directory_uri()?>/img/telegram-white.svg)"></a></li>
	          <li><a href="<?php echo carbon_get_theme_option('monte_whatsapp');?>" style="background-image: url(<?php echo get_template_directory_uri()?>/img/whatsapp-white.svg)"></a></li>
	        </ul>
	      </div>
	    </div>
	  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
