<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<div class="container">
	<div class='row'>
		<div class="col-lg-3 align-items-center">
			<a href="index.php?page_id=1710">
				<div class="row">
					<div class="col">
						<div class="mt-3 mt-md-4 pl-3 pb-3" id="title-box">
							<h1>Lee Gale</h1>
							<h3>Writer, sub-editor, advertorial copywriter</h3>
						</div>
					</div>
				</div>
			</a>
			<div class="row">
				<div class="w-25 mt-md-4 justify-content-left" id="nav-area">
					<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
						<button class="navbar-toggler mb-2" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
							<span class="navbar-toggler-icon"></span>
						</button>
						<?php
						wp_nav_menu(array(
							'theme_location'    => 'side-page-menu',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'navbar-collapse-1',
							'menu_class'        => 'nav flex-column',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						));
						?>
					</nav>
				</div>
			</div>

		</div>
		<div class="col-lg-9 px-3 p-0 mt-md-3">
			<?php get_template_part('includes/section', 'about'); ?>

			<?php previous_posts_link(); ?>
			<?php next_posts_link(); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>