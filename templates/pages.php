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
		//'child_of' => 0,
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
	/*$menu = wp_list_pages();
	var_dump($menu);
	die();


	$page->post_parent
	This returns parent object of the post. Make some angular magic happen.
	*/

?>
<div id="pages" class="hide">
	<div class="row">
		<div class="col-sm-4">
			<h1 class="header-lg ng-color-2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages</h1>
		</div>
	</div>
	<?php $count = 0; ?>
	<div class="row">
		<!-- Opening div for Pages -->
		<div class="col-md-4 body-text">
		<?php foreach($pages as $page): ?>
			<?php if($pages_ps == $count ||  $count == ($pages_ps*2))  : ?>
				<!-- Create New Section -->
				<!--</div>
				<div class="col-md-4 body-text">-->
			<?php endif; ?>

				<?php
					$thumb = get_post_thumbnail_id( $page->ID );
		  			$image = wp_get_attachment_image_src($thumb,'single-post-thumbnail'); 
		  		?>
				<div style="background-image: url(<?= $image[0] ?>)" class="page_navigation ng-border-2">
					<div class="full-width">
						<div class="three-quarter-width left-margin-md">
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