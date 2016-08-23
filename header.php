<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Meg-n-Boots
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'meg-n-boots' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="row">
					<?php if( !empty(get_custom_logo()) ) { ?>
					<div class="site-branding-logo text-right col-xs-1">
						<?php meg_n_boots_the_custom_logo(); ?>
					</div>
					<?php } ?>

				<div class="site-branding text-left col-xs-6">

					<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
					</h1>


					<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description sr-only"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
					endif; ?>
				</div><!-- .site-branding -->

				<?php if( !empty(get_custom_logo()) ) { ?>
				<div id="navbar-button-group" class="text-right col-xs-5">
				<?php } else { ?>
				<div id="navbar-button-group" class="text-right col-xs-6">
				<?php } ?>

					<button type="button" class="navbar-button"  data-toggle="modal" data-target="#modal-search">
						<span class="sr-only">Toggle navigation</span>
						<span id="" class="glyphicon glyphicon-search"></span>
					</button>
					<?php
						if( has_nav_menu( 'primary' ) ) {
							?>
							<button type="button" class="navbar-button" data-toggle="modal" data-target="#modal-menu">
								<span class="sr-only">Toggle navigation</span>
								<span class="glyphicon glyphicon-menu-hamburger"></span>
							</button>
							<?php
						} //end has_nav_menu

					?>
					<button type="button" id="sidebar-slider" class="navbar-button">
						<span class="sr-only">Toggle navigation</span>
						<span class="glyphicon glyphicon-option-horizontal"></span>
					</button>
				</div>
				</div> <!-- end div row nav -->
			</div><!--end container-->
		</nav>
	</header><!-- #masthead -->

	</div> <!-- id="page" class="site" -->

	</div> <!-- class="container" -->

		<div id="primary-sidebar-widget" class="hide">
			<?php get_sidebar(); ?>
		</div>

	<!-- Original Div id and class: 	<div id="content" class="site-content">-->
	<div id="" class="">

