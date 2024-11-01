<?php
/**
 * @package UltimateTeam
 */
namespace Inc\Base;

class ShortcodeButton {
	public function register() {
		// Added Shortcode with ID
		add_filter( 'manage_ut_member_posts_columns', array( $this, 'ut_member_add_id_column' ) );
		add_action( 'manage_ut_member_posts_custom_column', array( $this, 'ut_member_id_column_content'), 10, 2  );

		// ShortCode custom messages Filter
		add_filter( 'post_updated_messages', array( $this, 'ut_member_updated_messages' ) );
	}


	// Show Column Shortcode
	public function ut_member_add_id_column( $columns ) {
		$columns['ut_member'] = 'Team Shortcode';

		return $columns;
	}

	//Get Hover Shortcode ID
	public function ut_member_id_column_content( $column, $id ) {
		if ( 'ut_member' == $column ) {
			$shortcode_render = '[utm id="' . $id . '"]';

			echo '<input style="min-width:210px" type=\'text\' onClick=\'this.setSelectionRange(0, this.value.length)\' value=\'' . $shortcode_render . '\' />';
		}
	}

	// ShortCode custom messages Function
	public function ut_member_updated_messages( $messages ) {

		global $post;
		$post_ID = get_the_ID();

		$messages['ut_member'] = array(
			0 => '',
			1 => sprintf( __( 'Team Member published. Shortcode is: %s' ), '' . '
<script type="text/javascript">
(function() {
    "use strict";
  // click events
  document.body.addEventListener("click", copy, true);

    // event handler
    function copy(e) {

    // find target element
    var 
      t = e.target,
      c = t.dataset.copytarget,
      inp = (c ? document.querySelector(c) : null);
      
    // is element selectable?
    if (inp && inp.select) {
      
      // select text
      inp.select();

      try {
        // copy text
        document.execCommand("copy");
        inp.blur();
        
        // copied animation
        t.classList.add("copied");
        setTimeout(function() { t.classList.remove("copied"); }, 1500);
      }
      catch (err) {
        alert("please press Ctrl/Cmd+C to copy");
      }    
    } 
    }

})();	
</script>
	
			' . '<input style="height: 30px; margin-right: 5px;" type="text" id="website" value="[utm id=\'' . $post_ID . '\']" /><button  class="button button-primary button-large" data-copytarget="#website">copy</button>' ),
			6 => sprintf( __( 'Team Member published. Shortcode is: %s' ), '' . '  ' . '
<script type="text/javascript">
(function() {
    "use strict";
  // click events
  document.body.addEventListener("click", copy, true);

    // event handler
    function copy(e) {

    // find target element
    var 
      t = e.target,
      c = t.dataset.copytarget,
      inp = (c ? document.querySelector(c) : null);
      
    // is element selectable?
    if (inp && inp.select) {
      
      // select text
      inp.select();

      try {
        // copy text
        document.execCommand("copy");
        inp.blur();
        
        // copied animation
        t.classList.add("copied");
        setTimeout(function() { t.classList.remove("copied"); }, 1500);
      }
      catch (err) {
        alert("please press Ctrl/Cmd+C to copy");
      }    
    } 
    }

})();	
</script>
<input style="height: 30px; margin-right: 5px;" type="text" id="website" value="[utm id=\'' . $post_ID . '\']" /><button  class="button button-primary button-large" data-copytarget="#website">copy</button>' ),
		);


		return $messages;

	}

}