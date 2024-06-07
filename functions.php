<?php 

if ( ! defined( '_S_VERSION' ) ) { define( '_S_VERSION', '1.0.0' ); }

function bmnnit_setup() {

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background', apply_filters( 'ebmnnit_custom_background_args', array( 'default-color' => 'ffffff', 'default-image' => '' )));
	add_theme_support( 'custom-logo' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'responsive-embeds' ) ;
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );


	add_image_size('s', 480, 480, true);
	add_image_size('m', 720, 480, true);
	add_image_size('l', 1280, 640, true);
	add_image_size('xl', 1440, 640, true);

	register_nav_menus(
		array(
			'nav-main' => esc_html__( 'Nav Main', 'bmnnit' ),
			'nav-sidebar' => esc_html__( 'Nav Sidebar', 'bmnnit' ),
			'nav-footer' => esc_html__( 'Nav Footer', 'bmnnit' ),
		)
	);

}
add_action( 'after_setup_theme', 'bmnnit_setup' );

add_action( 'after_setup_theme', function() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'styles/editor.css' );
} );

function fundus_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Widgets Topbar', 'bmnnit' ),
			'id'            => 'widgets-topbar',
			'description'   => esc_html__( 'Add widgets here.', 'bmnnit' ),
			'before_widget' => '<div id="%1$s" class="sidebar  %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Widgets Top Right', 'bmnnit' ),
			'id'            => 'widgets-topright',
			'description'   => esc_html__( 'Add widgets here.', 'bmnnit' ),
			'before_widget' => '<div id="%1$s" class="sidebar  %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Widgets Footer', 'bmnnit' ),
			'id'            => 'widgets-footer',
			'description'   => esc_html__( 'Add widgets here.', 'bmnnit' ),
			'before_widget' => '<div id="%1$s" class="sidebar  %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


}
add_action( 'widgets_init', 'fundus_widgets_init' );


function bmnnit_scripts() {
	wp_enqueue_style('main-styles', get_template_directory_uri() . '/styles/style.css', array(), filemtime(get_template_directory() . '/styles/style.css') );
	wp_enqueue_style('mobile-styles', get_template_directory_uri() . '/styles/mobile.css', array(), filemtime(get_template_directory() . '/styles/mobile.css'), '(width <= 640px)' );
	wp_enqueue_style('tablet-styles', get_template_directory_uri() . '/styles/tablet.css', array(), filemtime(get_template_directory() . '/styles/tablet.css'), '(640px <= width <= 1360px)');
	wp_enqueue_style('desktop-styles', get_template_directory_uri() . '/styles/desktop.css', array(), filemtime(get_template_directory() . '/styles/desktop.css'), '(width >= 1360px)');
	
	wp_enqueue_script( 'comment-reply' );
	wp_enqueue_script( 'bmnnit-jquery', get_template_directory_uri() . '/scripts/jquery-3.7.1.slim.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bmnnit-slider', get_template_directory_uri() . '/scripts/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bmnnit-navigation', get_template_directory_uri() . '/scripts/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bmnnit-script', get_template_directory_uri() . '/scripts/script.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'bmnnit_scripts' );

function bmnnit_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Widgets', 'bmnnit' ),
			'id'            => 'widgets-1',
			'description'   => esc_html__( 'Add widgets here.', 'bmnnit' ),
		)
	);
}
add_action( 'widgets_init', 'bmnnit_widgets_init' );



require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/menu-walkers.php';



