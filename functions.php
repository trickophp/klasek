<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '2.0.1' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fo_theme_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'foodordering' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'fo_theme_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'foodordering' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'foodordering' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'fo_widgets_init' );

/*
* Creating a function to create CPT menu
*/
  
function fo_register_proizvodi_cpt_taxonomies() {
  
    $labels = array(
        'name'                => _x( 'Proizvodi', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Proizvod', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Proizvodi', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Proizvod', 'twentytwentyone' ),
        'all_items'           => __( 'Svi Proizvodi', 'twentytwentyone' ),
        'view_item'           => __( 'Pogledaj Proizvod', 'twentytwentyone' ),
        'add_new_item'        => __( 'Dodaj Novi Proizvod', 'twentytwentyone' ),
        'add_new'             => __( 'Dodaj Novi Proizvod', 'twentytwentyone' ),
        'edit_item'           => __( 'Izmeni Proizvod', 'twentytwentyone' ),
        'update_item'         => __( 'Azuriraj Proizvod', 'twentytwentyone' ),
        'search_items'        => __( 'Pretrazi Proizvod', 'twentytwentyone' ),
        'not_found'           => __( 'Nije Pronadjen', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Nije pronadjen u Trash', 'twentytwentyone' ),
    );
          
    $args = array(
        'label'               => __( 'proizvodi', 'twentytwentyone' ),
        'description'         => __( 'Movie news and reviews', 'twentytwentyone' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
        'taxonomies'          => ['vrsta'],
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
		'rewrite'             => [ 'slug' => 'proizvod' ],
    
    );
        
    register_post_type( 'proizvodi', $args );
    
    
    $labels = array(
        'name'              => _x( 'Vrste Proizvoda', 'taxonomy general name' ),
        'singular_name'     => _x( 'Vrsta Proizvoda', 'taxonomy singular name' ),
        'search_items'      => __( 'Pretrazi Vrste Proizvoda' ),
        'all_items'         => __( 'Sve Vrste Proizvoda' ),
        'parent_item'       => __( 'Parent Vrsta Proizvoda' ),
        'parent_item_colon' => __( 'Parent Vrsta Proizvoda:' ),
        'edit_item'         => __( 'Izmeni Vrstu Proizvoda' ),
        'update_item'       => __( 'Azuriraj Vrstu Proizvoda' ),
        'add_new_item'      => __( 'Dodaj Novu Vrstu Proizvoda' ),
        'new_item_name'     => __( 'Novi Naziv Vrste Proizvoda' ),
        'menu_name'         => __( 'Vrsta Proizvoda' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'     => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'katalog' ],
    );
    register_taxonomy( 'vrsta', [ 'proizvodi' ], $args );

    register_taxonomy_for_object_type('vrsta', 'proizvodi');
} 
add_action( 'init', 'fo_register_proizvodi_cpt_taxonomies', 0 );

/**
 * enqueue styles and scripts
 */
function fo_enqueue_styles_scripts() {
    wp_register_style('main_style', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION, 'all');
    wp_enqueue_style('main_style');

	if(!is_home()) {
		wp_register_style('inner_pages_style', get_template_directory_uri() . '/assets/css/inner-pages.css', array(), _S_VERSION, 'all');
		wp_enqueue_style('inner_pages_style');
	}

    wp_enqueue_script( 'main_script', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'filters_script', get_template_directory_uri() . '/assets/js/product-filters.js', array('jquery'), _S_VERSION, true );
	wp_localize_script('filters_script', 'ajax', array('url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'fo_enqueue_styles_scripts');

function fo_get_product_excerpt($post_id) {
	$product_description = get_field('product_description', $post_id);
	$excerpt = substr($product_description, 0, 90) . "...";

	return $excerpt;
}

function custom_post_filter() {
  // Retrieve the selected category and kalibar values from the AJAX request
  $categories = isset($_POST['category']) ? $_POST['category'] : array();
  $kalibars = isset($_POST['kalibar']) ? $_POST['kalibar'] : array();

  // Perform the search query to get posts based on the selected filters
  $args = array(
    'post_type' => 'proizvodi',
    'tax_query' => array(
      array(
        'taxonomy' => 'vrsta',
        'field' => 'slug',
        'terms' => $categories
      )
    )
  );

  // if all the filters are unselected display all products
  if(empty($categories)) {
	$args = array(
		'post_type' => 'proizvodi',
		'posts_per_page' => -1,
	);
  }

  $query = new WP_Query($args);

  // Prepare the results to be sent back in the AJAX response
  $results = '';

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
	
	  ob_start();
	  get_template_part( 'template-parts/content', 'product' );
	  $results .= ob_get_contents();
	  ob_end_clean();
    }
  }

  // Return the results in JSON format
  wp_send_json($results);
}
add_action('wp_ajax_custom_post_filter', 'custom_post_filter');
add_action('wp_ajax_nopriv_custom_post_filter', 'custom_post_filter');

?>