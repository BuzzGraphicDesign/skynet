<?php

// check if to use is only BG
$hero_bg = get_field('hero_bg') != '' ? get_field('hero_bg') : false;

if ($hero_bg) {
	
	$hero_bg_title = get_field('hero_bg_title');
}
else {
	// get the parent repeater field
	$repeater_rows = is_array(get_field('hero_repeater')) ? get_field('hero_repeater') : false;
	$rows = false;
	
	if(is_array($repeater_rows)) {
		$rows_quantity = count($repeater_rows);
		$rows = true;

		// if only one row just get the data straight
		if ($rows_quantity === 1) {
			$image_url = $repeater_rows[0]['hero_image_subfield']['url'];
			$hero_img_title = $repeater_rows[0]['hero_image_title'];
			$text_alignment = $repeater_rows[0]['hero_image_text_align'];
		}

	}
}

// Text Domain from Theme settings php page
$text_domain = get_theme_mod('text-domain');
// Hero Height from Options page
$hero_height = get_field('hero_height', 'option').'px';
//$container = get_field('container_width', 'option') !== '' ? get_field('container_width', 'option') . 'px' : 'container';
$container = 'container';



//var_dump(get_theme_mod('container-size'));exit;
?>

<div class="<?php echo $text_domain; ?>-hero-block hero-block hero" style="height: <?php echo $hero_height?>">
	<div class="row">
		<div class="col-12">
			<div class="hero-block-inner">
				<?php if($hero_bg) : ?>
					<!-- Only Color -->
					<div class="hero-bg" style="background: <?php echo $hero_bg ?>">
						<div class="hero-bg-title">
							<?php echo __($hero_bg_title, $text_domain); ?>
						</div>
					</div>
				<?php elseif($rows) : ?>
					<?php if($rows_quantity === 1) : ?>

						<?php $text_alignment = text_alignment_flex($text_alignment);?>

						<!-- Only one Image don't need Slider -->
						<div class="hero-img" style="background-image: url('<?php echo $image_url; ?>'); background-position: center; background-repeat: no-repeat;
						background-size: cover;">
							<!-- If not aligned to center keep text in the container width -->
							<div class="<?php echo $container; ?>">
								<div class="hero-img-title" style="justify-content: <?php echo $text_alignment; ?>">
									<?php echo __($hero_img_title, $text_domain); ?>
								</div>
							</div>
						</div>
					<?php else : ?>
						<!-- Make a Slider -->
						<div class="hero-img-slider-container">
							<?php foreach($repeater_rows as $row_data ) : ?>
		
							<?php $text_alignment = text_alignment_flex($row_data['hero_image_text_align']);?>

								<div class="hero-slider">
									<div class="hero-slider-item" style="background-image: url('<?php echo $row_data['hero_image_subfield']['url']; ?>');background-repeat: no-repeat;background-size: cover;background-position: center;">
										<div class="<?php echo $container; ?>">
											<div class="hero-slider-item-title" style="justify-content: <?php echo $text_alignment; ?>">
												<?php echo __($row_data['hero_image_title'], $text_domain);?>
											</div>
										</div>
									</div>									
								</div>

							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>