<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php 
	$thumb = get_post_thumbnail_id( $post->ID );
	$image = wp_get_attachment_image_src($thumb,'single-post-thumbnail'); 

?>

	<div  class="splash" style="background-image: url('<?php echo $image[0]; ?>')">
<?php else: ?>
	<div class="splash">
<?php endif; ?>
	<div class="splash-cover"></div>

	<div class="splash-text">
		<p class="blog-post-meta secondary-font-color subheader-lg ng-bg-3">
			Published: <?php the_date();?>
		</p>
	</div>

</div>	


<div id="wp-main-content">
	<div class="row">
		<div class="col-sm-offset-1 col-sm-10 basic-border ng-border-3">
			<?php the_content(); ?>
		</div>
	</div>
</div>
