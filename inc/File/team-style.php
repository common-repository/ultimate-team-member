<?php
if ( $style == 'style1' ) {
	$output .= '	
	        <div class="' . $item_column . '">
            <div class="utm-s1">
                <div class="utm-pic" id="utm' . $picid . '">
                    <img src="' . $image[0] . '">
                </div>
                <div class="utm-team-content">
                    <h3 class="utm-name" id="utm' . $nameid . '">' . $info['mamber_name'] . '</h3>
                    <span class="utm-label" id="utm' . $labelid . '">' . $info['member_label'] . '</span>
                </div>
                <ul class="utm-social" id="utm' . $socialid . '">
                    <li><a href="' . $info ['fig_group'] ['fig_link'] . '" class="' . $info ['fig_group'] ['fig_icon'] . '" target="_blank"></a></li>
                    <li><a href="' . $info ['sig_group'] ['sig_link'] . '" class="' . $info ['sig_group'] ['sig_icon'] . '"></a></li>
                    <li><a href="' . $info ['tig_group'] ['tig_link'] . '" class="' . $info ['tig_group'] ['tig_icon'] . '"></a></li>
                    <li><a href="' . $info ['frig_group'] ['frig_link'] . '" class="' . $info ['frig_group'] ['frig_icon'] . '"></a></li>
                </ul>
            </div>
        </div>';
}
else if ( $style == 'style2' ) {
	$output .= '<div class="' . $item_column . '">
				<div class="utm-s2">
                <img src="' . $image[0] . '" alt="">
                <div class="utm-over-layer">
                    <div class="utm-team-content">
                        <h3 class="utm-name" id="utm' . $nameid . '">' . $info['mamber_name'] . '</h3>
                    <span class="utm-label" id="utm' . $labelid . '">' . $info['member_label'] . '</span>
                        <p class="utm-description" id="utm' . $descid . '">' . $info['member_desc'] . '</p>
                    </div>
                </div>
                <ul class="utm-social-links" id="utm' . $socialid . '">
                    <li><a href="' . $info ['fig_group'] ['fig_link'] . '" class="' . $info ['fig_group'] ['fig_icon'] . '" target="_blank"></a></li>
                    <li><a href="' . $info ['sig_group'] ['sig_link'] . '" class="' . $info ['sig_group'] ['sig_icon'] . '"></a></li>
                    <li><a href="' . $info ['tig_group'] ['tig_link'] . '" class="' . $info ['tig_group'] ['tig_icon'] . '"></a></li>
                    <li><a href="' . $info ['frig_group'] ['frig_link'] . '" class="' . $info ['frig_group'] ['frig_icon'] . '"></a></li>
                </ul>
            </div></div>';
}
else if ( $style == 'style3' ) {
	$output .= '<div class="' . $item_column . '">
            <div class="utm-s3">
                <img src="' . $image[0] . '" alt="">
                <div class="utm-team-content">
                    <h3 class="utm-name" id="utm' . $nameid . '">' . $info['mamber_name'] . '</h3>
                    <span class="utm-label" id="utm' . $labelid . '">' . $info['member_label'] . '</span>
                </div>
                <ul class="utm-social" id="utm' . $socialid . '">
                    <li><a href="' . $info ['fig_group'] ['fig_link'] . '" class="' . $info ['fig_group'] ['fig_icon'] . '" id="utm' . $socialid . '"></a></li>
                    <li><a href="' . $info ['sig_group'] ['sig_link'] . '" class="' . $info ['sig_group'] ['sig_icon'] . '" id="utm' . $socialid . '"></a></li>
                    <li><a href="' . $info ['tig_group'] ['tig_link'] . '" class="' . $info ['tig_group'] ['tig_icon'] . '" id="utm' . $socialid . '"> </a></li>
                    <li><a href="' . $info ['frig_group'] ['frig_link'] . '" class="' . $info ['frig_group'] ['frig_icon'] . '" id="utm' . $socialid . '"></a></li>
                </ul>
                <div class="utm-s3-icon fa fa-plus" id="utm' . $socialid . '"></div>
            </div>
		</div>';
}