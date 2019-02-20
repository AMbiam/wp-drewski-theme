<div id="nav-bar-top" class="row ng-bg-2">
	<div class="col-xs-1 no-padding">
		<!--<div id="horizontal-logo" class="home-link">
			<a href="<?php echo get_bloginfo( 'wpurl' );?>">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/amlogo-white.png" class="full-width"/>
			</a>
		</div>-->
		<div id="" class="text-center hide" onclick="">
			<span class="glyphicon glyphicon-remove nb-icon-hz" aria-hidden="true"></span>
		</div>

		<div id="horizontal-close-button" class="text-center hide" onclick="clearWindow();renderView()">
			<span class="glyphicon glyphicon-remove nb-icon-hz" aria-hidden="true"></span>
		</div>
	</div>

	<!-- Navigation Tabs -->

	<div class="col-xs-offset-2 col-xs-2 nav-tab-hz" onclick="expandNavigation();showPageList();showSearch()">
		<div class="col-xs-4">
			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		</div>
		<div class="col-xs-8">
			<p>Find</p>
		</div>
	</div>
	<div class="col-xs-2 nav-tab-hz" onclick="clearWindow();expandNavigation();showPageList();showPages()">
		<div class="col-xs-4">
			<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
		</div>
		<div class="col-xs-8">
			<p>Pages</p>
		</div>
	</div>
	<div class="col-xs-2 nav-tab-hz" onclick="clearWindow();expandNavigation();showPageList();showPosts()">
		<div class="col-xs-4">
			<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
		</div>
		<div class="col-xs-8">
			<p>Blogs</p>
		</div>
	</div>

</div>
<div class="row ng-bg-2 tp-medium">
	<div class="col-xs-0">
		<div class="home-link">
			<!--<a href="<?php echo get_bloginfo( 'wpurl' );?>">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/amlogo-white.png" class="full-width"/>
				
			</a>-->
		</div>
	</div>
	<div class="col-xs-11">
		<div class="col-xs-11">
			<p class="header-md secondary-font-color"><?php the_title(); ?></p>
		</div>
		<div class="col-xs-11">
			<p class="subheader-md color-8"><?php the_date();?></p>
		</div>
	</div>
</div>