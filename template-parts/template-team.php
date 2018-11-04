<?php
/**
 * Template Name: Team
 */
get_header();
the_post();

// Get 'team' posts
$team_posts = get_posts( array(
	'post_type' => 'team',
	'posts_per_page' => -1, // Unlimited posts
	'orderby' => 'title', // Order alphabetically by name
) );

if ( $team_posts ): ?>
<h2 class="team-page-heading">This is our team</h2>
<section class="team-section">

	<?php
	foreach ( $team_posts as $post ):
  setup_postdata($post);

  // Get thumbnail source with wp_functions
	$thumb_src = null;
	if ( has_post_thumbnail($post->ID) ) {
		$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team_featured_image' );
    $thumb_src = $src[0];
	}
	?>
	<article class="team-member-container">
		<div class="team-member-thumbnail">
			<?php if ( $thumb_src ): ?>
			<img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('team_position'); ?>" class="img-circle">
			<?php endif; ?>
		</div>

		<div class="team-member-content">
			<h3><?php the_title(); ?></h3>
			<p class="position"><?php the_field('team_position'); ?></p>
			<?php the_content(); ?>
		</div>

		<div class="team-member-contact">
			<a href="tel:<?php the_field('team_phone'); ?>"><?php the_field('team_phone'); ?></a>
			<a href="mailto:<?php echo antispambot( get_field('team_email') ); ?>"><?php echo antispambot( get_field('team_email') ); ?></a>
			<?php if ( $twitter = get_field('team_twitter') ): ?>
			  <a href="<?php echo $twitter; ?>">Twitter</a>
			<?php endif; ?>
			<?php if ( $linkedin = get_field('team_linkedin') ): ?>
			  <a href="<?php echo $linkedin; ?>">Linkedin</a>
			<?php endif; ?>
		</div>
	</article>
	<?php endforeach; ?>
</section>
<?php endif; ?>
<?php get_footer(); ?>