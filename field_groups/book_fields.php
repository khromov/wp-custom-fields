<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_book-field',
		'title' => 'Book field',
		'fields' => array (
			array (
				'key' => 'field_53594d0c2b5d8',
				'label' => 'Author',
				'name' => 'author',
				'type' => 'relationship',
				'required' => 1,
				'return_format' => 'id',
				'post_type' => array (
					0 => 'author',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_title',
				),
				'max' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'book',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
