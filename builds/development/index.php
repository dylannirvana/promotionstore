<?php get_header(); ?>

<!-- CONTAINER -->
<div class="container-fluid">

	<!-- JUMBOTRON + CTA -->
  <div class="jumbotron">
    <?php the_header_image_tag(); ?>
    <!-- <div class="jumbotron-copy">
      <h1 class="display-3">PrizeSafe!</h1>
      <p>Lorem ipsum dolor <br>cupidatat non proident <br>sit amet</p> -->
      <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Buy it now!</a></p> -->
      <!-- THE IMAGE IS CALLED WITH THE CSS -->
    <!-- </div> -->
  </div> <!-- end jumbotron -->

	<div id="content" class="site-content">
      <!-- MAIN SECTION -->
      <div class="row">

        <!-- ARTICLE -->
        <article class="col-md-8">

          <!-- INSURANCE -->
            <div id="insurance" class="row">
              <?php
                $query = new WP_query( 'pagename=description');
                if ( $query->have_posts() ) {
                  while ( $query->have_posts() ) {
                    $query->the_post();

                    echo '<div class="card col-sm-6">';
                    echo '<a href="http://localhost:8888/clients/promotionstore/wordpress/shop/"> <h4 class="card-title">';
                    the_title(); // prizesafe
                    echo '</a></h4>';
                      echo '<a href="http://localhost:8888/clients/promotionstore/wordpress/shop/"> <img class="card-img-top" alt="">';
                      the_post_thumbnail();
                      echo '</a><p class="card-text">';
                      the_content(); // paragraph
                      echo '</p>';
                      echo '<a href="http://localhost:8888/clients/promotionstore/wordpress/shop/"> class="btn btn-primary">Buy now or Rent!</a>';
                    echo '</div>';

                  }
                }
                wp_reset_postdata();
              ?>

              <?php
                $query = new WP_query( 'pagename=insurance');
                if ( $query->have_posts() ) {
                  while ( $query->have_posts() ) {
                    $query->the_post();

                    echo '<div class="card col-sm-6">';
                    echo '<a href="http://localhost:8888/clients/promotionstore/wordpress/shop/"> <h4 class="card-title">';
                    the_title(); // prizesafe
                    echo '</a></h4>';
                      echo '<a href="http://localhost:8888/clients/promotionstore/wordpress/shop/"> <img class="card-img-top" alt="">';
                      the_post_thumbnail();
                      echo '</a><p class="card-text">';
                      the_content(); // paragraph
                      echo '</p>';
                      echo '<a href="http://localhost:8888/clients/promotionstore/wordpress/shop/"> class="btn btn-primary">Buy now or Rent!</a>';
                    echo '</div>';

                  }
                }
                wp_reset_postdata();
              ?>

            </div> <!-- row insurance -->




          <!-- INTRODUCTION -->
          <?php
            $query = new WP_query( 'pagename=what-is-prizesafe');
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
                echo '<h2>';
                the_title(); // what is prize safe
                echo '</h2>';
                echo '<p>';
                the_content(); // paragraph
                echo "</p>";
              }
            }
            wp_reset_postdata();
          ?>

          <!-- HOW IT WORKS -->
          <?php
            $query = new WP_query( 'pagename=how-it-works');
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();

                echo '<div id="buy" class="row">';
                  echo '<div class="card col-md-12">';

                    // image
                    echo '<img class="card-img-top" alt="" >';
                    the_post_thumbnail();

                    // copy
                    echo '<h4>';
                    the_title(); // how it works
                    echo '</h4>';
                    echo '<p>';
                    the_content(); // paragraph
                    echo "</p>";

                  echo '</div>'; // col
                echo '</div>'; // row

              }
            }
            wp_reset_postdata();
          ?>

          <!-- BENEFIT -->
          <?php
            $query = new WP_query( 'pagename=benefit');
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
                echo '<h4>';
                the_title(); // how it can benefit your business
                echo '</h4>';
                echo '<p>';
                the_content(); // paragraph
                echo "</p>";
              }
            }
            wp_reset_postdata();
          ?>




          <div id="options">

            <?php
              $query = new WP_query( 'pagename=options');
              if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                  $query->the_post();

                    echo '<h4>';
                    the_title(); // title
                    echo '</h4>';
                    echo '<p>';
                    the_content(); // paragraph
                    echo '</p>';

                }
              }
              wp_reset_postdata();
            ?>

            <?php
              $query = new WP_query( 'pagename=essentials');
              if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                  $query->the_post();

                    echo '<h4>';
                    the_title(); // title
                    echo '</h4>';
                    echo '<p>';
                    the_content(); // paragraph
                    echo '</p>';

                }
              }
              wp_reset_postdata();
            ?>

          </div> <!-- options -->

        </article> <!-- END ARTICLE -->


        <!-- ASIDE / SIDEBAR -->
        <aside class="col-md-4">

          <?php
            $query = new WP_query( 'pagename=events');
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
                  echo '<h2>';
                  the_title(); // title
                  echo '</h2>';
                  echo '<p>';
                  the_content(); // paragraph
                  echo '</p>';
              }
            }
            wp_reset_postdata();
          ?>


          <!-- ROWS -->
          <div class="row side-items">
            <!-- <div class="col-md-4"> -->

            <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
              <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
              <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_ad_specialty.png" alt="" >
              </a>
            </div>
            <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
              <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
              <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_atms.png" alt="" >
              </a>
            </div>
            <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
              <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
              <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_buzzwire_game2.png" alt="" >
              </a>
            </div>

            <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
              <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
              <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_cash_cubes.png" alt="" >
              </a>
            </div>

            <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
              <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
              <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_display_trivia.png" alt="" >
              </a>
            </div>
            <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
              <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
              <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_inflatables.png" alt="" >
              </a>
            </div>

            <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
              <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
              <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_photo_booth.png" alt="" >
              </a>
            </div>
            <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
              <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
              <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_pick_6_bingo2.png" alt="" >
              </a>
            </div>
            <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
              <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
              <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_plinko.png" alt="" >
              </a>
            </div>

            <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
              <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
              <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_popcorn_machines.png" alt="" >
              </a>
            </div>
            <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
              <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
              <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_prize_decoder.png" alt="" >
              </a>
            </div>
            <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
              <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
              <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_prize_safe.png" alt="" >
              </a>
            </div>





              <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
                <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
                <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_prize_wheel.png" alt="" >
                </a>
              </div>
              <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
                <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
                <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_promo_robots.png" alt="" >
                </a>
              </div>

              <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
                <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
                <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_raffle_drum.png" alt="" >
                </a>
              </div>

              <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
                <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
                <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_scratch_cards.png" alt="" >
                </a>
              </div>

              <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
                <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
                <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_slot_machines.png" alt="" >
                </a>
              </div>
              <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
                <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
                <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_toss_n_win.png" alt="" >
                </a>
              </div>

              <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
                <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
                <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_sign_waving_mannequins2.png" alt="" >
                </a>
              </div>
              <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
                <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
                <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_treasure_chest.png" alt="" >
                </a>
              </div>
              <div class="card col-sm-3 col-md-6 col-lg-4 col-xl-3">
                <a href="http://localhost:8888/clients/promotionstore/wordpress/specialties/">
                <img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_video_games.png" alt="" >
                </a>
              </div>

            </div> <!-- end aside content row -->


                  <div id="ourabout">

                      <?php
                        $query = new WP_query( 'pagename=ourabout');
                        if ( $query->have_posts() ) {
                          while ( $query->have_posts() ) {
                            $query->the_post();
                              echo '<h4>';
                              the_title(); // title
                              echo '</h4>';
                              echo '<p>';
                              the_content(); // paragraph
                              echo '</p>';
                          }
                        }
                        wp_reset_postdata();
                      ?>
                    </div>

                    <div id="ourfaq">
                      <?php
                        $query = new WP_query( 'pagename=ourfaq');
                        if ( $query->have_posts() ) {
                          while ( $query->have_posts() ) {
                            $query->the_post();
                              echo '<h4>';
                              the_title(); // title
                              echo '</h4>';
                              echo '<p>';
                              the_content(); // paragraph
                              echo '</p>';
                          }
                        }
                        wp_reset_postdata();
                      ?>
                  </div>
        </aside>

      </div> <!-- end main content row -->

      <hr>

      <?php get_footer(); ?>
