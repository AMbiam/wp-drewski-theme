<style>
	/*Theme primary and Secondary colors
	bg = background
	fc = font color
	ac = Accent Color
	brdr = Border
	*/
	.theme-primary-bg{ background-color: <?= $primary_color ?>; }
	.theme-secondary-bg{ background-color: <?= $secondary_color ?>; }
	.theme-accent-bg{ background-color: <?= $accent_color ?>; }
	.theme-primary-fc{ color: <?= $primary_color ?>; }
	.theme-secondary-fc{ color: <?= $secondary_color ?>; }
	.theme-accent-fc{ color: <?= $accent_color ?>; }
	.theme-primary-brdr{ color: <?= $primary_color ?>; }
	.theme-secondary-brdr{ color: <?= $secondary_color ?>; }
	.theme-accent-brdr{ color: <?= $accent_color ?>; }


	a{text-decoration: none;color: <?= $secondary_color ?>;}
	a:hover{text-decoration: none;color: <?= $primary_color ?>;}

	.nav-tab{
		background-color: <?= $primary_color ?>;
	}

	.nav-tab:hover{
		background-color: <?= $accent_color ?>;
	}

	.page_navigation:hover { background-color: <?= $accent_color ?>; }

	.nav-link,
	.nav-link:visited,
	.vertical-top-menu li a,
	.horizontal-top-menu li a,
	.footer-menu li a{
		text-decoration: none;
		color: <?= $secondary_text ?>;
	}

	.nav-link:hover,
	.nav-link:active,
	.vertical-top-menu li a:hover,
	.horizontal-top-menu li a:hover,
	.footer-menu li a:hover{
		text-decoration: none;
		color: <?= $primary_text ?>;
	}
</style>