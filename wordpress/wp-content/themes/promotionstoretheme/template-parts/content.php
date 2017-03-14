<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package promotionstoretheme
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<!-- <?php promotionstoretheme_posted_on(); ?> -->
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<!-- MAIN SECTION -->
		<div class="row">

			<!-- ARTICLE -->
			<article class="col-md-8">


		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'promotionstoretheme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			// wp_link_pages( array(
			// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'promotionstoretheme' ),
			// 	'after'  => '</div>',
			// ) );
		?>

	</article> <!-- end article -->

	<aside class="col-md-4">

<!- THIS WILL BECOME SIDEBAR -->
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


		<!-- ROWS -->
		<div class="row">

			<div class="card col-xs-6 col-md-4 col-lg-3">
				<a href="#">
				<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_ad_specialty.png" alt="" >
				</a>
			</div>
			<div class="card col-xs-6 col-md-4 col-lg-3">
				<a href="#">
				<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_atms.png" alt="" >
				</a>
			</div>
			<div class="card col-xs-6 col-md-4 col-lg-3">
				<a href="#">
				<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_buzzwire_game2.png" alt="" >
				</a>
			</div>

			<div class="card col-xs-6 col-md-4 col-lg-3">
				<a href="#">
				<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_cash_cubes.png" alt="" >
				</a>
			</div>
			<div class="card col-xs-6 col-md-4 col-lg-3">
				<a href="#">
				<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_display_trivia.png" alt="" >
				</a>
			</div>
			<div class="card col-xs-6 col-md-4 col-lg-3">
				<a href="#">
				<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_inflatables.png" alt="" >
				</a>
			</div>

			<div class="card col-xs-6 col-md-4 col-lg-3">
				<a href="#">
				<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_photo_booth.png" alt="" >
				</a>
			</div>
			<div class="card col-xs-6 col-md-4 col-lg-3">
				<a href="#">
				<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_pick_6_bingo2.png" alt="" >
				</a>
			</div>
			<div class="card col-xs-6 col-md-4 col-lg-3">
				<a href="#">
				<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_plinko.png" alt="" >
				</a>
			</div>

			<div class="card col-xs-6 col-md-4 col-lg-3">
				<a href="#">
				<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_popcorn_machines.png" alt="" >
				</a>
			</div>
			<div class="card col-xs-6 col-md-4 col-lg-3">
				<a href="#">
				<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_prize_decoder.png" alt="" >
				</a>
			</div>
			<div class="card col-xs-6 col-md-4 col-lg-3">
				<a href="#">
				<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_prize_safe.png" alt="" >
				</a>
			</div>

		</div>


			<div class="row">

				<div class="card col-xs-6 col-md-4 col-lg-3">
					<a href="#">
					<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_prize_wheel.png" alt="" >
					</a>
				</div>
				<div class="card col-xs-6 col-md-4 col-lg-3">
					<a href="#">
					<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_promo_robots.png" alt="" >
					</a>
				</div>

				<div class="card col-xs-6 col-md-4 col-lg-3">
					<a href="#">
					<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_raffle_drum.png" alt="" >
					</a>
				</div>

				<div class="card col-xs-6 col-md-4 col-lg-3">
					<a href="#">
					<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_scratch_cards.png" alt="" >
					</a>
				</div>
				<div class="card col-xs-6 col-md-4 col-lg-3">
					<a href="#">
					<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_slot_machines.png" alt="" >
					</a>
				</div>
				<div class="card col-xs-6 col-md-4 col-lg-3">
					<a href="#">
					<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_toss_n_win.png" alt="" >
					</a>
				</div>

				<div class="card col-xs-6 col-md-4 col-lg-3">
					<a href="#">
					<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_sign_waving_mannequins2.png" alt="" >
					</a>
				</div>
				<div class="card col-xs-6 col-md-4 col-lg-3">
					<a href="#">
					<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_treasure_chest.png" alt="" >
					</a>
				</div>
				<div class="card col-xs-6 col-md-4 col-lg-3">
					<a href="#">
					<img class="card-img-top" src= <?php get_stylesheet_directory_uri() ?>"wp-content/themes/promotionstoretheme/images/m_video_games.png" alt="" >
					</a>
				</div>

			</div>

	</aside>

	</div> <!-- end row -->
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php promotionstoretheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
