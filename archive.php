<?php
get_header();
?>
<div class="news-container">
  <!-- Archive title function to get dynamic title for author, category or date titles. For fine tuning create an if statements manually -->
  <h1><?php the_archive_title(); ?></h1>
  <p class="bio"><?php the_archive_description(); ?></p>

	<!-- While loop for news posts-->
	<?php
		while(have_posts()) {
			the_post(); ?>
			<div class="post-item">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="post-author">
					<!-- Get the authors name and link. Get the international date format and format time -->
					<p>Posted by <?php the_author_posts_link(); ?> on <?php echo date_i18n( get_option( 'date_format') ); ?> (<?php the_time('G:i'); ?>) - <?php echo get_the_category_list(', '); ?></p>
				</div>
				<div class="post-content">
					<!-- If content has an excerpt then show that. Else trim the content to 50 words. -->
					<?php if(has_excerpt()) {
						the_excerpt();
						} else {
							echo wp_trim_words(get_the_content(), 50);
						}?>
					<?php the_tags(); ?>
					<a href="<?php the_permalink(); ?>" class="read-more">Read more &raquo;</a>
				</div>

			</div>
		<?php }
		echo paginate_links();
	?>
</div>
<?php
get_footer();
?>