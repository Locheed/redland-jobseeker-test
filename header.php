<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head(); ?>
</head>
<body>
  <header>
			<div class="wrapper">

				<h1><a class="logo" href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('/images/logo.svg'); ?>" alt="Redland" /></a></h1>

				<nav role="navigation" class="main-menu-area">
					<div class="menu-header-menu-fi-container">
            <?php wp_nav_menu(array(
              'theme_location' => 'headerMenu'
            )); ?>
						<!-- <ul id="menu-header-menu-fi" class="menu">
							<li class="menu-item"><a href="#">Agency</a></li>
							<li class="menu-item"><a href="#">Services</a></li>
							<li class="menu-item"><a href="#">References</a></li>
							<li class="menu-item"><a href="#">News</a></li>
							<li class="menu-item"><a href="#">Contact us</a></li>
							<li class="menu-item"><a href="#">Suomea, kiitos!</a></li>
						</ul> -->
					</div>
				</nav>

			</div>
		</header>
