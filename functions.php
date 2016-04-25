<?php

/**
 * Simple helper to debug to the console
 *
 * @param  object, array, string $data
 * @return string
 */
function debug_to_console( $data ) {
	$output = '<script type="text/javascript">';
	$output .= 'console.log(' . json_encode( $data ) . ');';
  $output .= '</script>';
	echo $output;
}

/* Styles und JS im Frontend hinzufügen */
function enqueue_css_js() {
  $root = get_template_directory_uri();
  $bower = $root . "/bower_components";
  $bootstrap_dir = $bower . "/bootstrap/dist";

  wp_enqueue_script('bootstrap-js',  $bootstrap_dir . '/js/bootstrap.min.js', array('jquery'));
  wp_enqueue_script('parallax-scripts-js',  $root . '/js/parallax-scripts.js', array('jquery'));
  wp_enqueue_script('jquery-easing-min-js',  $root . '/js/jquery.easing.min.js', array('jquery'));
  wp_enqueue_script('scrolling-nav-js',  $root . '/js/scrolling-nav.js', array('jquery', 'jquery-easing-min-js'));
  wp_enqueue_script('scrollspy-js',  $root . '/js/scrollspy.js', array('jquery', 'scrolling-nav-js'));
  wp_enqueue_script('popover-js',  $root . '/js/popover.js', array('jquery'));
	wp_enqueue_script('hyphenator-js', $root . '/js/Hyphenator.js');
	wp_enqueue_script('hyphenator-loader-js', $root . '/js/Hyphenator_Loader.js', array('hyphenator-js'));
	wp_enqueue_script('hyphenate-js', $root . '/js/hyphenate.js', array('hyphenator-js', 'hyphenator-loader-js', 'jquery'));


  wp_enqueue_style('bootstrap-css', $bootstrap_dir . '/css/bootstrap.min.css');
  wp_enqueue_style('style-css', $root . '/style.css');
	wp_enqueue_style('animation-css', $root . '/css/animation.css');
	wp_enqueue_style('popover-css', $root . '/css/popover.css');

  wp_enqueue_style('lato-font', 'https://fonts.googleapis.com/css?family=Lato:400,700,900');
  wp_enqueue_style('arapey-font', 'https://fonts.googleapis.com/css?family=Arapey:400italic');
}
add_action('wp_enqueue_scripts', 'enqueue_css_js');

/* Advanced Custom Fields für die Anzeige der Backendelemente laden */
include_once 'acf.php';

/* Nicht benötigte Menüpunkte im Backend von WP entfernen */
add_action( 'admin_menu', 'endcore_remove_menu_pages' );
function endcore_remove_menu_pages() {
  remove_menu_page('edit.php'); // Entfernt den Punkt Artikel (seit 3.5 Beitrge)
  remove_menu_page('upload.php'); // Entfernt den Punkt Mediathek
  // remove_menu_page('link-manager.php'); // Entfernt den Punkt Links (nur fr Versionen vor 3.5)
  // remove_menu_page('edit.php?post_type=page'); // Entfernt den Punkt Seiten
  remove_menu_page('edit-comments.php'); // Entfernt den Punkt Kommentare
}
