<?php 
  $term = get_field('choose_a_sports_team');
  $name = $term->name;
  $slug = $term->slug;
?>
<?php get_header(); ?>
<div class="row page-header productIntroBanner <?php echo($slug); ?>">
<div class="container">
          <div class="col-md-12 row">
          <div class="col-md-2 logo text-center">
          
          <?php if( $name === 'Astros') : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Houston-Astros-Logo.svg"><br/>
            <p>Houston <?php echo($name); ?></p>
          
          <?php elseif( $name === 'Cougars') : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/University_of_Houston_Logo.svg"><br/>
            <p>Houston <?php echo($name); ?></p>
          
          <?php elseif( $name === 'Rockets') : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Houston_Rockets.svg"><br/>
            <p>Houston <?php echo($name); ?></p>
          
          <?php elseif( $name === 'Dynamo') : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Houston_Dynamo_logo.svg"><br/>
            <p>Houston <?php echo($name); ?></p>

          <?php elseif( $name === 'Texans') : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Houston_Texans_logo.svg"><br/>
            <p>Houston <?php echo($name); ?></p>
          
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
                    <?php $image = get_sub_field('image'); ?>
                
          <!-- the_sub_field-->
                 
              <div class="rsContent">
                
                <img class="rsImg" data-rsTmb="<?php echo $image['sizes']['thumbnail']; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>" />
              </div>
  
          <?php endwhile; else : ?>
          <?php endif; ?>
            </div>
          </div>
          <div class="col-md-6 productInformation">
              <div class="price text-left">
                <p>Price</p>
                <p><span <?php if( get_field('sale_price') ): ?>class="onSale"<?php endif; ?>><?php the_field('original_price'); ?></span> <?php the_field('sale_price'); ?></p>
              <a href="<?php echo the_field('link'); ?>" class="btn red-cta small" role="button" target="_blank">buy now</a>
            </div>
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
        <div class="clearfix"></div>
       
    </div>
   <?php get_footer(); ?> 