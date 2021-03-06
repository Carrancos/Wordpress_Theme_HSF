<?php


function theme_styles(){
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'royal-slider', get_template_directory_uri() . '/royalslider/royalslider.css' );
	wp_enqueue_style( 'royal-slider-skin', get_template_directory_uri() . '/royalslider/skins/default/rs-default.css' );
}
add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	global $wp_scripts;

	wp_register_script('html5_shiv','https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
	wp_register_script('respond_js','https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);
	wp_register_script('respond_js','https://code.jquery.com/jquery-1.8.3.min.js', '', '', false);	

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '',true );
	wp_enqueue_script( 'royal-slider-js', get_template_directory_uri() . '/royalslider/jquery.royalslider.min.js', array(), '20170221', true );
	wp_enqueue_script('theme_js', get_template_directory_uri() . '/js/theme.js', array('bootstrap_js'), '',true );
	 
}

add_action( 'wp_enqueue_scripts', 'theme_js');

// Allow SVG images
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//Menu Registar
function register_theme_menus() {
	register_nav_menus(
		array(
			'main-nav'	=> __( 'Main Navigation' ),
		)
	);
}
add_action ( 'init', 'register_theme_menus');

function create_widget( $name, $id, $description ) {
	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="search-bar">',
		'after_widget' => '</div>',
	));
}
create_widget( 'Header Search', 'header', 'Put the search bar widget in this panel' );


?>