<?php

$full_width = get_field('content_img_block_full_width');
$alignment = get_field('content_image_block_alignment');
$image = get_field('content_image_block_image');
$content = get_field('content_image_block_content');

$img_url = $image['url'];

$text_domain = get_theme_mod('text-domain');
$container = 'container';

//var_dump($image);exit;
?>

<div class="<?php echo $text_domain; ?>-content-image-block content-image-block <?php if(!$full_width) :?> container <?php endif;?>">
	<div class="row" style="<?php if($alignment === 'content-left'){echo 'flex-direction: row-reverse';} ?>">		
		<div class="col-12 col-md-6 image-container">
			<div class="image" style="background: url('<?php echo $img_url; ?>'); height: 350px; background-repeat: no-repeat;background-size: cover; background-position: center;"></div>
		</div>
		<div class="col-12 col-md-6 content-container">
			<?php echo __($content, $text_domain); ?>
		</div>		
	</div>
</div>

