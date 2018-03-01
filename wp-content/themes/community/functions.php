<?php
/**
 * community functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package community
 */

if ( ! function_exists( 'community_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function community_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on community, use a find and replace
		 * to change 'community' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'community', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'header-menu' => esc_html__( 'Header', 'community' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'community_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'width'       => 220,
			'height'      => 50,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'community_setup' );

require_once (get_template_directory().'/inc/include-script.php');
require_once (get_template_directory().'/inc/include-map.php');
require_once (get_template_directory().'/inc/include-panel.php');
require_once (get_template_directory().'/inc/dataClass.php');
require_once (get_template_directory().'/inc/itemClass.php');
$mapClass = new mapClass;
$panelClass = new panelClass;
$dataClass = new dataClass;

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function community_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'community_content_width', 640 );
}
add_action( 'after_setup_theme', 'community_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function community_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'community' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'community' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'community_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function community_scripts() {
	//wp_enqueue_style( 'community-style', get_stylesheet_uri() );

	wp_enqueue_script( 'community-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'community-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'community_scripts' );

/**
 * Page body class slug
 */
function add_page_slug_class_name( $classes ) {
	if ( is_page() ) {
		$page = get_post( get_the_ID() );
		$classes[] = 'page-'.$page->post_name;
	}elseif( is_single() ) {
		$page = get_post( get_the_ID() );
		if( $page->post_name === 'list') {
			$classes[] = 'single-'.$page->post_name;
		}
	}
	return $classes;
}
add_filter( 'body_class', 'add_page_slug_class_name' );

// 投稿スラッグを自動的に生成する（マルチバイトが見つかったら強制）
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
        $slug = $post_ID;
    }
    return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4  );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*
function my_post_type_link( $link, $post ){
   return home_url( '/'.$post->post_type.'/' . $post->ID .'/' );
}
add_filter( 'post_type_link', 'my_post_type_link', 1, 2 );
*/
/*
function my_rewrite_rules_array( $rules ) {
  $new_rules = array( 
    'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
  );
  return $new_rules + $rules;
}
add_filter( 'rewrite_rules_array', 'my_rewrite_rules_array' );
*/

/**
 * Calendar Class
 */
require get_template_directory() . '/inc/calendarClass.php';
$calendarClass = new calendarClass;

function add_list_template( $single_template ) {
    $new_template = $single_template;
    
    $post = get_queried_object();
    if ( get_post()->post_name === 'slug' ) {
        $single_cinema_template = locate_template( 'single-instructor-list.php' );
        if( !empty( $single_cinema_template ) )
            $new_template = $single_cinema_template;
    }
 
    return $new_template;
}
 
add_filter( 'single_template', 'add_list_template' );
/*
function get_custom_post_type_template( $archive_template ) {
     global $post;
     if ( is_post_type_archive ( 'tax-area' ) ) {
          $archive_template = locate_template( 'tex-city.php' );
     }
     return $archive_template;
}

add_filter( 'archive_template', 'get_custom_post_type_template' ) ;
*/
function get_custom_taxonomy_template($taxonomy_template) {
	global $term;
	$obj = get_term_by('slug',$term,'area');
	$parent = get_term($obj->parent, 'area');
	//var_dump($parent->slug);
	if(is_tax('area') && $parent->slug == 'city') {
		$taxonomy_template = locate_template( 'taxonomy-city.php' );
	} elseif(is_tax('area') && $parent->slug == 'line') {
		$taxonomy_template = locate_template( 'taxonomy-line.php' );
	} elseif(is_tax('area') && $term == 'list'){
		$taxonomy_template = locate_template( 'taxonomy-list.php' );
	}
	return $taxonomy_template;
}
add_filter( 'taxonomy_template', 'get_custom_taxonomy_template' );