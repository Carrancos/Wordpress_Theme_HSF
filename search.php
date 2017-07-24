<?php get_header() ?>
<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if ( strpos($url,'rockets') !== false ) :
  $team = 'rockets';
elseif ( strpos($url,'texans') !== false ) :
  $team = 'texans';
elseif ( strpos($url,'dynamo') !== false ) :
  $team = 'dynamo';
elseif ( strpos($url,'cougars') !== false ) :
  $team = 'cougars';
elseif ( strpos($url,'astros') !== false ) :
  $team = 'astros';
else :
  $team = 'general';
endif;
?>

<div class="row page-header productIntroBanner <?php echo($team); ?>">
      <div class="container">
        <div class="col-md-2">

         <?php       
            if( $team === 'astros') : ?>
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston-Astros-Logo.svg">
            
            <?php elseif( $team === 'cougars') : ?>
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/University_of_Houston_Logo.svg">
            
            <?php elseif( $team === 'rockets') : ?>
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston_Rockets.svg">
            
            <?php elseif( $team === 'dynamo') : ?>
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston_Dynamo_logo.svg">

            <?php elseif( $team === 'texans') : ?>
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Houston_Texans_logo.svg">
            <?php elseif( $team === 'general') : ?>
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/hsf-logo.svg">
            <?php endif; ?>

        </div>
        <div class="col-md-10">
          <h1>Product Results</h1>
        </div>
    </div>
      </div>
<div class="container">
     <div class="row">
    <div class="col-md-2">
      <?php get_sidebar(); ?>
    </div>
    <div class="col-md-10">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="col-sm-3 archiveProduct">
          <div class="product">
            <?php if( have_rows('add_images') ): the_row(); ?>
              <!-- the_sub_field-->
              <?php $productImage = get_sub_field('image'); ?>
              
              <a href="<?php the_permalink(); ?>">
                <img class="img-responsive" src="<?php echo $productImage['url']; ?>" alt="<?php echo $productImage['alt']; ?>" />
              </a> 
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <div class="price text-left">
                <p><span <?php if( get_field('sale_price') ): ?>class="onSale"<?php endif; ?>><?php the_field('original_price'); ?></span> <?php the_field('sale_price'); ?></p>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
<?php $args = array(
      'prev_text'          => __('<i class="fa fa-angle-left" aria-hidden="true"></i>'),
      'next_text'          => __('<i class="fa fa-angle-right" aria-hidden="true"></i>')
      );
    ?>
    <div class="pagination pull-right">
      <?php echo paginate_links( $args ); ?>
    </div>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>
        

   <?php get_footer(); ?> 