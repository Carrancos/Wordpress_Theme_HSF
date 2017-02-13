<?php get_header(); ?>
<div class="topbanner">
    
  <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2015/07/AboutUs.jpg" alt="News" />

</div>

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
          
          <?php echo custom_field_excerpt('three_column_left'); ?>
          <?php echo custom_field_excerpt_lefthome('left_column_home'); ?>
          <?php echo custom_field_excerpt_middle('three_column_middle'); ?>
          <?php echo custom_field_excerpt_middlehome('middle_column_home'); ?>
          <?php echo custom_field_excerpt_right('three_column_right'); ?>
          <?php echo custom_field_excerpt_righthome('right_column_home'); ?>

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