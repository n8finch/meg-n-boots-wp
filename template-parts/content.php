<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Meg-n-Boots
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<div class="post-details">
				<p>
				Posted by: <span class="author-image"><?php echo get_avatar( get_the_author_meta( 'ID' ) );?></span><span> <?php the_author_meta( 'display_name' ); ?></span>
				</p>
				<p>
				<span class="glyphicon glyphicon-time"></span> <time><?php the_date(); ?></time>
				</p>
				<p>
				<span class="glyphicon glyphicon-folder-open"></span> Categories: <?php the_category(', ') ?>
				<span class="glyphicon glyphicon-tag"></span> <?php the_tags(); ?>
				</p>
				<?php edit_post_link( 'Edit', '<i class="fa fa-pencil"></i> ', ''  ); ?>
			</div><!-- post-details -->
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'meg-n-boots' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'meg-n-boots' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
