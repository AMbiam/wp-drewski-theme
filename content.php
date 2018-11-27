<div class="blog-post">
	<h2 class="header-dark-lg"><?php the_title(); ?></h2>
	

 <?php the_content(); ?>
 	<?php if(!is_page()): ?>
		<p class="blog-post-meta">
			 Published: <?php the_date();?>
		</p>
	<?php endif; ?>
</div><!-- /.blog-post -->