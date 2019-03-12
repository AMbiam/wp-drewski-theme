<?php
	$args = array(
		'sort_order' => 'asc',
		'sort_column' => 'post_title',
		'hierarchical' => 1,
		'exclude' => '',
		'include' => '',
		'meta_key' => '',
		'meta_value' => '',
		'authors' => '',
		'child_of' => 0,
		'parent' => -1,
		'exclude_tree' => '',
		'number' => '',
		'offset' => 0,
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 30
	);

	/*ps: per section*/
	$posts = get_posts($args);
	$posts_ps = ceil(count($posts)/3); 

?>
<div id="posts" class="hide">
	<div class="row">
		<div class="col-sm-4">
			<h1 class="header-lg ng-color-2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Blog</h1>
		</div>
	</div>

		<!-- Opening div for Posts -->
		<?php foreach($posts as $key => $post): ?>
			<?php if($key % 4 == 0): ?>
				<div class="row">
			<?php endif; ?>
			<?php
				$thumb = get_post_thumbnail_id( $post->ID );
	  			$image = wp_get_attachment_image_src($thumb,'single-post-thumbnail'); 
	  		?>
	  		<div class="col-sm-3 body-text border-sm no-padding ng-border-white">
	  			<!-- Start Styling for Post Object -->
				<div style="background-image: url(<?= $image[0] ?>)" class="bg-paralax ng-bg-4">
					<div class="full-width top-padding-lg bottom-padding-lg ng-bg-2 bg-cover">
						<div class="ng-bg-white three-quarter-width left-margin-md">
							<a href="<?php echo get_page_link($post->ID)?>" class="page-link left-padding-sm">
							    <?php echo $post->post_title; ?>
							</a>
						</div>
						<div class="ng-bg-4 ng-color-black three-quarter-width left-margin-md left-padding-sm">
							<?php echo date("M d, Y", strtotime($post->post_date)); ?>
						</div>
					</div>
				</div>
				<!-- End Styling for Post Object -->
			</div>
			<?php if($key % 4 == 3 || (sizeof($posts) - 1) == $key): ?>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
		<!-- Closing div for Posts -->

</div>