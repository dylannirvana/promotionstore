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

<!-- NAVIGATION -->

<!-- WP NAVIGATION with BS added in -->
	<!-- <nav id="site-navigation" class="main-navigation navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse" role="navigation">
		<button class="menu-toggle navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="primary-menu" aria-expanded="false">
			<?php esc_html_e( 'Primary Menu', 'promotionstoretheme' ); ?></button>

			<a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="http://localhost:8888/clients/promotionstore/wordpress/wp-content/uploads/2017/02/logo.png"></a>
		<div class="collapse navbar-collapse" id="primary-menu">
			<div class="navbar-nav mr-auto">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</div>
		</div>
	</nav> -->

		<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

			<!-- WORDPRESS -->
			<a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="http://localhost:8888/clients/promotionstore/wordpress/wp-content/uploads/2017/02/logo.png"></a>
			<!-- <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a> -->
			<!-- <a class="navbar-brand" href="#"><img src=""</a> -->

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">

				<?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'nav navbar-nav',
          'fallback_cb'    => '__return_false',
          'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'          => 2,
          'walker'         => new bootstrap_4_walker_nav_menu()
       ) );
    ?>


				<!-- SEARCH FORM BOOTSTRAP -->
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
		<!-- END NAVIGATION -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">


		    <!-- JUMBOTRON + CTA -->
				<div class="jumbotron">
					<?php the_header_image_tag(); ?>

						<div class="jumbotron-copy">
							<h1 class="display-3">Prizesafe</h1>
							<p>Become a satisfied customer</p>
							<p><a class="btn btn-primary btn-lg" href="#" role="button">Buy it now!</a></p>
						</div>
		    </div> <!-- end jumbotron -->

		    <div class="container">
