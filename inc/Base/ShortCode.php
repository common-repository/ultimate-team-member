<?php
/**
 * @package UltimateTeam
 */
namespace Inc\Base;


class ShortCode extends BaseController {

	public function register() {

		add_shortcode( 'utm', array( $this, 'ut_member_effects_shortcode' ) );

	}

	// Register Shortcode
	public function ut_member_effects_shortcode( $atts ) {
		$item_center = $group = $id=  $button_font_style = $picid = $sltarget = $nameid = $labelid = $socialid = $item_column = $link ='';

		extract( shortcode_atts( array(
			'id' => '',
		), $atts ) );


		$q = new \WP_Query( array( 'posts_per_page' => - 1, 'post_type' => 'ut_member', 'p' => $id ) );
		while ( $q->have_posts() ) : $q->the_post();
			//$id = get_the_ID();

			// MetaBox Value
			include $this->plugin_path . "inc/File/metabox-value.php";

			$item_center = $item_center == 1 ? $item_center = 'justify-content-center' : $item_center = '';
			$sltarget = $sltarget == 1 ? $sltarget = '_blank' : $sltarget  = '';

			$output = '<div class="container"><div class="row '.$item_center.'">';

			if ( is_array( $group ) && count( $group ) >= 1 ):
				foreach ( $group as $info ) {

					// Image Value
					if ( isset( $info['imgup_1'] ) ) {
						$image = $info['imgup_1'];
						$image = wp_get_attachment_image_src( $image, 'full' );
					}

					// Image Value
					if ( empty( $info['imgup_1'] ) ) {
						//echo "great"; exit();
						$image[0] = $this->plugin_url . "assets/img/utm-dummy.png";
					}

					// Unique Id for Dynamic CSS
					require $this->plugin_path . "inc/File/unique-class.php";

					// All Team Member Style
					require $this->plugin_path . "inc/File/team-style.php";

			// Custom CSS for Dynamic CSS
			require $this->plugin_path . "inc/File/inline-css.php";
				}
			else:
				echo "You Didn't Add Team Member Items in Settings Panel Please Add Team Member Items First.";
			endif;
		$output .= '</div></div>';
		endwhile;
		wp_reset_query();

		return $output;
	}
}