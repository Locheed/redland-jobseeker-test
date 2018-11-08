<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body <?php body_class(); ?> onload="checkIfHome()">
	<div class="navbar-container">
		<div class="navbar">
			<h1><a class="logo" href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('/assets/img/logo.svg'); ?>" alt="Redland" />Redland</a></h1>
			<nav role="navigation" class="main-menu-area">
			<!-- Add menus dynamically instead of a static links -->
				<?php wp_nav_menu(array(
					'theme_location' => 'headerMenu'
					)); ?>
			</nav>
			<span class="hamburger">
					<a href="#" onclick="openSideBar()">
						<svg width="30" height="30">
                <path d="M0,5 30,5" stroke="#fff"
                stroke-width="5"/>
                <path d="M0,14 30,14" stroke="#fff"
                stroke-width="5"/>
                <path d="M0,23 30,23" stroke="#fff"
                stroke-width="5"/>
 						</svg>
					</a>
			</span> <!-- hamburger -->
		</div> <!-- navbar -->
	</div> <!-- navbar-container -->

	<div class="navbar-sidemenu">
		<nav role="navigation" class="main-menu-area-collapsed">
			<a href="#" class="btn-close" onclick="closeSideBar()">&times;</a>
			<!-- Add menus dynamically instead of a static links -->
				<?php wp_nav_menu(array(
					'theme_location' => 'headerMenu'
					)); ?>
		</nav>
	</div>
	<header>
			<?php if(is_front_page()) : ?>
				<div class="main-hero-text-container">
					<h2 class="main-hero-text">Solving problems is our speciality <span>together <span id="heart"></span> we make the difference</span></h2>
					<hr class="divider">
				</div>
			<?php endif; ?>
		</header>
