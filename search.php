<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Meg-n-Boots
 */

get_header();
get_template_part( 'template-parts/content-heros' );
?>

	<div class="row">


	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title"><?php printf( esc_html__( 'It seems like you were looking for: %s', 'meg-n-boots' ), '<span class="search-page-query">' . get_search_query() . '</span>' ); ?></h2>
				<p>
					Here are a few results we were able to locate for you...
				</p>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
	</div><!--col-md-8 col-xs-12 -->

<?php
get_footer();
