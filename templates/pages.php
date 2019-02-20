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
		'post_type' => 'page',
		'post_status' => 'publish'
	);

	/*ps: per section*/
	$pages = get_pages($args);
	$pages_ps = ceil(count($pages)/3); 

?>
<div id="pages" class="hide">
	<div class="row">
		<div class="col-sm-4">
			<h1 class="header-lg ng-color-4"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages</h1>
		</div>
	</div>
	<?php $count = 0; ?>
	<div class="row">
		<!-- Opening div for Pages -->
		<div class="col-md-4 body-text">
		<?php foreach($pages as $page): ?>
			<?php if($pages_ps == $count ||  $count == ($pages_ps*2))  : ?>
				<!-- Create New Section -->
				</div>
				<div class="col-md-4 body-text">
			<?php endif; ?>

				<?php
					$thumb = get_post_thumbnail_id( $post->ID );
		  			$image = wp_get_attachment_image_src($thumb,'single-post-thumbnail'); 
		  		?>
				<div style="background-image: url(<?= $image ?>)" class="bg-paralax ng-bg-4">
					<div class="full-width top-margin-small top-padding-lg bottom-padding-lg ng-bg-2 bg-cover">
						<div class="ng-bg-white three-quarter-width left-margin-md">
							<a href="<?php echo get_page_link($page->ID)?>" class="page-link left-padding-sm">
							    <?php echo $page->post_title; ?>
							</a>
						</div>
					</div>
				</div>
			<?php $count++; ?>
		<?php endforeach; ?>
		</div> 
		<!-- Closing div for Pages -->
	</div>
</div>