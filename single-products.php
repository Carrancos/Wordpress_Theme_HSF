<?php get_header(); ?>
<div class="row page-header productIntroBanner">
<div class="container">
          <div class="col-md-12">
          <div class="col-md-2 logo">
          <?php 
          ?>
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/hsf-logo.svg">
          </div>
          <div class="col-md-9 offset-md-1">
            <h1><?php the_title(); ?></h1>
          </div>
          
          </div>
      </div>
      </div>
<div class="container">
      <div class="row">       
        <div class="col-md-12">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="col-md-6 productImage">
             <?php if( have_rows('add_images') ): ?>
                <?php while ( have_rows('add_images') ) : the_row(); ?>
                      
            <!-- the_sub_field-->
                   
              <?php $productImage = get_sub_field('image'); ?>
              <img class="img-responsive" src="<?php echo $productImage['url']; ?>" alt="<?php echo $productImage['alt']; ?>" />
    
              <?php endwhile; else : ?>
            <?php endif; ?>
          </div>
          <div class="col-md-6 productInformation">

            <div class="productDescription">
              <h2>Product Description</h2>
              <?php the_field('description');?>
            </div>

            <div class="productDetails">
              <h2>Product Details</h2>
              <?php the_field('details');?>
            </div>

          </div>
          <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh No!</h1>
          </div>

          <p>No Content is appearing for this page!</p>

          <?php endif; ?>


        </div>
      </div>

   <?php get_footer(); ?> 