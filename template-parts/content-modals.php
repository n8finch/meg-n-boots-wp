<?php
/**
 * Template part for displaying modals.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Meg-n-Boots
 */

?>

	<!-- Search Modal
	=======================================-->

	<div class="modal fade" id="modal-search">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="col-sm-12 col-md-12 search-navbar"> <!--  Search Bar -->
					<form class="navbar-form" role="search" method="get" id="searchform"
					      action="<?php echo esc_url( home_url() ); ?>">
						<div class="input-group">
							<input type="text" id="searchbox" class="form-control" placeholder="Search" name="s" id="s">

							<div class="input-group-btn">
								<button class="btn btn-default" id="searchsubmit" type="submit"><i
										class="glyphicon glyphicon-search"></i></button>
							</div>
						</div>
					</form>
				</div>
				<!-- end Search Bar -->

			</div>
			<!-- modal-content -->
		</div>
		<!-- modal-dialog -->
	</div><!-- modal -->

	<!-- Menu Modal
	Uses walker: from https://github.com/twittem/wp-bootstrap-navwalker
	=======================================-->

	<div class="modal fade" id="modal-menu">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="col-sm-12 col-md-12 search-navbar text-center"> <!--  Search Bar -->
					<?php
					wp_nav_menu( array(
							'menu'            => 'primary',
							'theme_location'  => 'primary',
							'depth'           => 2,
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'bs-example-navbar-collapse-1',
							'menu_class'      => 'nav nav-stacked',
							'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
							'walker'          => new wp_bootstrap_navwalker()
						)
					);
					?>
				</div>
				<!-- end Search Bar -->

			</div>
			<!-- modal-content -->
		</div>
		<!-- modal-dialog -->
	</div><!-- modal -->

<?php