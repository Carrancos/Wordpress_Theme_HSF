<?php get_header(); ?>
<div class="topbanner">
    
  <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2015/07/AboutUs.jpg" alt="News" />

</div>
      <div class="row page-header optional">
        <div class="container">
          <div class="col-sm-12">
            <h1 class="internal"><?php the_title(); ?></h1>
          </div>
          </div>
      </div>
    <div class="container">
      <div class="row">
        
        <div class="col-md-12">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          
          <?php the_content(); ?>

        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh No!</h1>
          </div>

          <p>No Content is appearing for this page!</p>

          <?php endif; ?>


        </div>
        
      </div>
    </div>
   <?php get_footer(); ?> 