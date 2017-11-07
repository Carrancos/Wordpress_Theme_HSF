 <!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">
    <title><?php wp_title();?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/houstonsportsfan/style.css">
  </head>

  <body <?php body_class(); ?>>
   <header>
    <div class="container">
       <nav class="navbar row"> 
            <div class="col-sm-2">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/hsf-logo.svg"></a>
            </div>

            <div id="navbar" class="navbar-collapse collapse col-sm-7">
            
            <?php
            $args = array(
              'menu'      => 'menu-1',
              'menu_class'      => 'nav navbar-nav',
              'container'      => 'true',
            );
            wp_nav_menu( $args );
            ?>

            </div><!--/.navbar-collapse -->
            <div class="col-sm-3">
              <?php if ( ! dynamic_sidebar ('header') ): endif ?>
            </div>
        
        </nav>
    </div>
  </header>