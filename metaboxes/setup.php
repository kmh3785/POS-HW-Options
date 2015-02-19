<?php

include_once WP_CONTENT_DIR . '/wpalchemy/MetaBox.php';
 
include_once WP_CONTENT_DIR . '/wpalchemy/MediaAccess.php';
  
// include css to help style our custom meta boxes
add_action( 'init', 'my_metabox_styles' );
 
function my_metabox_styles()
{
    if ( is_admin() ) 
    { 
        wp_enqueue_style( 'wpalchemy-metabox', get_stylesheet_directory_uri() . '/metaboxes/meta.css' );
    }
}
 
$wpalchemy_media_access = new WPAlchemy_MediaAccess();

// include_once WP_CONTENT_DIR . '/wpalchemy/MetaBox.php';

// // global styles for the meta boxes
// if (is_admin()) add_action('admin_enqueue_scripts', 'metabox_style');

// function metabox_style() {
// 	wp_enqueue_style('wpalchemy-metabox', get_stylesheet_directory_uri() . '/metaboxes/meta.css');
// }

/* eof */