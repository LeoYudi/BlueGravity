<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div id="world-container" <?php echo get_block_wrapper_attributes(); ?>>
	<div class='menu-item'>
		<a href="#" target="_blank">
			<span class="dashicons dashicons-instagram"></span>
		</a>
	</div>

	<div class='menu-item'>
		<a href="#" target="_blank">
			<span class="dashicons dashicons-linkedin"></span>
		</a>
	</div>

	<div class='menu-item'>
		<a href="#" target="_blank">
			<span class="dashicons dashicons-facebook"></span>
		</a>
	</div>

	<img id="world" src="
		<?php echo get_site_url() . '/wp-content/themes/bluegravity/assets/images/earth.svg'; ?>
	">

	<div class='click-me'>
		<div class='top-edge'>
			<img
				src='<?php echo get_site_url() . '/wp-content/themes/bluegravity/assets/images/top-edge.svg' ?>'>
		</div>
		<h2>
			Click here
		</h2>
		<div class='bottom-edge'>
			<img
				src='<?php echo get_site_url() . '/wp-content/themes/bluegravity/assets/images/bottom-edge.svg' ?>'>
		</div>
	</div>
</div>