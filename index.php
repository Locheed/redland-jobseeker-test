<?php
get_header();
?>
<div class="container">
	<h1>This is news page</h1>
</div>

<?php
	while(have_posts()) {
		the_post(); ?>
		<div class="post-item">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="post-author">
				<p>Posted by <?php the_author_posts_link(); ?> on <?php echo date_i18n( get_option( 'date_format') ); ?> (<?php the_time('G:i'); ?>) - <?php echo get_the_category_list(', '); ?></p>
			</div>
			<div class="post-content">
				<?php the_excerpt();?>
				<a href="<?php the_permalink(); ?>"">Read more &raquo;</a>
			</div>

		</div>
	<?php }
	echo paginate_links();
?>
<?php
get_footer();
?>