<?php get_header(); ?>

    <div class="container">
       <div class="row page-header">
          <div class="col-sm-12">
            <h1><strong>Search Results For:</strong> | <?php the_search_query(); ?></h1>
          </div>
      </div>
        <div class="col-md-9 listresults">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
          </div>
          

        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Your search has no results</h1>
          </div>

          <p>No Content is appearing for this page! Please try a different search</p>

          <?php endif; ?>
        

        </div>
        
        <?php get_sidebar('blog'); ?>
        
      </div>
      </div>

   <?php get_footer(); ?> 