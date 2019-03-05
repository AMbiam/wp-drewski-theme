<?php
add_theme_support( 'post-thumbnails' );
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- WordPress Settings-->
		<title><?php echo get_bloginfo( 'name' ); ?></title>
		<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>" />


		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Style Sheets -->
		<link href="<?= CSS_STYLES; ?>portfolio.css" rel="stylesheet">
		<link href="<?= CSS_STYLES; ?>font.css" rel="stylesheet">
		<link href="<?= CSS_STYLES; ?>colours.css" rel="stylesheet">
		<link href="<?= CSS_STYLES; ?>animate.css" rel="stylesheet">
		

		<script src="<?php echo get_bloginfo('template_directory'); ?>/portfolio.js"></script>
		
		<link href="https://fonts.googleapis.com/css?family=Audiowide|Raleway" rel="stylesheet">

		<!-- Angular JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
		<script src="<?= SCRIPTS; ?>navigation.js"></script>
		<script src="<?= SCRIPTS; ?>angular-animate.min.js"></script>

		<?php wp_head();?>
	</head>
	<body>