<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
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
             <?php the_content(); ?>
             <hr>
            <?php comments_template(); ?>
           </div>



         </article>
        <?php endwhile; endif; ?>
        </div>

      </div>
  </div>
<?php get_footer(); ?>
