<?php
if (!empty($attributes['heroTitle']))
	$display_title = $attributes['heroTitle'];
else
	$display_title = '';

if (!empty($attributes['heroImage']))
	$display_image = $attributes['heroImage'];
else
	$display_image = '';
?>


<div style='background-image: url(<?php echo esc_html_e($display_image) ?>);' <?php echo get_block_wrapper_attributes(); ?>>
	<div class='dark-filter'>
		<div class='title-container'>
			<div class='top-edge'>
				<img
					src='<?php echo get_site_url() . '/wp-content/themes/bluegravity/assets/images/top-edge.svg' ?>'>
			</div>

			<h1 class='hero-title'>
				<?php echo esc_html_e($display_title) ?>
			</h1>

			<div class='bottom-edge'>
				<img
					src='<?php echo get_site_url() . '/wp-content/themes/bluegravity/assets/images/bottom-edge.svg' ?>'>
			</div>
		</div>
	</div>
</div>