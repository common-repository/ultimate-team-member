<?php
/**
 * @package UltimateTeam
 */
namespace Inc\Base;

class CustomPostType extends BaseController {

	public function register() {

		// create Custom Post with This Hook
		add_action( 'init', array( $this, 'customPostType' ) );
	}


	//Custom Post Functions
	public function customPostType() {
			register_post_type( 'ut_member', array(
				'labels'        => array(
					'name'          => __( 'Team Member', 'utm' ),
					'singular_name' => __( 'ultimate Team Member', 'utm' ),
					'add_new_item'  => __( 'Add new hover item', 'utm'),
				),
				'public'        => true,
				'supports'      => array( 'title' ),
				'has_archive'   => true,
				'rewrite'       => array( 'slug' => 'team-member' ),
				'menu_icon'     => 'dashicons-format-image',
				'menu_position' => 20,
			) );

	}
}