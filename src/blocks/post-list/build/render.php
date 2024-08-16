<?php
if (!empty($attributes['title']))
	$display_title = $attributes['title'];
else
	$display_title = '';

$posts = get_posts(array(
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
	'post_status' => 'publish'
));

?>
<div <?php echo get_block_wrapper_attributes(); ?>>
	<div class='posts-container'>

		<?php
		foreach ($posts as $key => $post) {
		?>
			<div class='post-container'>

				<img class='post-thumbnail' src='<?php echo get_the_post_thumbnail_url($post->ID) ?>'>

				<div class='post-title'>
					<h3 class='title'>
						<?php echo $post->post_title ?>
					</h3>
				</div>

				<div class='hidden text'>
					<div class='content'>
						<?php echo $post->post_content ?>
					</div>
				</div>
			</div>
		<?php
		}
		?>
	</div>
</div>