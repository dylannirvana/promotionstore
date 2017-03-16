<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package promotionstoretheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'promotionstoretheme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">




		<!-- BS NAVIGATION -->
		    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
		      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		      <a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="http://localhost:8888/clients/promotionstore/wordpress/wp-content/uploads/2017/02/logo.png"></a>

		      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
		        <ul class="navbar-nav mr-auto">
		          <!-- 1 -->
		          <li class="nav-item dropdown">
		            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
		            <div class="dropdown-menu">
		              <a class="dropdown-item" href="#buy">Rental and Purchase</a>
		              <a class="dropdown-item" href="#insurance">Insurance</a>
		            </div>
		          </li>
		          <!-- 2 -->
		          <li class="nav-item dropdown">
		            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Options</a>
		            <div class="dropdown-menu">
		              <a class="dropdown-item" href="#options">Options</a>
		              <!-- <a class="dropdown-item" href="#options">Custom Base</a>
		              <a class="dropdown-item" href="#options">Decals</a>
		              <a class="dropdown-item" href="#options">Displays</a> -->
		              <div class="dropdown-divider"></div>
		              <a class="dropdown-item" href="#about">Company Info</a>
		            </div>
		          </li>
		          <!-- 3 -->
		          <!-- <li class="nav-item dropdown">
		            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Info</a>
		            <div class="dropdown-menu">
		              <a class="dropdown-item" href="#">About Us</a>
		              <a class="dropdown-item" href="#">Blog</a>
		              <a class="dropdown-item" href="#">Social Media</a>
		              <a class="dropdown-item" href="#">Payment Options</a>
		              <a class="dropdown-item" href="#">Shipping Disclaimer</a>
		              <a class="dropdown-item" href="#">Privacy Policy</a>
		              <a class="dropdown-item" href="#">Site Map</a>
		              <div class="dropdown-divider"></div>
		              <a class="dropdown-item" href="#">Contact Us</a>
		            </div>
		          </li> -->
		          <!-- 4 -->
		          <li class="nav-item dropdown">
		            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Essentials</a>
		            <div class="dropdown-menu">
		              <a class="dropdown-item" href="http://localhost:8888/clients/promotionstore/wordpress/ourfaq/">FAQ</a>
		              <a class="dropdown-item" href="http://localhost:8888/clients/promotionstore/wordpress/catalog/">Catalog Request</a>
		              <a class="dropdown-item" href="http://localhost:8888/clients/promotionstore/wordpress/gallery/">Gallery</a>
		              <a class="dropdown-item" href="#">Order Tracking</a>
		              <a class="dropdown-item" href="#">Order History</a>
		            </div>
		          </li>
		          <!-- 5 -->
		          <li class="nav-item active">
		            <a class="nav-link" href="index.html">Ideas <span class="sr-only">(current)</span></a>
		          </li>
		          <!-- 6 -->
		          <li class="nav-item">
		            <a class="nav-link" href="http://localhost:8888/clients/promotionstore/wordpress/newsletter/">Newsletter</a>
		          </li>
		          <!-- 7 -->
		          <li class="nav-item">
		            <a class="nav-link" href="http://localhost:8888/clients/promotionstore/wordpress/specials/">Specials</a>
		          </li>
		        </ul>
		        <!-- <form class="form-inline my-2 my-lg-0">
		          <input class="form-control mr-sm-2" type="text" placeholder="Search">
		          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		        </form> -->
		      </div>
		    </nav> <!-- end BS navigation -->






	</header>
	<!-- #masthead -->

	<!-- <div id="content" class="site-content"> -->
