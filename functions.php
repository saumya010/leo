<?php
/**
 * leo functions and definitions
 *
 * @package leo
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( 'leo_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function leo_setup() {
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();


		/**
		 * Add default posts and comments RSS feed links to head
		*/
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for Post Thumbnails on posts and pages
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		*/
		add_theme_support( 'post-thumbnails' );

		/**
		 * Enable support for Post Formats
		*/
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

		/**
		 * Setup the WordPress core custom background feature.
		*/
		add_theme_support( 'custom-background', apply_filters( 'leo_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on leo, use a find and replace
	 * to change 'leo' to the name of your theme in all the template files
	*/
	load_theme_textdomain( 'leo', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Header bottom menu', 'leo' ),
	) );

}
endif; // leo_setup
add_action( 'after_setup_theme', 'leo_setup' );
function leo_theme_slug_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'leo_theme_slug_setup' );
/**
 * Register widgetized area and update sidebar with default widgets
 */
function leo_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'leo' ),
                'description'   => 'Primary Sidebar',
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'Home Widget 1', 'leo' ),
                'description'   => 'Home Widget',
		'id'            => 'home-sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'Home Widget 2', 'leo' ),
		'description'   => 'Home Widget',
                'id'            => 'home-sidebar-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'Home Widget 3', 'leo' ),
		'description'   => 'Home Widget',
                'id'            => 'home-sidebar-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'Home Widget 4', 'leo' ),
		'description'   => 'Home Widget',
                'id'            => 'home-sidebar-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'Home Widget 5', 'leo' ),
		'description'   => 'Home Widget',
                'id'            => 'home-sidebar-5',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'Home Widget 6', 'leo' ),
		'description'   => 'Home Widget',
                'id'            => 'home-sidebar-6',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'leo' ),
		'description'   => 'Footer Widget',
                'id'            => 'footer-sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'leo' ),
		'description'   => 'Footer Widget',
                'id'            => 'footer-sidebar-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'leo' ),
		'description'   => 'Footer Widget',
                'id'            => 'footer-sidebar-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'Footer Widget 4', 'leo' ),
		'description'   => 'Footer Widget',
                'id'            => 'footer-sidebar-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'leo_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function leo_scripts() {

	// load bootstrap css
	wp_enqueue_style( 'leo-bootstrap', get_template_directory_uri() . '/includes/css/bootstrap.min.css' );
        
        wp_enqueue_style( 'leo-fontawesome', get_template_directory_uri() . '/includes/css/font-awesome.min.css' , array(), '4.0.3', 'all' );
	wp_enqueue_style( 'leo-flexcss', get_template_directory_uri() . '/includes/css/flexslider.css' );
        $fonts_url='http://fonts.googleapis.com/css?family=Lato|Roboto|Oswald|Lobster|Play';
        	if(!empty($fonts_url)){
			wp_enqueue_style('font-name',esc_url_raw($fonts_url),array(),null);
		}
	// load leo styles
	wp_enqueue_style( 'leo-style', get_stylesheet_uri() );
        //flexslider js
        wp_enqueue_script('leo-flex', get_template_directory_uri().'/includes/js/flex.js', array('jquery') );
	wp_enqueue_script('leo-flex1', get_template_directory_uri().'/includes/js/jquery.flexslider.js', array('jquery') );
	// load bootstrap js
	wp_enqueue_script('leo-bootstrapjs', get_template_directory_uri().'/includes/js/bootstrap.js', array('jquery') );

	// load bootstrap wp js
	wp_enqueue_script( 'leo-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery') );

	wp_enqueue_script( 'leo-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'leo-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', 'leo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';