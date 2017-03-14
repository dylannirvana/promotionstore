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
              <a class="dropdown-item" href="#options">Stand</a>
              <a class="dropdown-item" href="#options">Custom Base</a>
              <a class="dropdown-item" href="#options">Decals</a>
              <a class="dropdown-item" href="#options">Displays</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Company Info</a>
            </div>
          </li>
          <!-- 3 -->
          <li class="nav-item dropdown">
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
          </li>
          <!-- 4 -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Essentials</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">FAQ</a>
              <a class="dropdown-item" href="#">Catalog Request</a>
              <a class="dropdown-item" href="#">Gallery</a>
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
            <a class="nav-link" href="#">Newsletter</a>
          </li>
          <!-- 7 -->
          <li class="nav-item">
            <a class="nav-link" href="#">Specials</a>
          </li>
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav> <!-- end BS navigation -->



    <!-- WP NAVIGATION -->
    <nav id="site-navigation" class="main-navigation" role="navigation">
    	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'promotionstoretheme' ); ?></button>
    	<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
    </nav><!-- #site-navigation -->



<!-- MODIFIED BS 2 WP -->
    <!-- this does not produce dropdowns though -->
    <!-- works with a piece of jquery to addClass to li -->
    <!-- BS WP NAVIGATION -->
    <nav id="site-navigation" class="main-navigation navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse" role="navigation">

    <!-- button -->
    	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    	</button>

    <!-- brand -->
    	<a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="http://localhost:8888/clients/promotionstore/wordpress/wp-content/uploads/2017/02/logo.png"></a>

    	<div class="collapse navbar-collapse" id="navbarsExampleDefault">

    <!-- this creates a div, a ul and populates it with li's  -->
    <!-- note menu_class adds class to ul -->
    	<?php wp_nav_menu( array( 'menu_class' => 'navbar-nav mr-auto', 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

    </div>

    </nav>
    <!-- #site-navigation -->




<!-- SIMON PADBURY NAVWALKER BS 2 WP -->
<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		<?php
      wp_nav_menu( array(
        'theme_location'		=> 'navbar',
        'container'         => false,
        'menu_class'				=> '',
        'fallback_cb'				=> '__return_false',
      	'items_wrap'				=> '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
        'depth'							=> 2,
				'walker'            => new b4st_walker_nav_menu()
      ) );
    ?>
		<?php get_template_part('navbar-search'); ?>
  </div>
</nav>
