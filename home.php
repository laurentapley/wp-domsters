<?php get_header(); ?>
[home.php]
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h1> What we have to say </h1>

         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <article>
           <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
           <!-- date() only shows date for post on that day, time() function better here -->
           <!-- add name in users section of Dashboard to offer better name display -->
           <p>By <?php the_author(); ?>
              on <?php echo the_time('l, F jS, Y'); ?>
              in <?php the_category( ', ' ); ?>
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
           </p>
           <div class="excerpt">
             <?php the_excerpt(); ?>
           </div>


         </article>
        <?php endwhile; endif; ?>
        </div>
        <?php get_sidebar('blog'); ?>
      </div>
  </div>
<?php get_footer(); ?>
