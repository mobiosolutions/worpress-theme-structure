<?php 
function meteor_scripts() {
 
 // CSS
 wp_enqueue_style( 'custom-theme-style', get_stylesheet_uri() );
 wp_enqueue_style( 'theme-style-css', get_template_directory_uri() . '/assets/css/style.css');
 wp_enqueue_style( 'fontAwesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
 wp_enqueue_style( 'ionicons-css', get_template_directory_uri() . '/assets/css/ionicons.min.css');
 wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');  

// JS
 wp_enqueue_script( 'navigation', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '', true );
 wp_enqueue_script( 'owl-carousel-min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '', true );
 wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true );
 wp_enqueue_script( 'custom-theme-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
 wp_enqueue_script( 'custom-theme-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
 if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  wp_enqueue_script( 'comment-reply' );
 }
}
add_action( 'wp_enqueue_scripts', 'meteor_scripts' );
?> 