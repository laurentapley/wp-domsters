<?php get_header(); ?>
<div class="col-lg-12">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- WP function that outputs post content -->
  <?php the_content(); ?>

<?php endwhile; else: ?>
  </div>

<?php get_footer(); ?>
