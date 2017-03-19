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

		<!-- CATALOG HEADER -->
		<nav id="catalog-header" >
			<div class="container test">
				<p><a href="http://localhost:8888/clients/promotionstore/wordpress/catalog">Order a Free Catalog</a></p>
				<p><a href="http://localhost:8888/clients/promotionstore/wordpress/cart"><span>Log in</span> | <span>Cart</span></a></p>
			</div>
		</nav>

	<!-- SEARCH HEADER -->
		<nav id="search-header">
			<div class="container test">
				<a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="http://localhost:8888/clients/promotionstore/wordpress/wp-content/uploads/2017/02/logo.png"></a>

				<form class="form-inline my-2 my-lg-0 hidden-md-down">
					<input class="form-control mr-sm-2" type="text" placeholder="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
				<a href="http://localhost:8888/clients/promotionstore/wordpress/phone"><img class="hidden-sm-down" src="http://localhost:8888/clients/promotionstore/builds/development/images/phone.jpg" alt="" /></a>
			</div>
		</nav>

		<!-- BS NAVIGATION -->
		    <nav id="regular-navigation" class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
<div class="container test">
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		      <!-- <a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="http://localhost:8888/clients/promotionstore/wordpress/wp-content/uploads/2017/02/logo.png"></a> -->

		      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
		        <ul class="navbar-nav mr-auto">
		          <!-- 1 -->
		          <li class="nav-item dropdown active">
		            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
		            <div class="dropdown-menu">
		              <a class="dropdown-item" href="http://localhost:8888/clients/promotionstore/wordpress/shop/">Rental and Purchase</a>
		              <a class="dropdown-item" href="http://localhost:8888/clients/promotionstore/wordpress/shop/">Insurance</a>
		              <a class="dropdown-item" href="http://localhost:8888/clients/promotionstore/wordpress/quote/">Request a quote</a>
		              <a class="dropdown-item" href="http://localhost:8888/clients/promotionstore/wordpress/info-form/">Info form</a>
		            </div>
		          </li>
		          <!-- 2 -->
		          <li class="nav-item dropdown">
		            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Options</a>
		            <div class="dropdown-menu">
		              <a class="dropdown-item" href="#options">Custom Decals</a>
		              <a class="dropdown-item" href="#options">Base Stock</a>
		              <a class="dropdown-item" href="#options">Base Custom</a>
		              <a class="dropdown-item" href="#options">Stand Stock</a>
		              <a class="dropdown-item" href="#options">Stand Custom</a>
		              <a class="dropdown-item" href="#options">Tabletop Stand Stock</a>
		              <a class="dropdown-item" href="#options">Tabletop Stand Custom</a>
		              <a class="dropdown-item" href="#options">Custom Signs Full Stand</a>
		              <a class="dropdown-item" href="#options">Custom Signs Tabletop Stand</a>
		              <!-- <div class="dropdown-divider"></div>
		              <a class="dropdown-item" href="#about">Company Info</a> -->
		            </div>
		          </li>
		          <!-- 3 -->
		          <li class="nav-item dropdown">
		            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Company Info</a>
		            <div class="dropdown-menu">
		              <a class="dropdown-item" href="#ourabout">About Us</a>
									<a class="dropdown-item" href="http://www.promotionstore.com/customer-support.htm">Contact Us</a>
									<a class="dropdown-item" href="http://www.promotionstore.com/payment-options.html">Payment Options</a>
									<a class="dropdown-item" href="http://www.promotionstore.com/order-tracking.htm">Order Tracking</a>
									<a class="dropdown-item" href="http://www.promotionstore.com/submitdisclaimer.html">Privacy Policy</a>
									<a class="dropdown-item" href="http://www.PromotionStore.com">Social Media</a>

		              <!-- <div class="dropdown-divider"></div> -->
		            </div>
		          </li>
		          <!-- 4 -->
		          <li class="nav-item dropdown">
		            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Essentials</a>
		            <div class="dropdown-menu">
		              <a class="dropdown-item" href="http://promotionstore.com/join_mailing_list.html">Free Newsletter</a>
		              <a class="dropdown-item" href="http://www.promotionstore.com/shipping-disclaimer.html">Shipping Disclaimer</a>
		              <a class="dropdown-item" href="http://localhost:8888/clients/promotionstore/wordpress/site-map">Site Map</a>
		              <a class="dropdown-item" href="#ourfaq">FAQ</a>
		              <a class="dropdown-item" href="http://www.prize-vault-prize-safe.com/PrizeSafe_LED_Specs_artwork.pdf">Technical Specs Deluxe</a>
		              <a class="dropdown-item" href="http://www.prize-vault-prize-safe.com/PrizeSafe_LED_Specs_artwork.pdf">Technical Specs Insurance</a>
		              <a class="dropdown-item" href="http://localhost:8888/clients/promotionstore/wordpress/warranty-information/">Warranty Information</a>
									<a class="dropdown-item" href="http://www.promotionstore.com/order-tracking.htm">Order Tracking</a>
		            </div>
		          </li>
		          <!-- 5 -->
							<li class="nav-item dropdown">
		            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ideas</a>
		            <div class="dropdown-menu">
		              <a class="dropdown-item" href="http://localhost:8888/clients/promotionstore/wordpress/blog/">Blog</a>
		              <a class="dropdown-item" href="http://localhost:8888/clients/promotionstore/wordpress/marketing-faq/">Marketing FAQ</a>
									<a class="dropdown-item" href="http://promotionstore.com/join_mailing_list.html">Free Newsletter</a>
									<a class="dropdown-item" href="http://localhost:8888/clients/promotionstore/wordpress/gallery/">Photo Gallery</a>
									<a class="dropdown-item" href="http://localhost:8888/clients/promotionstore/wordpress/custom-branding/">Custom Branding</a>
									<a class="dropdown-item" href="http://localhost:8888/clients/promotionstore/wordpress/custom-displays/">Custom Displays</a>

		            </div>
		          </li>
		          <!-- 6 -->
		          <li class="nav-item">
		            <a class="nav-link" href=" http://www.promotionstore.com/#form">Free Catalog</a>
		          </li>
		          <!-- 7 -->
		          <li class="nav-item">
		            <a class="nav-link" href=" http://www.money-machine-cash-cube.com/monthly-specials/">Monthly Specials</a>
		          </li>
		        </ul>

		      </div>
		      </div>

		    </nav> <!-- end BS navigation -->






	</header>
	<!-- #masthead -->

	<!-- <div id="content" class="site-content"> -->
