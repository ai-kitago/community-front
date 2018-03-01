<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_gps%e8%a8%ad%e5%ae%9a',
		'title' => 'GPS設定',
		'fields' => array (
			array (
				'key' => 'field_5799f84928d3e',
				'label' => '緯度（latitude）',
				'name' => 'gpsearch_lat',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '35.685175',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5799f8d228d3f',
				'label' => '経度（longitude）',
				'name' => 'gpsearch_lon',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '139.7527995',
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
					'value' => 'post',
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
?>