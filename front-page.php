<?php get_header(); ?>
<?php
    $herotext = esc_attr(get_option('hero_text'));
    $herodesc = esc_attr(get_option('hero_desc'));
    $secherotext = esc_attr(get_option('sec_hero_text'));
    $secherodesc = esc_attr(get_option('sec_hero_desc'));
  ?>
<section class="content">

			<div class="wrapper">

				<h2><?php print $herotext; ?></h2>
				<p><?php print $herodesc; ?></p>
			</div>

		</section>

		<section class="blocks">
			<h2>Some of our services</h2>
			<div class="wrapper">

				<div class="block">

					<h3>Marketing</h3>

					<ul>
						<li>Planning
						<li>Project Management
						<li>Metrics & Analytics
						<li>SEO
						<li>SEM
					</ul>

					<p><a href="<?php echo get_page_link(29); ?>">Read more</a></p>

				</div>

				<div class="block">

					<h3>Design</h3>

					<ul>
						<li>Identity</li>
						<li>Graphic Design</li>
						<li>Visual Communications</li>
						<li>Photography &amp; Illustrations</li>
					</ul>

					<p><a href="<?php echo get_page_link(31); ?>">Read more</a></p>

				</div>

				<div class="block">

					<h3>Digital</h3>

					<ul>
					<li>UI Design</li>
					<li>Web Development</li>
					<li>E-commerce</li>
					<li>Newsletters</li>
					<li>Online Advertising</li>
					<li>Videos</li>
					</ul>

					<p><a href="<?php echo get_page_link(33); ?>">Read more</a></p>

				</div>

			</div>

		</section>

		<section class="content">

			<div class="wrapper">

				<h2><?php print $secherotext; ?></h2>
				<p><?php print $secherodesc; ?></p>

			</div>

		</section>
<?php get_footer(); ?>