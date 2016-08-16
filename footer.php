<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Meg-n-Boots
 */

?>

	</div><!-- #content -->
	</div><!-- #page -->
	</div><!-- .container -->
	<div class="container">

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php echo __('Proudly powered by', 'meg-n-boots') ?> <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'meg-n-boots' ) ); ?>"><?php printf( esc_html__( '%s', 'meg-n-boots' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>Meg-n-Boots <?php echo __('theme developed by', 'meg-n-boots') ?>
			<a href="<?php echo esc_url( __( '//n8finch.com/', 'meg-n-boots' ) ); ?>"><?php printf( esc_html__( '%s', 'meg-n-boots' ), 'Nate Finch' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div><!-- #container -->
</div><!-- #page -->

<?php wp_footer();

get_template_part( 'template-parts/content-modals' );

?>
</body>
</html>
