<?php

//##########################################################

function my_assets() {
	wp_enqueue_style('animate', get_template_directory_uri(). "/assets/animate/animate.css" );
	wp_enqueue_style('bootstrap', get_template_directory_uri(). "/assets/bootsrap/bootsrap.css" );
	wp_enqueue_style('fancybox', get_template_directory_uri(). "/assets/fancybox/fancybox.css" );
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array(), "1.8.1", true  );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), "3.0", true  );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array(), "1.0", true  );
	wp_enqueue_script( 'wdf_main', get_template_directory_uri() . '/js/main.js', array(), "1.0", true  );
}

add_action( 'wp_enqueue_scripts', 'my_assets' );
///###############################################
#-------------------------ADD MENU------------------------------------#
function wdf_register_theame_menu() {
	register_nav_menus(
			array(
					'header-menu' => esc_html__( 'Header Menu', 'webdevflux_page' ),
			)
	);
}
add_action( 'init', 'wdf_register_theame_menu' );

///###############################################
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
			'page_title' 	=> 'Theme settings',
			'menu_title'	=> 'Theme settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
	));
}
///###############################################
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
///###############################################
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'testimonials',
			array(
					'labels' => array(
							'name' => __( 'Testimonials' ),
							'singular_name' => __( 'Testimonial' ),
							'add_new'            => _x( 'Add New', 'Testimonial' ),
							'add_new_item'       => __( 'Add New Testimonial' ),
							'edit_item'          => __( 'Edit Testimonial' ),
							'new_item'           => __( 'New Testimonial' ),
							'all_items'          => __( 'All Testimonials' ),
							'view_item'          => __( 'View Testimonial' ),
							'search_items'       => __( 'Search Testimonials' ),
							'not_found'          => __( 'No testimonials found' ),
							'not_found_in_trash' => __( 'No testimonials found in the Trash' ),
							'parent_item_colon'  => '',
							'menu_name'          => 'Testimonials'
					),
					'public' => true,  // it's not public, it shouldn't have it's own permalink, and so on
					'publicly_queryable' => true,  // you should be able to query it
					'show_ui' => true,  // you should be able to edit it in wp-admin
					'exclude_from_search' => true,  // you should exclude it from search results
					'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
					'has_archive' => true,  // it shouldn't have archive page
					'rewrite' => true,  // it shouldn't have rewrite rules
					'supports'      => array( 'title',  'thumbnail', 'editor' ),
			)
	);

}
//##################################################
function get_all_products_images_urls($product){
	$returnArray = array();
	//Get all images from gallery and featured images
	$imagesIds = $product->get_gallery_image_ids();
	array_unshift($imagesIds, (int) $product->get_image_id());
	if($imagesIds)
		foreach($imagesIds as $k=>$img){
			$returnArray[] = wp_get_attachment_url($img,"full");
		}
	return $returnArray;
}
?>