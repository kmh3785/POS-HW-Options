<?php
// WP Alchemy
	include_once 'metaboxes/setup.php';
	include_once 'metaboxes/bundle-spec.php';
	// include_once 'metaboxes/full-spec.php';
	// include_once 'metaboxes/checkbox-spec.php';
	// include_once 'metaboxes/radio-spec.php';
	// include_once 'metaboxes/select-spec.php';
// Theme Supports & Filters
	// Hide admin bar when logged in
		add_filter('show_admin_bar', '__return_false');

	// Add featured image functionality
		add_theme_support( 'post-thumbnails' ); 

	// Add excerpts to pages
		add_post_type_support( 'page', 'excerpt' );
		
	// Hide default Rich Text Editor
		// add_action('init', 'my_remove_editor_from_post_type');
		// function my_remove_editor_from_post_type() {
		//     remove_post_type_support( 'page', 'editor' );
		// }

// Custom Post Types
	add_action( 'init', 'register_cpt_pos_bundle' );

	function register_cpt_pos_bundle() {

	    $labels = array( 
	        'name' => _x( 'POS Bundles', 'pos_bundle' ),
	        'singular_name' => _x( 'POS Bundle', 'pos_bundle' ),
	        'add_new' => _x( 'Add New', 'pos_bundle' ),
	        'add_new_item' => _x( 'Add New POS Bundle', 'pos_bundle' ),
	        'edit_item' => _x( 'Edit POS Bundle', 'pos_bundle' ),
	        'new_item' => _x( 'New POS Bundle', 'pos_bundle' ),
	        'view_item' => _x( 'View POS Bundle', 'pos_bundle' ),
	        'search_items' => _x( 'Search POS Bundles', 'pos_bundle' ),
	        'not_found' => _x( 'No pos bundles found', 'pos_bundle' ),
	        'not_found_in_trash' => _x( 'No pos bundles found in Trash', 'pos_bundle' ),
	        'parent_item_colon' => _x( 'Parent POS Bundle:', 'pos_bundle' ),
	        'menu_name' => _x( 'POS Bundles', 'pos_bundle' ),
	    );

	    $args = array( 
	        'labels' => $labels,
	        'hierarchical' => true,
	        
	        'supports' => array( 'title', 'thumbnail', 'trackbacks' ),
	        
	        'public' => true,
	        'show_ui' => true,
	        'show_in_menu' => true,
	        
	        
	        'show_in_nav_menus' => true,
	        'publicly_queryable' => true,
	        'exclude_from_search' => false,
	        'has_archive' => true,
	        'query_var' => true,
	        'can_export' => true,
	        'rewrite' => true,
	        'capability_type' => 'post'
	    );

	    register_post_type( 'pos_bundle', $args );
	}
// Register menus
	function register_menus() {
	  register_nav_menus(
	    array(
	    	'header-menu' => __( 'Header Menu' ),
	    	'footer-menu' => __( 'Footer Menu' )
	    )
	  );
	}
	add_action( 'init', 'register_menus' );

// Scripts & Styles
	// Enqueue jQuery from google CDN
		if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
		function my_jquery_enqueue() {
		   wp_deregister_script('jquery');
		   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://maps.googleapis.com/maps/api/js?key=AIzaSyCpjWDSA8EMpsAHU-x_-DzJkvnbAMQyywE", null, null, false );
		  // wp_register_script('jqueryui', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js", array('jquery'), null, false );

		   wp_enqueue_script('jquery');
		  //  wp_enqueue_script('jqueryui');
		}

	// Custom Scripts		
		function scriptsAndStyles() {
		 	// Register Scripts

		 		wp_register_script( 'initScripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true );
		 	// Enqueue Scripts		
		 		// wp_enqueue_script( 'mapsAPI' );
		 		// wp_enqueue_script( 'analytics' );
		 		// wp_enqueue_script( 'bxSlider' );
		 		wp_enqueue_script( 'initScripts' );

			// Enqueue Styles
				wp_enqueue_style( 'webFonts', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700");

				wp_enqueue_style( 'customStyle', get_template_directory_uri() . '/css/style.css');
		};
		add_action( 'wp_enqueue_scripts', 'scriptsAndStyles' );

?>