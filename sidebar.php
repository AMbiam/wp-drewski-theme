<!-- Return back to home page -->
<div id="nav_bar" class="template-col pos-fixed hidden-xs primary-bg">

	<div id="vertical-logo" class="home-link">
		<a href="<?php echo get_bloginfo( 'wpurl' );?>">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/amlogo-white.png" class="full-width"/>
		</a>
	</div>
	<div id="close-button" class="text-center hide" onclick="clearWindow();renderView()">
		<span class="glyphicon glyphicon-remove nb-icon" aria-hidden="true"></span>
	</div>

	<div class="tp-large"></div>

	<!-- Navigation Tabs -->
	<div class="container-fluid">
		<div class="row nav-tab" onclick="expandNavigation();showPageList();showSearch()">
			<div class="col-xs-4">
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			</div>
			<div class="col-xs-8">
				<p>Find</p>
			</div>
		</div>
		<div class="row nav-tab" onclick="clearWindow();expandNavigation();showPageList();showPages()">
			<div class="col-xs-4">
				<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
			</div>
			<div class="col-xs-8">
				<p>Pages</p>
			</div>
		</div>
		<div class="row nav-tab" onclick="clearWindow();expandNavigation();showPageList();showPosts()">
			<div class="col-xs-4">
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			</div>
			<div class="col-xs-8">
				<p>Blogs</p>
			</div>
		</div>
	</div>
</div>


<!-- Top Navigation -->
<div id="vert_nav_bar" class="template-row hidden-sm hidden-md hidden-lg primary-bg">
	<div class="row">
		<div class="col-xs-2">
			<div id="horizontal-logo" class="home-link">
				<a href="<?php echo get_bloginfo( 'wpurl' );?>">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/amlogo-white.png" class="full-width"/>
				</a>
			</div>
			<div id="horizontal-close-button" class="text-center hide" onclick="clearWindow();renderView()">
				<span class="glyphicon glyphicon-remove nb-icon-horizontal" aria-hidden="true"></span>
			</div>
		</div>

		<!-- Navigation Tabs -->

		<div class="col-xs-offset-1 col-xs-3 nav-tab" onclick="expandNavigation();showPageList();showSearch()">
			<div class="col-xs-4">
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			</div>
			<div class="col-xs-8">
				<p>Find</p>
			</div>
		</div>
		<div class="col-xs-3 nav-tab" onclick="clearWindow();expandNavigation();showPageList();showPages()">
			<div class="col-xs-4">
				<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
			</div>
			<div class="col-xs-8">
				<p>Pages</p>
			</div>
		</div>
		<div class="col-xs-3 nav-tab" onclick="clearWindow();expandNavigation();showPageList();showPosts()">
			<div class="col-xs-4">
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			</div>
			<div class="col-xs-8">
				<p>Blogs</p>
			</div>
		</div>

	</div>
</div>

