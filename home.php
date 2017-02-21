<?php get_header(); ?>
  
        <div class="col-md-9">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="post">
              <h2 class="postings"><a href ="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_category(', '); ?> 
                <br><br>
              <?php the_excerpt(); ?>
              <a style="font-family: 'Oswald', sans-serif;" href="<?php the_permalink(); ?>">Read More <i class="fa fa-caret-square-o-right"></i></a>
              <p><em> 
                <span class="blogdate"><?php echo the_time ('F j, Y');?></span>
              </p>
              
              <hr>

            </article>
          
          <?php endwhile; else: ?>
          
          <?php endif; ?>

        </div>
         <?php get_sidebar('blog'); ?>
        
    </div>

   <?php get_footer(); ?> 