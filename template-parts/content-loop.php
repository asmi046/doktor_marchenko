<div class="post-item">
	<a href="<?php echo get_permalink();?>" >
	<div class="post-item__photo" style="background-image: url(<?php echo get_the_post_thumbnail_url($post, "large");?>);">
		<div class="post-item__data">
			<?php $date = the_date( 'j F Y', '', '', false); 
				$arr_date = explode(' ', $date)
			?>
			<span class="post-item__data-number"><?php echo $arr_date[0]?></span>
			<span class="post-item__data-month"><?php echo $arr_date[1]?></span>
			<span class="post-item__data-year"><?php echo $arr_date[2]?></span>
		</div>
	</div>
	</a>
	<div class="post-item__content">
		<div class="post-item__content-title"><?php the_title();?></div>
		<div class="post-item__content-excerpt">
			<?php the_excerpt();?>
		</div>
		<a href="<?php echo get_permalink();?>" class="light-button light-button__inverse">Подробнее</a>
	</div>
</div>