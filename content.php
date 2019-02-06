<div class="blog-post">
	<?php if(!is_page()): ?>
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
			<!--<h2 class="header-lg secondary-font-color"><?php the_title(); ?></h2>-->
			<p class="blog-post-meta secondary-font-color subheader-lg ng-bg-3">Published: <?php the_date();?></p>
		</div>

		</div>	
	<?php endif; ?>

	<div id="wp-main-content">
		<?php the_content(); ?>
	</div>

</div><!-- /.blog-post -->