<?php

$is_full_width = get_field('full_width_text_block');
$bg_color = (get_field('bg_color_text_block') !== '') ? get_field('bg_color_text_block') : false;
$content = get_field('content_text_block') !== '' ? get_field('content_text_block') : false;
$text_domain = get_theme_mod('text-domain');
?>

<div class="<?php echo $text_domain; ?>-text-block text-block-container <?php if(!$is_full_width):?>container<?php endif; ?>" style="background: <?php if($bg_color) {echo $bg_color;} ?>" >
	<div class="row">
		<div class="col-12">
			<div class="text-block-content">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
</div>