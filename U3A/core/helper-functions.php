<?php
/**
 * Helper functions for LeadEngine Theme.
 *
 * @package LeadEngine
 * @since 2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Fire the wp_body_open action. Backward compatibility for WordPress versions < 5.2
 */
if ( ! function_exists( 'wp_body_open' ) ) {
	function wp_body_open() {
		do_action( 'wp_body_open' );
  }
}

/**
 * Return Theme options.
 */
if ( ! function_exists( 'leadengine_get_option' ) ) {
	function leadengine_get_option( $option, $default = '' ) {
			$theme_options = '';
			if( class_exists( 'ReduxFramework' )) {
				$theme_options = $GLOBALS['redux_ThemeTek'];
			}

			$theme_options = apply_filters( 'leadengine_get_option_array', $theme_options, $option, $default );

			$value = ( isset( $theme_options[ $option ] ) && '' !== $theme_options[ $option ] ) ? $theme_options[ $option ] : $default;

			return apply_filters( "leadengine_get_option_{$option}", $value, $option, $default );
	}
}

/**
 * Compress CSS
 */
if ( ! function_exists( 'leadengine_compress_css' ) ) {
	function leadengine_compress_css( $css = '' ) {
			if ( ! empty( $css ) ) {
				$css = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css );
				$css = str_replace( array( "\r\n", "\r", "\n", "\t", '  ', '    ', '    ' ), '', $css );
				$css = str_replace( ', ', ',', $css );
			}
			return $css;
	}
}

/**
 * Theme activation option
 */
if ( ! function_exists( 'leadengine_activation_option' ) ) {
	function leadengine_activation_option() {
		add_option( 'keydesign-verify', 'no', '', false );
	}
}
add_action( 'admin_init', 'leadengine_activation_option' );

/**
 * Allowed HTML tags
 */
if ( ! function_exists( 'leadengine_allowed_html_tags' ) ) {
	function leadengine_allowed_html_tags() {
		$allowed_tags = array(
			 'a' => array(
				 'class' => array(),
				 'href'  => array(),
				 'rel'   => array(),
				 'title' => array(),
				 'target' => array(),
			 ),
			 'b' => array(),
			 'br' => array(),
			 'div' => array(
				 'class' => array(),
				 'title' => array(),
				 'style' => array(),
			 ),
			 'em' => array(),
			 'h1' => array(),
			 'h2' => array(),
			 'h3' => array(),
			 'h4' => array(),
			 'h5' => array(),
			 'h6' => array(),
			 'i' => array(),
			 'img' => array(
				 'alt'    => array(),
				 'class'  => array(),
				 'height' => array(),
				 'src'    => array(),
				 'width'  => array(),
			 ),
			 'p' => array(
				 'class' => array(),
			 ),
			 'span' => array(
				 'class' => array(),
				 'title' => array(),
				 'style' => array(),
			 ),
			 'strong' => array(),
		 );

		 return $allowed_tags;
	 }
 }
