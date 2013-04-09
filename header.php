<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
<title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="http://yui.yahooapis.com/3.6.0/build/cssreset/cssreset-min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico">
<link rel="apple-touch-icon" href="<?php bloginfo('url'); ?>/apple-touch-icon.png">
<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
<link rel="alternate" type="application/atom+xml" title="RSS Feed" href="<?php bloginfo('atom_url'); ?>">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="header-nav">
<nav><?php wp_nav_menu(array('theme_location' => 'nav')); ?></nav>
</div>
<!-- /#header-nav -->