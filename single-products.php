<?php 
  $term = get_field('choose_a_sports_team');
  $name = $term->name;
  $slug = $term->slug;
?>
<?php get_header(); ?>
<div class="row page-header productIntroBanner <?php echo($slug); ?>">
<div class="container">
          <div class="col-md-12 row">
          <div class="col-md-2 logo">
          
          <?php if( $name === 'Astros') : ?>
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston-Astros-Logo.svg">
          
          <?php elseif( $name === 'Cougars') : ?>
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/University_of_Houston_Logo.svg">
          
          <?php elseif( $name === 'Rockets') : ?>
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston_Rockets.svg">
          
          <?php elseif( $name === 'Dynamo') : ?>
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston_Dynamo_logo.svg">

          <?php elseif( $name === 'Texans') : ?>
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston_Texans_logo.svg">
          
          <?php endif; ?>
          </div>
          <div class="col-md-9 offset-md-1">
            <h1><?php the_title(); ?></h1>

          </div>
          
          </div>
      </div>
      </div>
<div class="container <?php echo($slug); ?>">
           
        <div class="col-md-12 row">
          
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