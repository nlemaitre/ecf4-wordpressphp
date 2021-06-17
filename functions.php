
<?php

add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 346, 276, true );

add_image_size( 'art', 768, 664, false);

add_theme_support( 'title-tag' );

register_nav_menus( array('main' => 'Menu Principal',) );

function register_assets() {
     wp_enqueue_style( 'style-css', get_stylesheet_uri(), array(), '1.0');
    }

add_action('wp_enqueue_scripts', 'register_assets');

function nl_create_post_type() {
    $labels = array (
    'name' => 'Events',
    'singular_name' => 'Event',
    'add_new' => 'Add New ',
    'add_new_event' => 'Add a New Event',
    'edit_event' => 'Edit a Event',
    'search_event' => 'Search a Event',
    'new_event' => 'New Event',
    'view_event' => 'View a Event',
    'all_event' => 'All the Events',
    'not_found' => 'No one Event Founded',
    'not_found_in_trash' => 'No one Event founded in Trash',
    'parent_event' => '',
    'menu_name' => 'Event',
    );
    register_post_type ( 'event', array(
    'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
    'taxonomies' => array( 'post_tag', 'category' ),
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'rewrite' => array( 'slug' => 'events' ),
    )
    );
}
add_action( 'init', 'nl_create_post_type' );

register_sidebar( array(
    'name' => __( 'headerWidget', 'rmcWid' ),
    'id' => 'in-header-widget-area',
    'description' => __( '', 'rmcWid' ),
    'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
   ) );

function my_theme_styles() {wp_enqueue_style( 'icons' );    }

remove_action("wp_head", "wp_generator");