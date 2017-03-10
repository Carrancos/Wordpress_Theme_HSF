<?php get_header();
  $term = get_queried_object()->slug;
  $name = get_queried_object()->name; ?>
    <div class="row page-header productIntroBanner <?php echo($term); ?>">
      <div class="container">
        <div class="col-md-2 logo text-center">

         <?php       
            if( $term === 'astros') : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/Houston-Astros-Logo.svg"><br/>
            <p>Houston <?php echo($name); ?></p>
            
            <?php elseif( $term === 'cougars') : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/University_of_Houston_Logo.svg"><br/>
            <p>Houston <?php echo($name); ?></p>
            
            <?php elseif( $term === 'rockets') : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/Houston_Rockets.svg"><br/>
            <p>Houston <?php echo($name); ?></p>
            
            <?php elseif( $term === 'dynamo') : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/Houston_Dynamo_logo.svg"><br/>
            <p>Houston <?php echo($name); ?></p>

            <?php elseif( $term === 'texans') : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/Houston_Texans_logo.svg"><br/>
            <p>Houston <?php echo($name); ?></p>
            
            <?php endif; ?>

        </div>
        <div class="col-md-10">
          <!-- <h1><a href="../">Teams</a> | <?php echo $name ?></h1> -->
        </div>
    </div>
      </div>
      <div class="container">
      <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="col-md-4">
          <div class="product">
           <?php if( have_rows('add_images') ): the_row(); ?>            
             
                  
            <!-- the_sub_field-->
              <?php $productImage = get_sub_field('image');
              ?>
              
              <a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $productImage['url']; ?>" alt="<?php echo $productImage['alt']; ?>" /></a> 
               
              
            <?php endif; ?>
          </div>
          </div>
         <?php endwhile; else : ?>


          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


         <?php endif; ?>
        </div>

   <?php get_footer(); ?> 