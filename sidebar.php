<!-- Return back to home page -->



<div id="nav_bar" class="template-col pos-fixed">

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

	<!--<div class="nav-icon nav-font" onclick="expandNavigation();showPageList();showPages()">
		<span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
	</div>
	<div class="nav-icon nav-font">
		<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
	</div>
	<div class="nav-icon nav-font">
		<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
	</div>-->
</div>


<!-- Navigation to Pages
<div id="page_navigation" class="hide template-col">
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-3 col-sm-2 text-center" onclick="hideNavigation()">
				<a href="<?php echo get_bloginfo( 'wpurl' );?>">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/amlogo.png" class="full-width home-link"/>
				</a>
			</div>
		</div>
	</div>
</div> -->

