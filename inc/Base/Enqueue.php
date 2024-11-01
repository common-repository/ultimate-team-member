<?php
/**
 * @package UltimateTeam
 */
namespace Inc\Base;

class Enqueue extends BaseController {
	public function register() {
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'front_enqueue' ) );
	}

	public function admin_enqueue() {
		//admin enqueue scripts
		wp_enqueue_style( 'utl-admin-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', __FILE__ );

		wp_enqueue_style( 'utl-copybutton-css', $this->plugin_url . 'assets/css/backend/backend.css' );

	}

	//wp/front enqueue scripts
	public function front_enqueue() {

		if( $this->plugin_url . 'assets/css/frontend/bootstrap.css'){
			wp_enqueue_style( 'utm-front-bootstrap', $this->plugin_url . 'assets/css/frontend/bootstrap.css' );
		} else {
			wp_enqueue_style( 'utm-front-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', __FILE__ );
		}



		wp_enqueue_style( 'utl-front-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css', __FILE__ );

		wp_enqueue_style( 'utm-front-css', $this->plugin_url . 'assets/css/frontend/frontend.css' );

		/*wp_enqueue_script( 'utm-front-js', $this->plugin_url . 'assets/js/frontend/frontend.js', array( 'jquery' ), '', false );*/
	}
}