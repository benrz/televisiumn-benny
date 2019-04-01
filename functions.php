<?php

/* ---------------------------------------------------
    ENQUEUE STYLES AND SCRIPTS
----------------------------------------------------- */
function bootstrapcss() {
	wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all' );
}

function customcss() {
    wp_enqueue_style( 'customcss', get_template_directory_uri() . '/css/theme.css', array(), '1.0', 'all' );
}

function fontawesome() {
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), '5.8.1', 'all' );
}


function televisiumn_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', $dependencies, '', true );
}

function televisiumn_enqueue_scripts2() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', $dependencies, '', true );
}

function televisiumn_enqueue_scripts3() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', $dependencies, '', true );
}

function customjs() {
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/script.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapcss' );
add_action( 'wp_enqueue_scripts', 'customcss' );
add_action( 'wp_enqueue_scripts', 'fontawesome' );

add_action( 'wp_enqueue_scripts', 'televisiumn_enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'televisiumn_enqueue_scripts2' );
add_action( 'wp_enqueue_scripts', 'televisiumn_enqueue_scripts3' );
add_action( 'wp_enqueue_scripts', 'customjs' );
/* ---------------------------------------------------
    END OF ENQUEUE STYLES AND SCRIPTS
----------------------------------------------------- */






function televisiumn_wp_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'televisiumn_wp_setup' );





/* ---------------------------------------------------
    REGISTER MENU
----------------------------------------------------- */
function televisiumn_register_menu() {
    register_nav_menu('header-menu', ( 'Header Menu' ));
    register_nav_menu('footer-menu', ( 'Footer Menu' ));
}
add_action( 'init', 'televisiumn_register_menu' );


/* -- ADD CLASS TO <li> ELEMENT -- */
function add_additional_class_on_li($classes, $item, $args) {
    if($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


/* -- ADD CLASS TO <a> ELEMENT -- */
function add_link_atts($atts) {
    $atts['class'] = "nav-link";
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');


/* -- ADD CLASS <active> TO CURRENT MENU ITEM -- */
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
/* ---------------------------------------------------
    END OF REGISTER MENU
----------------------------------------------------- */

?>

