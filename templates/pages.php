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
	$pages = get_pages($args);
?>
<div id="pages" class="container-fluid hide">
	<div class="row">
		<div class="col-sm-4">
			<h1 class="header-lg theme-accent-fc"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages</h1>
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
				<?php for($x=1; $x<=3; $x++): ?>
					<div class="col-sm-4 body-text">
						<div class="navi-item" ng-repeat="page in pagesL<?= $x ?>">
							<div class="page_navigation" ng-class="{'theme-primary-bg': pagesL<?= $x ?>.length <= 1, 'theme-secondary-brdr border': pagesL<?= $x ?>.length > 1}">
								<div class="row full-width no-margin">
									<div class="col-xs-10">
										<a href="{{page.url}}" class="page-link left-padding-sm" ng-class="{'alt-url': pagesL<?= $x ?>.length <= 1}">
										    {{page.dName}}
										</a>
									</div>
									<div class="col-xs-2" ng-if="page.children">
										<input class="nav-tab" type="button" value="+" ng-click="display<?= ($x+1) ?>(page.id)" ng-if="pagesL<?= $x?>.length > 1"/>
										<?php if(1 == $x): ?>
											<input class="nav-tab" type="button" value="-" ng-click="display<?= $x?>(page.id)" ng-if="pagesL<?= $x?>.length <= 1"/>
										<?php else: ?>
											<input class="nav-tab" type="button" value="-" ng-click="display<?= $x?>(page.parentId)" ng-if="pagesL<?= $x?>.length <= 1"/>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</navigate>
	</div>
</div>