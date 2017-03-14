<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package promotionstoretheme
 */

get_header(); ?>

<!-- CONTAINER -->
<div class="container">

	<!-- JUMBOTRON + CTA -->
	<div class="jumbotron-single">
	<?php
		$query = new WP_query( 'pagename=jumbotron-page');
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
					the_post_thumbnail();
					echo '<div class="jumbotron-copy">';
						echo '<h1 class="display-3">';
						the_title(); // title
						echo '</h1>';
						echo '<p>';
						the_content(); // paragraph
						echo '</p>';
					echo '</div>';
			}
		}
		wp_reset_postdata();
	?>
</div> <!-- end jumbotron -->



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
