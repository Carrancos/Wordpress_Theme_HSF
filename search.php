<?php get_header(); ?>
<div class="container">
     
        <div class="col-md-12 listresults">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
          </div>
          
          <hr>

        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Your search has no results</h1>
          </div>

          <p>No Content is appearing for this page! Please try a different search</p>

          <?php endif; ?>
        

        </div>
        

   <?php get_footer(); ?> 