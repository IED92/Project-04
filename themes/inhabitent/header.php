<?php

/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

$header_class = '';
if (is_front_page()) {
	$header_class = 'front-page';
	$displayblue = 'none';
	$displaywhite = "block";
} elseif (is_page('about')) {
	$header_class = 'about-page';
	$displayblue = "none";
	$displaywhite = "block";
}
//  }
else {
	$displayblue = "block";
	$displaywhite = "none";
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site <?= $header_class; ?>">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			</div>
			<!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<a class="header-logo" href="<?= get_site_url(); ?>">
					<img class="header-logo-img" src="<?= get_template_directory_uri() ?>/img/logos/inhabitent-logo-tent-white.svg" style="display: <?php echo $displaywhite ?>;" alt="Inhabitent">
					<img class="header-logo-img" src="<?= get_template_directory_uri() ?>/img/logos/inhabitent-logo-tent.svg" style="display: <?php echo $displayblue ?>;" alt="Inhabitent">
				</a>
				<div class="menu-search">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button>
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
					<a href="#" id="search-toggle" class="search-toggle" aria-hidden="true">
						<i class="fas fa-search"></i>
					</a>
					<div class="navigation-form">
						<?php echo get_search_form(); ?>
					</div>

				</div>
			</nav>
			<!--#site-navigation -->
		</header><!-- #masthead -->

		<div id="site-wrapper" class="site-content">