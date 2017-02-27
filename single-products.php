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
          <div class="productSlider rsDefault">
             <?php if( have_rows('add_images') ): ?>
                <?php while ( have_rows('add_images') ) : the_row(); ?>
                      
            <!-- the_sub_field-->
                   
              <!-- simple image with thumbnail -->
    
    <!-- simple image with thumbnail -->
    <img class="rsImg" src="https://lh3.googleusercontent.com/dB3Dvgf3VIglusoGJAfpNUAANhTXW8K9mvIsiIPkhJUAbAKGKJcEMPTf0mkSexzLM5o=w300" data-rsTmb="small-image.jpg" alt="image description" />

    <!-- lazy loaded image with thumbnail -->
    <a class="rsImg" href="image.jpg">image description<img src="small-image.jpg" class="rsTmb" /></a>

    <!-- Image with HTML thumbnail -->
    <div class="rsContent">
        <img class="rsImg" src="https://lh3.googleusercontent.com/dB3Dvgf3VIglusoGJAfpNUAANhTXW8K9mvIsiIPkhJUAbAKGKJcEMPTf0mkSexzLM5o=w300" alt="image description" />
        <div class="rsTmb">Thumbnail HTML content</div>
    </div>
    
              <?php endwhile; else : ?>
            <?php endif; ?>
            </div>
            <a href="<?php echo the_field('link'); ?>" class="btn btn-info" role="button" target="_blank">Link Button</a>
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