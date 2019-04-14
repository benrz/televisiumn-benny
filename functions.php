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
    wp_enqueue_script('JQuery', 'https://code.jquery.com/jquery-3.3.1.min.js', $dependencies, '', true );
}

function televisiumn_enqueue_scripts2() {
    $dependencies = array('jquery');
    wp_enqueue_script('PopperJS', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', $dependencies, '', true );
}

function televisiumn_enqueue_scripts3() {
    $dependencies = array('jquery');
    wp_enqueue_script('BootstrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', $dependencies, '', true );
}

function customjs() {
	wp_enqueue_script( 'customjsScroller', 'https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js', array(), '', true );
	wp_enqueue_script( 'JSParticle', get_template_directory_uri() . '/js/particles.min.js', array(), '', true );
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
    THEME SUPPORT
----------------------------------------------------- */
add_theme_support('post-thumbnails');
/* ---------------------------------------------------
    END OF THEME SUPPORT
----------------------------------------------------- */


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





/* ---------------------------------------------------
    ADD PROGRAMS PORTFOLIO
----------------------------------------------------- */

function program_custom_post_type (){
	$labels = array(
		'name' => 'Programs',
		'singular_name' => 'Program',
		'add_new' => 'Add Program',
		'all_items' => 'All Programs',
		'add_new_item' => 'Add Program',
		'edit_item' => 'Edit Program',
		'new_item' => 'New Program',
		'view_item' => 'View Program',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No programs found',
		'not_found_in_trash' => 'No programs found in trash',
		'parent_item_colon' => 'Parent Program'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		// 'taxonomies' => array('category'),
		'menu_position' => 4,
		'exclude_from_search' => false
	);
	register_post_type('programs',$args);
}
add_action('init','program_custom_post_type');

/* ---------------------------------------------------
    END OF ADD PROGRAMS PORTFOLIO
----------------------------------------------------- */

/* ---------------------------------------------------
    ADD CREWS PORTFOLIO
----------------------------------------------------- */
function crew_custom_post_type (){
	
	$labels = array(
		'name' => 'Crew',
		'singular_name' => 'Crew',
		'add_new' => 'Add crew',
		'all_items' => 'All crews',
		'add_new_item' => 'Add crew',
		'edit_item' => 'Edit crew',
		'new_item' => 'New crew',
		'view_item' => 'View crew',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No crews found',
		'not_found_in_trash' => 'No crews found in trash',
		'parent_item_colon' => 'Parent crew'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		// 'taxonomies' => array('category'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('crews',$args);
}
add_action('init','crew_custom_post_type');
/* ---------------------------------------------------
    END OF ADD CREWS PORTFOLIO
----------------------------------------------------- */

/* ---------------------------------------------------
    TAXONOMIES
----------------------------------------------------- */

function custom_taxonomies() {
	
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Positions',
		'singular_name' => 'Position',
		'search_item' => 'Search Positions',
		'all_items' => 'All Positions',
		'parent_item' => 'Parent Position',
		'parent_item_colon' => 'Parent Position:',
		'edit_item' => 'Edit Position',
		'update_item' => 'Update Position',
		'add_new_item' => 'Add New Position',
		'new_item_name' => 'New Position Title',
		'menu_name' => 'Position'
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'positions' )


	);
	
	register_taxonomy('positions', array('crews'), $args);
	
	register_taxonomy('program-category', 'programs', array(
		'label' => 'Program Category',
		'rewrite' => array( 'slug' => 'program-category' ),
		'hierarchical' => false
	) );
	
}
add_action( 'init' , 'custom_taxonomies' );

// /*--PROGRAMS TAXONOMIES--*/
// function program_custom_taxonomy(){
// 	$labels= array(
// 		'name' => 'Types',
// 		'singular_name' => 'Type',
// 		'search_item' => 'Search Types',
// 		'all_items' => 'All Types',
// 		'parent_item' => 'Parent Type',
// 		'parent_item_colon' => 'Parent Type:',
// 		'edit_item' => 'Edit Type',
// 		'update_item' => 'Update Type',
// 		'add_new_item' => 'Add New Type',
// 		'new_item_name' => 'New Type',
// 		'menu_name' => 'Type'
// 	);
// 	$args= array(
// 		'hierarchical' => true,
// 		'labels' => $lables,
// 		'show_ui' => true,
// 		'show_admin_coloumn' => true,
// 		'query_var' => true,
// 		'rewrite' => array('slug' => 'programcategory')
// 	);
// 	register_taxonomy('programcategory',array('programs'),$args);
// }
// add_action('init','program_custom_taxonomy');
// /*--END OF PROGRAMS TAXONOMIES--*/


/*--CREWS TAXONOMIES--*/
// function crew_custom_taxonomy(){
// 	$labels= array(
// 		'name' => 'Positions',
// 		'singular_name' => 'Position',
// 		'search_item' => 'Search Positions',
// 		'all_items' => 'All Positions',
// 		'parent_item' => 'Parent Position',
// 		'parent_item_colon' => 'Parent Position:',
// 		'edit_item' => 'Edit Position',
// 		'update_item' => 'Update Position',
// 		'add_new_item' => 'Add New Position',
// 		'new_item_name' => 'New Position',
// 		'menu_name' => 'Position'
// 	);
// 	$args= array(
// 		'hierarchical' => true,
// 		'labels' => $lables,
// 		'show_ui' => true,
// 		'show_admin_coloumn' => true,
// 		'query_var' => true,
// 		'rewrite' => array('slug' => 'position')
// 	);
// 	register_taxonomy('position',array('crews'),$args);

// 	/*--PROGRAMS TAXONOMIES--*/
// 	register_taxonomy('programcategory','programs',array(
// 		'label' => 'ProgramCat',
// 		'rewrite' => array('slug' => 'pprogramcategory'),
// 		'hierarchical' => false
// 	)  );
// }
// add_action('init','crew_custom_taxonomy');
/*--END OF CREWS TAXONOMIES--*/

/* ---------------------------------------------------
    END OF TAXONOMIES
----------------------------------------------------- */
?>

