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

		
		<link href="<?php echo get_bloginfo('template_directory'); ?>/portfolio.css" rel="stylesheet">
		<script src="<?php echo get_bloginfo('template_directory'); ?>/portfolio.js"></script>
		
		<link href="https://fonts.googleapis.com/css?family=Audiowide|Raleway" rel="stylesheet">
		
		<?php wp_head();?>
	</head>
	<body style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/assets/Portrait-bg-01.png)">