
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
    'add_new' => 'Add New Event',
    'add_new_item' => 'Add New Event',
    'edit_item' => 'Edit Event',
    'new_item' => 'New Event',
    'all_items' => 'All Event',
    'view_item' => 'View Event',
    'search_items' => 'Search Event',
    'not_found' => 'No one Event Founded',
    'not_found_in_trash' => 'No one Event founded in Trash',
    'parent_item_colon' => '',
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
    'name' => __( 'In Header Widget Area', 'rmccollin' ),
    'id' => 'in-header-widget-area',
    'description' => __( 'A widget area located to the right hand side of the header, next to the site title and description.', 'rmccollin' ),
    'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
   ) );

function my_theme_styles() {wp_enqueue_style( 'icons' );    }

remove_action("wp_head", "wp_generator");