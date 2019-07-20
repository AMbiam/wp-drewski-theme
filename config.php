<?php
	/*Paths to Assets*/
	define("CSS_STYLES", get_bloginfo('template_directory') . "/styles/");
	define("SCRIPTS", get_bloginfo('template_directory') . "/scripts/");
	define("IMG_ASSETS", get_bloginfo('template_directory') . "/assets/");



	/*Environment Variables*/
	$primary_color = get_theme_mod( 'primary_color' );
	$secondary_color = get_theme_mod( 'secondary_color' );
	$accent_color = get_theme_mod( 'accent_color' );
	$primary_text = get_theme_mod( 'primary_text_color' );
	$secondary_text = get_theme_mod( 'secondary_text_color' );