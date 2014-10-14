<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_author-fields',
		'title' => 'Author fields',
		'fields' => array (
			array (
				'key' => 'field_535938b0fcee5',
				'label' => 'First name',
				'name' => 'first_name',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_535938b6fcee6',
				'label' => 'Last name',
				'name' => 'last_name',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'book-author',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
