<?php get_header();
  $term = get_queried_object()->slug;
  $name = get_queried_object()->name; ?>
    <div class="row page-header productIntroBanner <?php echo($term); ?>">
      <div class="container">
        <div class="col-md-2">

         <?php       
          
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
          <h1><a href="../">Teams</a> | <?php echo $name ?></h1>
        </div>
    </div>
      </div>
      <div class="container">
      <?php 
       
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="col-md-3">
          <div class="product">
           <?php if( have_rows('add_images') ): ?>
            <?php while ( have_rows('add_images') ) : the_row(); ?>
                  
            <!-- the_sub_field-->
                  
              <?php $productImage = get_sub_field('image'); ?>
              <a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $productImage['url']; ?>" alt="<?php echo $productImage['alt']; ?>" /></a>
             
              <?php endwhile; else : ?>
            <?php endif; ?>
          </div>
          </div>
         <?php endwhile; else : ?>


          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


         <?php endif; ?>
        </div>

   <?php get_footer(); ?> 