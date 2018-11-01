<?php

  get_header();

  while(have_posts()) {
    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <div class="post-author">
      <!-- Get the authors name and link. Get the international date format and format time -->
      <p>Posted by <?php the_author_posts_link(); ?> on <?php echo date_i18n( get_option( 'date_format') ); ?> (<?php the_time('G:i'); ?>) - <?php echo get_the_category_list(', '); ?></p>
    </div>
    <?php the_content(); ?>
    <?php the_tags(); ?>

  <?php }

  get_footer();
?>