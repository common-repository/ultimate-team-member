<?php if ( ! defined( 'ABSPATH' ) ) {
	die;
} // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[] = array(
	'id'        => 'ult_options',
	'title'     => 'Ultimate Team Member',
	'post_type' => 'ut_member',
	'context'   => 'normal',
	'priority'  => 'default',
	'sections'  => array(
		/////////////////////////

		// begin: a group section
		array(
			'name'   => 'section_1',
			'title'  => 'Add Members',
			'icon'   => 'fa fa-user',

			// begin: fields
			'fields' => array(

				// START STYLE FIELD//
				//////////////////////
				array(
					'id'      => 'utm_style',
					'type'    => 'select',
					'title'   => 'Select Team Style',
					'options' => array(
						'style1'  => 'Style 1',
						'style2'  => 'Style 2',
						'style3'  => 'Style 3',
					),
					'default' => 'style1',
				),
				// END STYLE FIELD//
				/////////////////////


				/////////////// Group 1 /////////////////////
				/// /////////////////////////////////////////
				array(
					'id'              => 'ult_group1_option',
					'type'            => 'group',
					'title'           => '',
					'button_title'    => 'Add New Team Member',
					'accordion_title' => 'Team Member Item',
					'dependency'      => array( 'utm_style', 'any', 'style1,style3' ),
					'fields'          => array(
						array(
							'id'    => 'imgup_1',
							'type'  => 'image',
							'title' => 'Team Member Item',
							'desc'  => 'Team Member Image Here.',
							'help'  => 'Upload Your Team Member Image Here',
						),
						array(
							'id'      => 'mamber_name', // this is must be unique
							'type'    => 'text',
							'title'   => 'Enter Member Name',
							'default' => 'Maxdew',
						),
						array(
							'id'      => 'member_label', // this is must be unique
							'type'    => 'text',
							'title'   => 'Enter Member Label',
							'default' => 'Programmer',
						),

						/// First Icon Group

						array(
							'id'     => 'fig_group',
							'type'   => 'fieldset',
							'title'  => 'First Icon',
							'fields' => array(
								array(
									'id'      => 'fig_icon',
									'title'   => 'Icon',
									'type'    => 'icon',
									'default' => 'fa fa-facebook',
								),

								array(
									'id'      => 'fig_link', // this is must be unique
									'type'    => 'text',
									'title'   => 'Icon URL',
									'desc'    => 'Put your first icon url here.',
									'help'    => 'Put your first icon url here. write url ex: http://google.com',
									'default' => 'http://facebook.com',
								),
							),
						),

						/// First Icon Group


						/// Second Icon Group

						array(
							'id'     => 'sig_group',
							'type'   => 'fieldset',
							'title'  => 'Second Icon',
							'fields' => array(
								array(
									'id'      => 'sig_icon',
									'title'   => 'Icon',
									'type'    => 'icon',
									'default' => 'fa fa-twitter',
								),

								array(
									'id'      => 'sig_link', // this is must be unique
									'type'    => 'text',
									'title'   => 'Icon URL',
									'desc'    => 'Put your first icon url here.',
									'help'    => 'Put your first icon url here. write url ex: http://google.com',
									'default' => 'http://twitter.com',
								),
							),
						), /// Second Icon Group

						/// Third Icon Group

						array(
							'id'     => 'tig_group',
							'type'   => 'fieldset',
							'title'  => 'Third Icon',
							'fields' => array(
								array(
									'id'      => 'tig_icon',
									'title'   => 'Icon',
									'type'    => 'icon',
									'default' => 'fa fa-youtube',
								),

								array(
									'id'      => 'tig_link', // this is must be unique
									'type'    => 'text',
									'title'   => 'Icon URL',
									'desc'    => 'Put your first icon url here.',
									'help'    => 'Put your first icon url here. write url ex: http://google.com',
									'default' => 'http://youtube.com',
								),
							),
						), // Third Icon Group

						// Fourth Icon Group
						array(
							'id'     => 'frig_group',
							'type'   => 'fieldset',
							'title'  => 'Fourth Icon',
							'fields' => array(
								array(
									'id'      => 'frig_icon',
									'title'   => 'Icon',
									'type'    => 'icon',
									'default' => 'fa fa-google-plus',
								),

								array(
									'id'      => 'frig_link', // this is must be unique
									'type'    => 'text',
									'title'   => 'Icon URL',
									'desc'    => 'Put your first icon url here.',
									'help'    => 'Put your first icon url here. write url ex: http://google.com',
									'default' => 'https://plus.google.com',
								),
							),
						),

						/// Third Icon Group

					),

				),
				/////////////// Group 1 /////////////////////
				/// /////////////////////////////////////////


				/////////////// Group 2 /////////////////////
				/// /////////////////////////////////////////
				array(
					'id'              => 'ult_group2_option',
					'type'            => 'group',
					'title'           => '',
					'button_title'    => 'Add New Team Member',
					'accordion_title' => 'Team Member Item',
					'dependency'      => array( 'utm_style', 'any', 'style2' ),
					'fields'          => array(
						array(
							'id'    => 'imgup_1',
							'type'  => 'image',
							'title' => 'Team Member Item',
							'desc'  => 'Team Member Image Here.',
							'help'  => 'Upload Your Team Member Image Here',
						),
						array(
							'id'      => 'mamber_name', // this is must be unique
							'type'    => 'text',
							'title'   => 'Enter Member Name',
							'default' => 'Maxdew',
						),
						array(
							'id'      => 'member_label', // this is must be unique
							'type'    => 'text',
							'title'   => 'Enter Member Label',
							'default' => 'Programmer',
						),
						array(
							'id'      => 'member_desc',
							'type'    => 'textarea',
							'title'   => 'Enter Member description',
							'default' => 'Member Information Goes Here',
						),


						/// First Icon Group

						array(
							'id'     => 'fig_group',
							'type'   => 'fieldset',
							'title'  => 'First Icon',
							'fields' => array(
								array(
									'id'      => 'fig_icon',
									'title'   => 'Icon',
									'type'    => 'icon',
									'default' => 'fa fa-facebook',
								),

								array(
									'id'      => 'fig_link', // this is must be unique
									'type'    => 'text',
									'title'   => 'Icon URL',
									'desc'    => 'Put your first icon url here.',
									'help'    => 'Put your first icon url here. write url ex: http://google.com',
									'default' => 'http://facebook.com',
								),
							),
						),

						/// First Icon Group


						/// Second Icon Group

						array(
							'id'     => 'sig_group',
							'type'   => 'fieldset',
							'title'  => 'Second Icon',
							'fields' => array(
								array(
									'id'      => 'sig_icon',
									'title'   => 'Icon',
									'type'    => 'icon',
									'default' => 'fa fa-twitter',
								),

								array(
									'id'      => 'sig_link', // this is must be unique
									'type'    => 'text',
									'title'   => 'Icon URL',
									'desc'    => 'Put your first icon url here.',
									'help'    => 'Put your first icon url here. write url ex: http://google.com',
									'default' => 'http://facebook.com',
								),
							),
						),

						/// Second Icon Group

						/// Third Icon Group

						array(
							'id'     => 'tig_group',
							'type'   => 'fieldset',
							'title'  => 'Third Icon',
							'fields' => array(
								array(
									'id'      => 'tig_icon',
									'title'   => 'Icon',
									'type'    => 'icon',
									'default' => 'fa fa-google-plus',
								),

								array(
									'id'      => 'tig_link', // this is must be unique
									'type'    => 'text',
									'title'   => 'Icon URL',
									'desc'    => 'Put your first icon url here.',
									'help'    => 'Put your first icon url here. write url ex: http://google.com',
									'default' => 'http://facebook.com',
								),
							),
						),

						/// Third Icon Group

						/// Fourth Icon Group

						array(
							'id'     => 'frig_group',
							'type'   => 'fieldset',
							'title'  => 'Fourth Icon',
							'fields' => array(
								array(
									'id'      => 'frig_icon',
									'title'   => 'Icon',
									'type'    => 'icon',
									'default' => 'fa fa-youtube',
								),

								array(
									'id'      => 'frig_link', // this is must be unique
									'type'    => 'text',
									'title'   => 'Icon URL',
									'desc'    => 'Put your first icon url here.',
									'help'    => 'Put your first icon url here. write url ex: http://google.com',
									'default' => 'http://facebook.com',
								),

							),
						),

						/// Third Icon Group

					),

				),
				/////////////// Group 2 /////////////////////
				/// /////////////////////////////////////////

			), // end: fields
		), // end: a section

		// begin: a section Team Options
		array(
			'name'   => 'section_2',
			'title'  => 'Team Options',
			'icon'   => 'fa fa-cogs',
			'fields' => array(

				// ITEM TEAM COLUMN START//
				array(
					'id'      => 'team_item_column',
					'type'    => 'radio',
					'title'   => 'Items in Column',
					'options' => array(
						'col-md-12 col-sm-6' => '1 Item',
						'col-md-6 col-sm-6'  => '2 Item',
						'col-md-4 col-sm-6'  => '3 Item',
						'col-md-3 col-sm-6'  => '4 Item',
					),
					'default' => 'col-md-4 col-sm-6',
				),
				// ITEM TEAM COLUMN END//


				// ITEM TEAM ITEMS CENTER START//
				array(
					'id'      => 'items_center',
					'type'    => 'switcher',
					'title'   => 'Items Center?',
					'default' => false,
				),
				// ITEM TEAM ITEMS CENTER END//

				// ITEM TEAM ITEMS CENTER START//
				array(
					'id'      => 'sltarget',
					'type'    => 'switcher',
					'title'   => 'Icon link new tab?',
					'default' => false,
				),
				// ITEM TEAM ITEMS CENTER END//

			),
		),
		// end: a section

		// begin: a section Team Typhography
		array(
			'name'   => 'section_3',
			'title'  => 'Typography Font',
			'icon'   => 'fa fa-text-width',
			'fields' => array(

				// MEMBER NAME FONT FAMILY//
				array(
					'id'        => 'utmfontfamily',
					'type'      => 'typography',
					'title'     => 'Font Family',
					'default'   => array(
						'family'  => 'Roboto Condensed',
						'variant' => '800',
						'font'    => 'google', // this is helper for output
					),
				),
				// MEMBER NAME FONT FAMILY//

				// MEMBER NAME FONT SIZE//
				array(
					'id'      => 'mnfsize',
					'type'    => 'number',
					'title'   => 'Name Font Size',
					'after'   => '<i class="cs-text-muted">(px)</i>',
					'desc'    => 'default value is 24px',
					'default' => '24',
				),
				// MEMBER NAME FONT SIZE//

				// MEMBER LABEL FONT SIZE//
				array(
					'id'      => 'mlfsize',
					'type'    => 'number',
					'title'   => 'Label Font Size',
					'after'   => '<i class="cs-text-muted">(px)</i>',
					'desc'    => 'default value is 15px',
					'default' => '15',
				),
				// MEMBER LABEL FONT SIZE//

				// MEMBER DESCRIPTION FONT SIZE//
			array(
					'id'      => 'mdfsize',
					'type'    => 'number',
					'title'   => 'Description Font Size',
					'after'   => '<i class="cs-text-muted">(px)</i>',
					'desc'    => 'Description field only work with style2. Default value is 12px',
					'help'    => 'Description field only work with style2',
					'default' => '12',
				),
				// MEMBER DESCRIPTION FONT SIZE//

			),
		),

		// begin: a section Typography Color
		array(
			'name'  => 'section_4',
			'title' => 'Typography Color',
			'icon'  => 'fa fa-paint-brush',

			'fields' => array(

				// Team Main Color Group
				array(
					'id'     => 'maincolorgroup',
					'type'   => 'fieldset',
					'title'  => 'Team Main Color',
					'fields' => array(
						// Main Color
						array(
							'id'      => 'utmmaincolor',
							'type'    => 'color_picker',
							'title'   => 'Main Color',
							'default' => '#0026D1',
						),
					),
				),// Team Main Color Group

				// Member Info Group
				array(
					'id'     => 'minfogroup',
					'type'   => 'fieldset',
					'title'  => 'Member Info Color',
					'fields' => array(
						// Member Name Color
						array(
							'id'      => 'mnamecolor',
							'type'    => 'color_picker',
							'title'   => 'Name Color',
							'default' => '#4e5052',
						),
						// Member Label Color
						array(
							'id'      => 'mlabelcolor',
							'type'    => 'color_picker',
							'title'   => 'Label Color',
							'default' => '#4e5052',
						),
						// Member Description Color
						array(
							'id'      => 'mdescolor',
							'type'    => 'color_picker',
							'title'   => 'Description Color',
							'default' => '#FFFFFF',
							'help'    => 'Description Color Only work With Style2',
							'dependency'      => array( 'utm_style', 'any', 'style1' ),
						),
					),
				),// Member info color

				// Social Icon Group
				array(
					'id'     => 'sinfogroup',
					'type'   => 'fieldset',
					'title'  => 'Social Icon Area',
					'fields' => array(
						// Social Icon Color
						array(
							'id'      => 'utmiconcolor',
							'type'    => 'color_picker',
							'title'   => 'Icon Color',
							'default' => '#FFFFFF',
						),

						// Social Icon Hover Color
						array(
							'id'      => 'iconhovercolor',
							'type'    => 'color_picker',
							'title'   => 'Hover Color',
							'default' => '#0026D1',
						),

						// Social Icon Background Hover Color
						array(
							'id'      => 'iconbghovercolor',
							'type'    => 'color_picker',
							'title'   => 'Background Color',
							'default' => '#FFFFFF',
						),
					),
				), //Social Icon Group
			),
		),

	),
);

CSF_Metabox::instance( $options );
