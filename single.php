<?php get_header(); ?>
<div class="container">
      <div class="row page-header">
          <div class="col-sm-12">
            <h1><?php the_title(); ?></h1>
          </div>
      </div>
      <div class="row">       
        <div class="col-md-12">
          
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
      </div>
    <div class="row">
      <div class="col-md-12">
       <?php // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;

        ?>
      </div>
    </div>
   <?php get_footer(); ?> 