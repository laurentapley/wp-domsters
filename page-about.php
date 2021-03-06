<?php
/*
  Template Name: About Page with sidebar Template
 */
?>

<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-9">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <!-- WP function that outputs post content -->
          <?php the_content(); ?>

        <?php endwhile; else: ?>
           <!-- we run this else if there is no content -->
          <div class="page-header">
            <h1>Wups!</h1>
          </div>

          <p>Looks like we have no content for this page?</p>

        <?php endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
<?php get_footer(); ?>
