<?php get_header(); ?>
	<!--<div id="stripe" class="container">
		<?php if(!is_page()): ?>
			<!-- Stripe for Posts only- ->
				<div class="row">
					<div class="col-xs-offset-1 col-xs-1 stripe-color">
				
					</div>
					<div class="col-xs-offset-8 col-xs-1 stripe-color">
				
					</div>
				</div>
		<?php endif; ?>
	</div>-->

	<div class="container-fluid">
		<div class="row">
			<div id="navigation" class="col-sm-12">
				<?php get_sidebar(); ?>
			</div>
			<div id="view" class="col-sm-12 template-col">
				<div id="wp_content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<!-- contents of the loop -->
					<?php
						get_template_part( 'content', get_post_format() );
					?>

					<?php endwhile; endif; ?>

				</div>
				<!-- Search -->
				<div id="search_menu" class="hide">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1 class="header-dark-lg"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Find</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 header-search">
							<center><?php get_search_form(); ?></center>
						</div>
					</div>
				</div>

				<!-- Pages -->
				<?php include('templates/pages.php'); ?>


				<!-- Blog Posts -->
				<?php include('templates/posts.php'); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>