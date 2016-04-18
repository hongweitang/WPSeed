<?
/**
 * @author			Flurin Dürst
 * @version			1.13
 * @since			WPegg 0.1
 */
?>
<!DOCTYPE html>
<html <? language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1, user-scalable=no">
		<title><? wp_title('|', true, 'right'); ?></title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<!--===== OPEN-GRAPH TAGS =====-->
		<meta property="og:title" 			content="<? bloginfo('name'); ?>">
		<meta property="og:description" 	content="<? bloginfo('description'); ?>">
		<meta property="og:url" 			content="<? bloginfo('url'); ?>">
		<!--===== CSS =====-->
		<link rel="stylesheet" href="<? bloginfo('template_url') ?>/dist/styles/main.css">
		<!--===== FONTS =====-->
		<link href='https://fonts.googleapis.com/css?family=Bitter:400,400italic,700' rel='stylesheet' type='text/css'>
		<!--===== GOOGLE ANALYTICS =====-->
		<script>//###</script>
	</head>

	<body <? body_class('flexsite') ?>>

		<div class="wrapper">

			<div class="top">
				<a href="<?= get_bloginfo('url'); ?>"><div class="logo"></div></a>
				<div class="mobilenav_trigger" id="mobilenav_trigger"></div>
				<nav id="nav_main" class="mobilenav_hidden">
					<? wp_nav_menu([ 'container' => false, 'theme_location' => 'mainmenu' ]); ?>
				</nav>
			</div>