<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Meg-n-Boots
 */

get_header();

get_template_part( 'template-parts/content-heros' );

?>


	<div class="row">


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );


				?>
				<hr/>
				<?php

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

		<?php
		if ( is_singular( 'post' ) ) {
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'meg-n-boots' ) . '</span> ',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'meg-n-boots' ) . '</span> '
			) );
		}
		?>

	</div><!-- #primary -->


<?php
get_footer();
