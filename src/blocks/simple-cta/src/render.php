<?php
if (!empty($attributes['ctaTitle']))
	$display_title = $attributes['ctaTitle'];
else
	$display_title = '';

if (!empty($attributes['ctaParagraph']))
	$display_paragraph = $attributes['ctaParagraph'];
else
	$display_paragraph = '';

if (!empty($attributes['ctaImageURL']))
	$display_image = '<img src="' . esc_url($attributes['ctaImageURL']) . '" alt="Imagem" />';
else
	$display_image = '';
?>

<div <?php echo get_block_wrapper_attributes(); ?>>
	<div class='title-container'>
		<h1 class='title block-title'><?php echo esc_html_e($display_title) ?></h1>
	</div>

	<div class='columns'>
		<div class='text-container'>
			<div class='text'>
				<?php echo wp_kses_post($display_paragraph) ?>
			</div>

			<div class='button-container'>
				<?php echo $content ?>
			</div>
		</div>

		<div class='image-container'>
			<?php echo $display_image ?>
		</div>
	</div>
</div>