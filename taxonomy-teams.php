<?php
	get_header();
	$term = get_queried_object()->slug;
	$name = get_queried_object()->name; 
?>
<div class="row page-header productIntroBanner <?php echo($term); ?>">
	<div class="col-md-2 logo text-center">
		<?php if( $term === 'astros') : ?>
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