<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Yukon Collective - Studio Bergini
 * @since Yukon Collective - Studio Bergini 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="author" content="Jac Prada - Yukon Collective">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script>(function(){document.documentElement.className='js'})();</script>
	
	<?php wp_head(); ?>

	<?include(locate_template('partials/favicons.php'));?>
</head>

<body <?php body_class(); ?>>

	<!--   Animation Block -->
	<div class="intro">
	  <h1 class="intro-studio">Studio</h1>
	  <h1 class="intro-bergini">Bergini</h1>
	</div>

	<!--   Header-Navigation Block -->
	<header> 
	  <nav class="main-navigation">
	  	<!--   Logo & Arrow -->
	    <ul class="left-link-list">
	      <li class="home-item"><a class="menu-link home-link" href="#">Studio Bergini</a></li>
	      <li class="arrow-item"><a class="menu-link menu-arrow" href="#">&#8594;</a></li>
	    </ul>
	    <!--   Image Information (Full Size) -->
	    <ul class="center-link-list">
	      <li class="center-item"><a class="menu-link selected-link" href="#">Selected work</a></li>
	      <li class="center-item"><a class="menu-link archive-link" href="#">Archive</a></li>
	    </ul>
	    <!--   Image Information (Full Size) -->
	    <ul class="right-link-list">
	      <li class="right-item"><a class="menu-link slider-info" href="#"></a></li>
	    </ul>
	  </nav>
	</header>

	<!--   Main Block -->
	<main>

	  <!--   Project Sections Block -->
	  <div class="centered">