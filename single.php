<?php get_header(); ?>
<div class="topbanner">
    
  <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2015/07/AboutUs.jpg" alt="News" />

</div>

    <div class="container">
      <div class="row page-header">
          <div class="col-sm-12">
            <h1><?php the_title(); ?></h1>
          </div>
      </div>
      <div class="row">       
        <div class="col-md-9">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
          <?php the_content(); ?>
          <p><em><?php echo the_time ('l, F jS, Y');?></em></p>

        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh No!</h1>
          </div>

          <p>No Content is appearing for this page!</p>

          <?php endif; ?>


        </div>
        <?php get_sidebar('blog'); ?> 
      </div>
    </div>

   <?php get_footer(); ?> 