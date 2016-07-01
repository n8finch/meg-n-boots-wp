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

		<div class="grid-item col-xs-12 col-sm-6 col-md-4">
			<div class="grid-item-content">
				<div class=''>
					<a href="<?php echo the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				</div>
				<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
				<div class="entry-meta">
					<?php meg_n_boots_posted_on(); ?>
				</div><!-- .entry-meta -->
				<div class="author-info">
					<span class='author-image'><?php echo get_avatar( get_the_author_meta( 'ID' ) );?></span><span> <?php the_author_meta( 'display_name' ); ?></span>
				</div>
				<div class="main-page-the-content">
					<?php the_content(__('Read more...', 'meg-n-boots')); ?>
				</div>

			</div>
		</div>

	</header><!-- .entry-header -->

</article><!-- #post-## -->
