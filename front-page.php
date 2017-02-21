<?php get_header(); ?> 
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
<?php get_footer(); ?> 

