<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BlogZ
 */

get_header();
$home_layout = get_theme_mod( 'home_layout', 'list' );
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

	<?php
	if ( have_posts() ) :
		if ( 'list' === $home_layout ) {
			get_template_part( 'template-parts/blog/list' );
		} else {
			get_template_part( 'template-parts/blog/grid' );
		}

		the_posts_pagination(
			array(
				'prev_text' => '<i class="icofont icofont-rounded-left"></i><span class="screen-reader-text">' . esc_html__( 'Previous', 'blogz' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Next', 'blogz' ) . '</span><i class="icofont icofont-rounded-right"></i>',
			)
		);

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
