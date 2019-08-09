<?php

show_admin_bar(false);

if ( ! isset( $content_width ) ) {
	$content_width = 1140;
}

function mim_theme_setup() {
	add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'menus' );
}
add_action( 'after_setup_theme', 'mim_theme_setup' );

// Register Navigation Menus
function mim_navigation_menus() {

	$locations = array(
		'main-menu' => __( 'Main Menu', 'donomar' ),
		'gallery-menu' => __( 'Gallery Menu', 'donomar' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'mim_navigation_menus' );

/**
 * Enqueue script for child theme
 */
function mim_enqueue_scripts() {
  wp_enqueue_style( 'mim', get_template_directory_uri() . '/style.css', array('bootstrap'), uniqid() );
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Alfa+Slab+One|Allura|Roboto+Slab:400,700' );
  wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css' );
	// wp_enqueue_style( 'mim', get_stylesheet_directory_uri() . '/assets/css/mim.css', null, uniqid() );

  wp_enqueue_style( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css', array(), '3.3.7', 'all');
  wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '2.2.1', 'all');
  wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '2.2.1', 'all');

  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array ( 'jquery' ), '1.14.7', true);
  wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array ( 'popper' ), '4.3.1', true);
  wp_enqueue_script( 'isotope', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array ( 'jquery' ), '3.0.6', true);
  wp_enqueue_script( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js', array ( 'jquery' ), '3.0.47', true);
	wp_enqueue_script( 'jquery.easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array ( 'jquery' ), '1.4.1', true);

  wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array ( 'jquery' ), '2.2.1', true);
  wp_enqueue_script( 'mim', get_template_directory_uri() . '/js/mim.js', array ( 'jquery' ), uniqid(), true);
}
add_action( 'wp_enqueue_scripts', 'mim_enqueue_scripts', 1000000000 );

function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');



require_once( TEMPLATEPATH . '/functions/posttype.php' );
require_once( TEMPLATEPATH . '/functions/taxonomy.php' );
require_once( TEMPLATEPATH . '/class-wp-bootstrap-navwalker.php' );

function convert_datetime($str)
{

    list($date, $time) = explode(' ', $str);
    list($year, $month, $day) = explode('-', $date);
    list($hour, $minute, $second) = explode(':', $time);

    $timestamp = mktime($hour, $minute, $second, $month, $day, $year);

    return $timestamp;
}

// add_filter( 'auto_core_update_send_email', '__return_false' );
