<?php

/*
 *  ACF Pro Fields for UAMS-2016
 */


//if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_57fd5b6e0d942',
	'title' => 'Page Options',
	'fields' => array (
		array (
			'key' => 'field_57fd5dffccc90',
			'label' => 'Action Menu',
			'name' => 'action_menu_active',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Show Action Menu',
			'default_value' => 0,
		),
		array (
			'key' => 'field_57fd5bb2de8d5',
			'label' => 'Action Menu Items',
			'name' => 'action_menu',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_57fd5dffccc90',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 3,
			'max' => 6,
			'layout' => 'block',
			'button_label' => 'Add Icon',
			'sub_fields' => array (
				array (
					'key' => 'field_57fd5be1de8d6',
					'label' => 'Link Title',
					'name' => 'action_link_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_57fd5c20de8d7',
					'label' => 'Link Icon',
					'name' => 'action_link_icon',
					'type' => 'select',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'ic-flag' => 'ic-flag',
						'ic-check' => 'ic-check',
						'ic-minus' => 'ic-minus',
						'ic-person' => 'ic-person',
						'ic-plus' => 'ic-plus',
						'ic-camera' => 'ic-camera',
						'ic-mail' => 'ic-mail',
						'ic-search' => 'ic-search',
						'ic-key' => 'ic-key',
						'ic-clipboard' => 'ic-clipboard',
						'ic-bookmark' => 'ic-bookmark',
						'ic-ticket' => 'ic-ticket',
						'ic-heart' => 'ic-heart',
						'ic-watch' => 'ic-watch',
						'ic-letter' => 'ic-letter',
						'ic-marker' => 'ic-marker',
						'ic-social' => 'ic-social',
						'ic-close' => 'ic-close',
						'ic-calendar' => 'ic-calendar',
						'ic-pencil' => 'ic-pencil',
						'ic-computer' => 'ic-computer',
						'ic-page' => 'ic-page',
						'ic-view' => 'ic-view',
						'ic-eating' => 'ic-eating',
						'ic-book' => 'ic-book',
						'ic-stop' => 'ic-stop',
						'ic-compass' => 'ic-compass',
						'ic-home' => 'ic-home',
						'ic-play' => 'ic-play',
						'ic-picture' => 'ic-picture',
						'ic-address-book' => 'ic-address-book',
						'ic-map' => 'ic-map',
						'ic-music' => 'ic-music',
						'ic-settings' => 'ic-settings',
						'ic-tools' => 'ic-tools',
						'ic-globe' => 'ic-globe',
						'ic-briefcase' => 'ic-briefcase',
						'ic-pause' => 'ic-pause',
						'ic-trash' => 'ic-trash',
						'ic-right-arrow-full' => 'ic-right-arrow-full',
						'ic-list' => 'ic-list',
						'ic-page2' => 'ic-page2',
						'ic-right-arrow' => 'ic-right-arrow',
						'ic-podium' => 'ic-podium',
						'ic-directions' => 'ic-directions',
						'ic-capitol' => 'ic-capitol',
						'ic-map-marker' => 'ic-map-marker',
						'ic-passport' => 'ic-passport',
						'ic-administration' => 'ic-administration',
						'ic-plane' => 'ic-plane',
						'ic-handshake' => 'ic-handshake',
						'ic-suitcase' => 'ic-suitcase',
						'ic-globe2' => 'ic-globe2',
						'ic-umbrella' => 'ic-umbrella',
						'ic-ribbon' => 'ic-ribbon',
						'ic-money' => 'ic-money',
					),
					'default_value' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 1,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array (
					'key' => 'field_57fd6128b5f60',
					'label' => 'External',
					'name' => 'action_link',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '10',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
				),
				array (
					'key' => 'field_57fd5c3dde8d8',
					'label' => 'Internal URL',
					'name' => 'action_link_page',
					'type' => 'page_link',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_57fd6128b5f60',
								'operator' => '!=',
								'value' => '1',
							),
						),
					),
					'wrapper' => array (
						'width' => '40',
						'class' => '',
						'id' => '',
					),
					'post_type' => array (
					),
					'taxonomy' => array (
					),
					'allow_null' => 0,
					'allow_archives' => 1,
					'multiple' => 0,
				),
				array (
					'key' => 'field_57fd60fab5f5f',
					'label' => 'External URL',
					'name' => 'action_link_url',
					'type' => 'url',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_57fd6128b5f60',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array (
						'width' => '40',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/template-home.php',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/template-home-slider.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));
/* Home Slider */
acf_add_local_field_group(array (
	'key' => 'hs_options',
	'title' => 'Slide Options',
	'fields' => array (
		array (
			'key' => 'field_hs_content',
			'label' => 'Slide Content',
			'name' => 'hs_content',
			'type' => 'wysiwyg',
			'instructions' => 'Please limit to ~ 180 characters',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 0,
		),
		array (
			'key' => 'field_hs_text_color',
			'label' => 'Text Color',
			'name' => 'hs_text_color',
			'type' => 'select',
			'instructions' => 'Choose text color based on image color (ex. Dark text over a bright image)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'lighttext' => 'Light Text',
				'darktext' => 'Dark Text',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array (
			'key' => 'field_hs_order',
			'label' => 'Order',
			'name' => 'hs_order',
			'type' => 'number',
			'instructions' => 'Higher numbers appear first (ex. 50, 20, 10)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => 0,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
		array (
			'key' => 'field_hs_button_url',
			'label' => 'Link / URL',
			'name' => 'hs_button_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'URL to page or article (Enter http://)',
		),
		array (
			'key' => 'field_hs_featured_image',
			'label' => 'Desktop Image',
			'name' => '_thumbnail_id',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'id',
			'preview_size' => 'sidebar',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_hs_mobile_image',
			'label' => 'Mobile Image',
			'name' => 'hs_mobile_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'home_slider',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'author',
		2 => 'featured_image',
	),
	'active' => 1,
	'description' => '',
));
//endif;

