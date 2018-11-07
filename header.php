<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body <?php body_class(); ?> onload="checkIfHome()">
  <header>
			<div class="wrapper">

				<h1><a class="logo" href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('/assets/img/logo.svg'); ?>" alt="Redland" />Redland</a></h1>
				<label for="hamburger">Menu</label>
				<input type="checkbox" id="hamburger">
				<nav role="navigation" class="main-menu-area">
						<!-- Add menus dynamically instead of a static links -->
            <?php wp_nav_menu(array(
              'theme_location' => 'headerMenu'
            )); ?>
				</nav>
			</div>
			<?php if(is_front_page()) : ?>
				<h2 class="main-hero-text">Solving problems is our speciality <span>together <span id="heart"></span> we make the difference</span></h2>
				<hr class="divider">
			<?php endif; ?>
		</header>
