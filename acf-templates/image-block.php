<?php 

$img = get_field('image_img_block');
$content = get_field('content_image_block');
$content_alignment = get_field('content_alignment_img_block');


// Future options
$is_overlay = false;
//var_dump($content_alignment);exit;
?>

<div class="image-block-container image-block">
	<div class="row">
		<div class="col-12">
			<!-- Image loaded as Background -->
			<div class="image-block-inner image-container" style="background: url('<?php echo $img["url"];?>'); background-repeat: no-repeat;background-size: cover; background-position: center;"></div>
			
			<!-- Content -->
			<div class="image-block-content">
				<div class="content-inner">
					<?php echo $content; ?>						
				</div>
			</div>

			<!-- Overlay -->
			<?php if($is_overlay) : ?>
				<div class="image-block-overlay"></div>
			<?php endif; ?>
		</div>
	</div>
</div>