<?php get_header(); ?>
<div class="row page-header productIntroBanner <?php echo($slug); ?>">
<div class="container">
          <div class="col-md-12 row">
          
            <h1><?php the_title(); ?></h1>
          
          </div>
      </div>
      </div>
<div class="container">
      <div class="row page-header optional">
        <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <a href="astros"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston-Astros-Logo.svg"></a>
          </div>
          <div class="col-sm-4">
            <a href="cougars"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/University_of_Houston_Logo.svg"></a>
          </div>
          <div class="col-sm-4">
            <a href="rockets"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston_Rockets.svg"></a>
          </div>
          <div class="row">
          </div>
          <div class="col-sm-4">
            <a href="dynamo"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston_Dynamo_logo.svg"></a>

          </div>
          <div class="col-sm-4">
            <a href="texans"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston_Texans_logo.svg"></a>
          </div>
          </div>
          </div>
      </div>
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
   <?php get_footer(); ?> 