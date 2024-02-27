<?php

// Enqueue parent theme styles
function uaf_child_enqueue_styles() {
    // Enqueue parent theme stylesheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    // Enqueue child theme stylesheet
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
    wp_enqueue_style('min-child-style', get_stylesheet_directory_uri() . '/css/style.min.css');
    
    // Add your additional stylesheets here
    // wp_enqueue_style( 'your-stylesheet', get_stylesheet_directory_uri() . '/your-stylesheet.css' );
}
add_action( 'wp_enqueue_scripts', 'uaf_child_enqueue_styles' );

// Enqueue JS 
function fawf_theme_js()
{
    $curTime = round(microtime(true) * 1000);

    wp_enqueue_script('accordionJS', get_stylesheet_directory_uri() . '/js/accordion.js' , '', $curTime, true);
    wp_enqueue_script('accessibilityJS', get_stylesheet_directory_uri() . '/js/accessibility.js' , '', $curTime, true);
    wp_enqueue_script('main.js', get_stylesheet_directory_uri() . '/js/main.js' , '', $curTime, true);

}

add_action('wp_enqueue_scripts', 'fawf_theme_js');

//Fix parent enqueue redirect for loadmore scripts 

function child_loadmore_gen_scripts() {
    $args = array();
    $query = new WP_Query($args);
    global $wp_query;

    wp_register_script( 'loadmore_gen', get_template_directory_uri() . '/js/loadmore-gen.js', array('jquery') );
    // register our main script but do not enqueue it yet
    wp_register_script('loadmore', get_template_directory_uri() . '/js/loadmore.js', array('jquery'));

    wp_localize_script( 'loadmore_gen', 'loadmore_gen_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts'   => json_encode( $query->query_vars ), // everything about your loop is here
    ) );
    wp_localize_script('loadmore', 'loadmore_params', array(
        'ajaxurl'       => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts'         => json_encode($wp_query->query_vars), // everything about your loop is here
        'current_page'  => get_query_var('paged') ? get_query_var('paged') : 1,
        'max_page'      => $wp_query->max_num_pages
    ));

    wp_enqueue_script( 'loadmore_gen' );
    wp_enqueue_script('loadmore');
}

add_action( 'wp_enqueue_scripts', 'child_loadmore_gen_scripts' );




// Add your custom functions here

/**
 * Blocks
 */
require get_stylesheet_directory() . '/inc/blocks.php';


/**
 * Aria Friendly Nav
 */
require_once get_stylesheet_directory() . '/inc/WAI-ARIA-Walker_Nav_menu.php';


//Update body class to have page-slug 
add_filter('body_class', 'my_body_classes');
function my_body_classes($classes) {
    global $post;
    
    if (is_single() || is_page() && isset($post)) {
        $classes[] = 'page-' . $post->post_name;
    }

 

    return $classes;
}