<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

class ApTaxiAssetsLoad {
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'aptaxi_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'aptaxi_scripts' ) );
	}

	public function aptaxi_styles() {
		$suffix = ( WP_DEBUG === true ) ? '' : '.min';
		wp_enqueue_style( 'aptaxi-fontawesome', get_template_directory_uri() . '/assets/lib/fontawesome/css/all' . $suffix . '.css', array(), wp_get_theme( 'Apeks Taxi' )->get( 'Version' ) );
		wp_enqueue_style( 'aptaxi-layout', get_template_directory_uri() . '/assets/css/layout' . $suffix . '.css', array(), wp_get_theme( 'Apeks Taxi' )->get( 'Version' ) );
		wp_enqueue_style( 'aptaxi-header', get_template_directory_uri() . '/assets/css/header' . $suffix . '.css', array(), wp_get_theme( 'Apeks Taxi' )->get( 'Version' ) );
		wp_enqueue_style( 'aptaxi-navbar', get_template_directory_uri() . '/assets/css/navbar' . $suffix . '.css', array(), wp_get_theme( 'Apeks Taxi' )->get( 'Version' ) );
		wp_enqueue_style( 'aptaxi-style', get_template_directory_uri() . '/assets/css/style' . $suffix . '.css', array(), wp_get_theme( 'Apeks Taxi' )->get( 'Version' ) );
		wp_enqueue_style( 'aptaxi-footer', get_template_directory_uri() . '/assets/css/footer' . $suffix . '.css', array(), wp_get_theme( 'Apeks Taxi' )->get( 'Version' ) );
	}

	public function aptaxi_scripts() {
		$suffix = ( WP_DEBUG === true ) ? '' : '.min';
		wp_enqueue_script( 'aptaxi-mask', get_template_directory_uri() . '/assets/js/jquery.mask.js' , array('jquery'), wp_get_theme( 'Apeks Taxi' )->get( 'Version' ), true );
		wp_enqueue_script( 'aptaxi-common', get_template_directory_uri() . '/assets/js/common' . $suffix . '.js', array('jquery'), wp_get_theme( 'Apeks Taxi' )->get( 'Version' ), true );
		wp_localize_script( 'aptaxi-common', 'aptaxiData', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	}
} 