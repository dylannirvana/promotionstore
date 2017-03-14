<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package promotionstoretheme
 */

get_header(); ?>

<!-- CONTAINER -->
<div class="container">

	<!-- JUMBOTRON + CTA -->
	<div class="jumbotron-single">
	<?php
		$query = new WP_query( 'pagename=jumbotron-single');
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

			get_template_part( 'template-parts/content', get_post_format() );

			// the_post_navigation();

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
