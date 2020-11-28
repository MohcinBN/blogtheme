<?php

function mohcinBn_theme_support(){
    // dynamic title
    add_theme_support('title-tag');
    // custom logo
    add_theme_support( 'custom-logo' );
    // title
    add_theme_support( 'title-tag' );
    // add thumbnails support 
    add_theme_support( 'post-thumbnails' );
}

// hook it
add_action( 'after_setup_theme','mohcinBn_theme_support');


// register dynamic menu

function mohcinBn_menus(){
    
    $menu_locations = [
        'primary' => "Main Menu",
        'footer' => "Footer Menu"
    ];

    register_nav_menus( $menu_locations);
}

add_action('init', 'mohcinBn_menus');


// add class to evry menu items
function add_class_to_menu_items ( $classes, $item, $args, $depth ){
  $classes[] = 'nav-item';
  return $classes;
}

add_filter ( 'nav_menu_css_class', 'add_class_to_menu_items', 10, 4 );

// custom excerpt
function mohcinBn_excerpt_more() {
    $excerpt = get_the_excerpt(); 
    $excerpt = substr( $excerpt, 0, 260 ); // Only display first 260 characters of excerpt
    $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
    $link = '<a class="read-more" href="'.get_the_permalink().'" rel="nofollow">Read More...</a>';
    echo $result. " " . $link;
}
//add_filter( 'excerpt_more', 'mohcinBn_excerpt_more' );

// register our styles
function mohcinBn_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('mohcinBn-style', get_template_directory_uri() . "/style.css", array('mohcinBn-bootstrap'), $version, 'all');
    wp_enqueue_style('mohcinBn-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '4.5', 'all');
    wp_enqueue_style('mohcinBn-fontawesome', get_template_directory_uri() . "/assets/css/all.min.css", array(), '5', 'all');
    wp_enqueue_style('mohcinBn-font-one', "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic", array(), '1.0', 'all');
    wp_enqueue_style('mohcinBn-font-two', "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800", array(), '1.0', 'all');
    
}

//hook action
add_action( 'wp_enqueue_scripts', 'mohcinBn_register_styles' );


// register our scripts
function mohcinBn_register_scripts(){

    wp_enqueue_script('mohcinBn-jquery', get_template_directory_uri() . "/assets/js/jquery.min.js", false, '3.5.1', true);
    wp_enqueue_script( 'mohcinBn-jsclean', get_template_directory_uri() . "/assets/js/clean-blog.js",false, '1.0', true);
    wp_enqueue_script( 'mohcinBn-mainjs', get_template_directory_uri() . "/assets/js/main.js",false, '1.0', true);
    wp_enqueue_script( 'mohcinBn-jsbootstrap-validation', get_template_directory_uri() . "/assets/js/jqBootstrapValidation.js", '1.0',false, true);
    
    
}

//hook action
add_action( 'wp_enqueue_scripts', 'mohcinBn_register_scripts' );

?>