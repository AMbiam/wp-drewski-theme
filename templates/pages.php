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
	<div ng-app="myApp">
		<?php 
			$out = "";
			$first = true;
			foreach($pages as $page){
				$args = array(
					'post_parent' => $page->ID,
					'post_type'   => 'page', 
					'numberposts' => -1,
					'post_status' => 'publish' 
				);
				$children = get_children( $args );
				$children = (sizeof($children) > 0) ? true : false;

				$out .= "{
					id: " . $page->ID .",
					parentId: " . $page->post_parent .",
					dName: '" . $page->post_title ."',
					children: '" . $children ."',
					url: '" . get_page_link($page->ID) ."'
				},";
			}
		?>
		<navigate  ng-init="pages=[<?= $out ?>];display1()">
			<div class="row">
				<!-- Opening div for Pages Level 1 -->
				<div class="col-md-4 body-text">
					<div class="navi-item" ng-repeat="page in pagesL1">
						<div class="page_navigation ng-border-2">
							<div class="row">
								<div class="col-xs-8">
									<a href="{{page.url}}" class="page-link left-padding-sm">
									    {{page.dName}}
									</a>
								</div>
								<div ng-if="page.children">
									<input class="btn btn-1" type="button" value="+" ng-click="display2(page.id)" />
									<input class="btn btn-2" type="button" value="-" ng-click="display1()" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Opening div for Pages Level 2 -->
				<div class="col-md-4 body-text navi-item">
					<div class="navi-item" ng-repeat="page in pagesL2">
						<div class="page_navigation ng-border-2">
							<div class="row">
								<div class="col-xs-8">
									<a href="{{page.url}}" class="page-link left-padding-sm">
									    {{page.dName}}
									</a>
								</div>
								<div ng-if="page.children">
									<input class="btn btn-1" type="button" value="+" ng-click="display3(page.id)" />
									<input class="btn btn-2" type="button" value="-" ng-click="display2(page.parentId)" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Opening div for Pages Level 3 -->
				<div class="col-md-4 body-text">
					<div class="navi-item" ng-repeat="page in pagesL3">
						<div class="page_navigation ng-border-2">
							<div class="row">
								<div class="col-xs-8">
									<a href="{{page.url}}" class="page-link left-padding-sm">
									    {{page.dName}}
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</navigate>
	</div>
</div>