<?php get_header(); ?> 
  <div class="container">
    <div class="col-md-6">
	    <?php
	    $posts = get_field('featured_product_1');
	    if($posts):
			foreach ($posts as $post):
			setup_postdata($post); 
	    	?>
	  		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	  		<?php if( have_rows('add_images') ): ?>
	                <?php while ( have_rows('add_images') ) : the_row(); ?>
	                      
	            <!-- the_sub_field-->
	                   
	              <?php $productImage = get_sub_field('image'); ?>
	              <img class="img-responsive" src="<?php echo $productImage['url']; ?>" alt="<?php echo $productImage['alt']; ?>" />
	    
	              <?php endwhile; else : ?>
	            <?php endif; ?>
	  	<?php endforeach; ?>
	  	<?php wp_reset_postdata(); ?>
	  	<?php endif; ?>
	</div>
  	 <div class="col-md-6">
	    <?php
	    $posts = get_field('featured_product_1');
	    if($posts):
			foreach ($posts as $post):
			setup_postdata($post); 
	    	?>
	  		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	  		<?php if( have_rows('add_images') ): ?>
	                <?php while ( have_rows('add_images') ) : the_row(); ?>
	                      
	            <!-- the_sub_field-->
	                   
	              <?php $productImage = get_sub_field('image'); ?>
	              <img class="img-responsive" src="<?php echo $productImage['url']; ?>" alt="<?php echo $productImage['alt']; ?>" />
	    
	              <?php endwhile; else : ?>
	            <?php endif; ?>
	  	<?php endforeach; ?>
	  	<?php wp_reset_postdata(); ?>
	  	<?php endif; ?>
	</div>
      
  </div>
<?php get_footer(); ?> 

