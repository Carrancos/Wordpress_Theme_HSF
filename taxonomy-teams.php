<?php get_header(); ?>
  
    <div class="row page-header">
      <div class="container">
     
      <div class="col-md-2">

         <?php
 $term = get_queried_object()->slug;       
 
          if( $term === 'astros') : ?>
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston-Astros-Logo.svg">
          
          <?php elseif( $term === 'cougars') : ?>
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/University_of_Houston_Logo.svg">
          
          <?php elseif( $term === 'rockets') : ?>
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston_Rockets.svg">
          
          <?php elseif( $term === 'dynamo') : ?>
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston_Dynamo_logo.svg">

          <?php elseif( $term === 'texans') : ?>
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston_Texans_logo.svg">
          
          <?php endif; ?>

      </div>
          <div class="col-md-10">
            <h1><?php wp_title(); ?></h1>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="col-md-12">


          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="post">
            
            <h2><a href ="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><em> 
              By <?php the_author(); ?> 
              on <?php echo the_time ('l, F jS, Y');?>
              in <?php the_category(', '); ?>
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></em>
            </p>
            
            <?php the_excerpt(); ?>
            
            <hr>

          </article>
          
        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh No!</h1>
          </div>

          <p>No Content is appearing for this page!</p>

          <?php endif; ?>


        </div>
        
      </div>

   <?php get_footer(); ?> 