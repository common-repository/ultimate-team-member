<?php
$options = get_post_meta( $id, 'ult_options', true );

$style         = $options["utm_style"];

if ($style == 'style1' || $style == 'style3') {
	$group = $options['ult_group1_option'];
} else if ($style == 'style2') {
	$group = $options['ult_group2_option'];
}

//var_dump($group); exit();

$item_column = $options["team_item_column"];
$item_center = $options["items_center"];

//Team Font Typography
$mnfsize        = $options["mnfsize"];
$mlfsize        = $options["mlfsize"];
$mdfsize        = $options["mdfsize"];


//Team Color Typhography
$utmmaincolor = $options["maincolorgroup"]["utmmaincolor"];

//var_dump($options ["utmfontfamily"]); exit();


$mnamecolor = $options["minfogroup"]["mnamecolor"];
$mlabelcolor = $options["minfogroup"]["mlabelcolor"];
$mdescolor = $options["minfogroup"]["mdescolor"];


$utmiconcolor = $options["sinfogroup"]["utmiconcolor"];
$iconhovercolor = $options["sinfogroup"]["iconhovercolor"];
$iconbghovercolor = $options["sinfogroup"]["iconbghovercolor"];


$utmfontfamily = $options['utmfontfamily']['family'];
$utmfontweight = $options['utmfontfamily']['weight'];



// Title Font
if ( $utmfontfamily ) {
	$utmfontfamily = str_replace( " ", "+", $utmfontfamily );

	echo '<style type="text/css">
						@import url("https://fonts.googleapis.com/css?family=' . $utmfontfamily . '");
				</style>';

	$utmfontfamily = str_replace( "+", " ", $utmfontfamily );
}

//echo $utmfontfamily; exit();