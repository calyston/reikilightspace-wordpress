<?php
// Define the version so we can easily replace it throughout the theme
define( 'RLS_VERSION', 1.0 );

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'reikilightspace' ),
		'header-menu' => __( 'Header Menu' ),
    'footer-menu' => __( 'Footer Menu' ),
	)
);

/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function reikilightspace_widgets() {
	register_sidebar(array(
		'id' => 'sidebar',
		'name' => 'Sidebar',
		'description' => 'Sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="sidebar-title">',
		'after_title' => '</h3>',
		'empty_title'=> '',
	));

	register_sidebar(array(
    'name' => 'Contact Info',
    'id' => 'contact-info',
    'description' => 'Add a text block with your contact info',
    'before_widget' => '<section class="address">',
    'after_widget' => '</section>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
		'empty_title'=> '',
  ));
} 
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'reikilightspace_widgets' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function reikilightspace_scripts()  { 

	// get the theme directory style.css and link to it in the header
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	
	// add fitvid
	wp_enqueue_script( 'reikilightspace-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), RLS_VERSION, true );
	
	// add theme scripts
	wp_enqueue_script( 'reikilightspace', get_template_directory_uri() . '/js/theme.min.js', array(), RLS_VERSION, true );
  
}
add_action( 'wp_enqueue_scripts', 'reikilightspace_scripts' );

function add_column( $columns ){
	$columns['post_id_clmn'] = 'ID'; // $columns['Column ID'] = 'Column Title';
	return $columns;
}
add_filter('manage_posts_columns', 'add_column', 5);

function column_content( $column, $id ){
	if( $column === 'post_id_clmn')
		echo $id;
}
add_action('manage_posts_custom_column', 'column_content', 5, 2);