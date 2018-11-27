<?php get_header(); ?>
	<div id="stripe">
		<?php if(!is_page()): ?>
			<!-- Stripe for Posts only-->
				<div class="row">
					<div id="stripe-color" class="col-xs-offset-10 col-xs-1">
				
					</div>
				</div>
		<?php endif; ?>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div id="navigation" class="col-sm-1">
				<?php get_sidebar(); ?>
			</div>
			<div id="view" class="col-sm-11 template-col">
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
						<div class="col-sm-offset-3 col-xs-4 text-center">
							<h1 class="header-dark-lg"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages</h1>
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

							<div>
								<a href="<?php echo get_page_link($page->ID)?>" class="page-link">
								    <?php echo $page->post_title; ?>
								</a>
							</div>
							<?php $count++; ?>
						<?php endforeach; ?>
						</div> 
						<!-- Closing div for Pages -->
					</div>
				</div>


				<!-- Blog Posts -->
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
					$posts = get_posts();
					$posts_ps = ceil(count($posts)/3); 

				?>
				<div id="posts" class="hide">
					<div class="row">
						<div class="col-sm-offset-3 col-xs-4 text-center">
							<h1 class="header-dark-lg"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Posts</h1>
						</div>
					</div>
					<?php $count = 0; ?>
					<div class="row">
						<!-- Opening div for Pages -->
						<div class="col-md-4 body-text">
						<?php foreach($posts as $post): ?>
							<?php if($posts_ps == $count ||  $count == ($posts_ps*2))  : ?>
								<!-- Create New Section -->
								</div>
								<div class="col-md-4 body-text">
							<?php endif; ?>

							<div>
								<a href="<?php echo get_page_link($post->ID)?>" class="page-link">
								    <?php echo $post->post_title; ?>
								</a>
								<?php echo date("M d, Y", strtotime($post->post_date)); ?>
							</div>
							<?php $count++; ?>
						<?php endforeach; ?>
						</div> 
						<!-- Closing div for Pages -->
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>