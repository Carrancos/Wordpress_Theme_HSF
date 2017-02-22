<?php get_header(); ?>
<div class="col-xs-12 homeslide clear-pad">
   <div id="gallery" class="royalSlider rsDefault bannerslider">

  <?php if( have_rows('homepage_banner') ): ?>
  <?php while ( have_rows('homepage_banner') ) : the_row(); ?>
            
  <!-- the_sub_field-->

      <div class="rsContent">
          <?php $homepageImage = get_sub_field('background_image'); ?>      
            <img class="rsImg" src="<?php echo $homepageImage['url']; ?>" alt="<?php echo $homepageImage['alt']; ?>" />
            <p class="rsABlock"><?php the_sub_field('white_text_area'); ?></p>
      </div>


  <?php endwhile; else : ?>
  <?php endif; ?>
  </div>
</div>
<div class="container">
		<div class="col-md-6">
		    <?php
		    $posts = get_field('featured_product_1');
		    if($posts):
				foreach ($posts as $post):
				setup_postdata($post); 
		    ?>
		    
		    <div class="grid">
		      <figure class="effect-zoe">
		        <a href="<?php the_permalink(); ?>">

		        <?php if( have_rows('add_images') ): ?>
		        <?php while ( have_rows('add_images') ) : the_row(); ?>
		              
		        <!-- the_sub_field-->
		               
		          <?php $productImage = get_sub_field('image'); ?>
		          <a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $productImage['url']; ?>" alt="<?php echo $productImage['alt']; ?>" /></a>

		          <?php endwhile; else : ?>
		        <?php endif; ?>
		        	
		        </a>
		        <figcaption>
		        <div class="bottomtitle">
		          <h2><?php the_title(); ?></h2>
		          </div>
		        </figcaption>
		        <div class="clearfix"></div>    
		      </figure>
		      <?php endforeach; ?>
		  	<?php wp_reset_postdata(); ?>
		  	<?php endif; ?>
		</div>
	  		
	</div>
    <div class="col-md-6">
	    <?php
	    $posts = get_field('featured_product_2');
	    if($posts):
			foreach ($posts as $post):
			setup_postdata($post); 
	    ?>
	    
	    <div class="grid">
	      <figure class="effect-zoe">
	        <a href="<?php the_permalink(); ?>">

	        <?php if( have_rows('add_images') ): ?>
	        <?php while ( have_rows('add_images') ) : the_row(); ?>
	              
	        <!-- the_sub_field-->
	               
	          <?php $productImage = get_sub_field('image'); ?>
	          <a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $productImage['url']; ?>" alt="<?php echo $productImage['alt']; ?>" /></a>

	          <?php endwhile; else : ?>
	        <?php endif; ?>
	        	
	        </a>
	        <figcaption>
	        <div class="bottomtitle">
	          <h2><?php the_title(); ?></h2>
	          </div>
	        </figcaption>
	        <div class="clearfix"></div>    
	      </figure>
	      <?php endforeach; ?>
	  	<?php wp_reset_postdata(); ?>
	  	<?php endif; ?>
	</div>  
  </div>
<?php get_footer(); ?> 

