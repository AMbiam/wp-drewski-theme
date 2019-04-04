<?php get_header(); ?>
	<div class="container-fluid">

		<?php get_sidebar(); ?>

		<div id="view" class="template-col row">
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
<?php get_footer(); ?>