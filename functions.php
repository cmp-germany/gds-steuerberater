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

function enqueue_css_js() {
  $root = get_template_directory_uri();
  $bower = $root . "/bower_components";
  $bootstrap_dir = $bower . "/bootstrap/dist";

  wp_enqueue_script('bootstrap-js',  $bootstrap_dir . '/js/bootstrap.min.js', array('jquery'));
  wp_enqueue_script('parallax-js',  $bower . '/parallax.js/parallax.js', array('jquery'));
  wp_enqueue_script('parallax-scripts-js',  $root . '/js/parallax-scripts.js', array('jquery', 'parallax-js'));
  wp_enqueue_script('jquery-easing-min-js',  $root . '/js/jquery.easing.min.js', array('jquery'));
  wp_enqueue_script('scrolling-nav-js',  $root . '/js/scrolling-nav.js', array('jquery', 'jquery-easing-min-js'));
  wp_enqueue_script('scrollspy-js',  $root . '/js/scrollspy.js', array('jquery', 'scrolling-nav-js'));


  wp_enqueue_style('bootstrap-css', $bootstrap_dir . '/css/bootstrap.min.css');
  wp_enqueue_style('style-css', $root . '/style.css');

  wp_enqueue_style('lato-font', 'https://fonts.googleapis.com/css?family=Lato:400,700,900');
  wp_enqueue_style('arapey-font', 'https://fonts.googleapis.com/css?family=Arapey:400italic');
}
add_action('wp_enqueue_scripts', 'enqueue_css_js');
