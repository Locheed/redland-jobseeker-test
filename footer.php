<footer>

			<div class="wrapper">

				<?php
          $addresses = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'address'
          ));

          while($addresses->have_posts()) {
            $addresses->the_post(); ?>
						<div class="column">
            	<p><?php the_title(); ?></p>
							<p><?php echo get_the_content(); ?></p>
						</div>
          <?php
          }
        ?>
				<!--
				<div class="column">

					<p>Redland Helsinki<br />
					Bulevardi 44<br />
					00120 Helsinki<br />
					Finland</p>

				</div>

				<div class="column">

					<p>Redland Lahti<br />
					Rauhankatu 18<br />
					15100 Lahti<br />
					Finland</p>

				</div>

				<div class="column">

					<p>Redland Barcelona<br />
					Carrer de Verdi 72<br />
					08012 Barcelona<br />
					Spain</p>

				</div>-->

				<div class="column">

					<p>(09) 547 509 50<br />
					info@redland.fi</a></p>

				</div>

			</div>

			<div class="wrapper">

				<div class="column slogan">

					<a href="http://www.redland.fi/ota-yhteytta">Redland – Vaikuttavan markkinoinnin valtakunta.</a>

				</div>

				<div class="column">

					&copy; You the jobseeker and Redland 2016

				</div>

				<div class="column social-media">

					<a class="icon icon-facebook" target="_blank" href="https://www.facebook.com/redland.fi">Facebook</a>
					<a class="icon icon-twitter" target="_blank" href="https://twitter.com/redland_fi">Twitter</a>
					<a class="icon icon-linkedin" target="_blank" href="https://www.linkedin.com/company/redland-oy">LinkedIn</a>

				</div>

			</div>

		</footer>

<?php wp_footer(); ?>
</body>
</html>