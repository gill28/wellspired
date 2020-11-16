<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">
<script>
	function myFunction() {
	var x = document.querySelector(".header");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}
</script>
	<header id="masthead" class="site-header" role="banner">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="header-container">
					<div class="navbar-brand mb-0">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri() . "/src/img/header/mainLogo.svg" ?>" alt="">
						</a>
					</div>
					<div id="nav-icon2" onClick="myFunction()" class="menu-btn">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="sch-button">
						<a href="#" class="btn-teal">Schedule a call</a>
					</div>
				</div>
			</nav>
			<div class="container-fluid position-relative ">
				<div class="row">
			<div class="header" style="display: none">
				<!-- Navigation Menu Start -->
				<div class="navigation container">
					<div class="row">
						<!-- Navigation Menu Link Lists -->
						<div class="header-box p-4 col-md-6 bg-primary col-lg-12 position-absolute">
							<div>
								<div class="header-titles text-right">
									<?php
									$args = array(
										'theme_location' => 'primary',
										'depth'      => 2,
										'container'  => false,
										'menu_class'     => 'navbar-nav',
									);
									if (has_nav_menu('primary')) {
										wp_nav_menu($args);
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
			<!-- Navigation menu end -->
			</div>

	</div>

	</header><!-- #masthead -->



	</div><!-- #wrapper-navbar end -->
