<?php

// Core local fields builder

function build_local_field_group($type) {
	
	if( function_exists('acf_add_local_field_group') ) {

		acf_add_local_field_group(array(        
		    'key' => $type,            
		    'location' => array(
		        array(
		            array(
		                'param' => 'block',
		                'operator' => '==',
		                'value' => 'acf/'.$type,
		            ),
		        ),
		    ),
		    'menu_order' => 0,
		    'position' => 'normal',
		    'style' => 'default',
		    'label_placement' => 'top',
		    'instruction_placement' => 'label',
		    'hide_on_screen' => '',
		    'active' => true,
		    'description' => '',
		));
/*
		if (is_array($fields_to_register) && count($fields_to_register) > 0) {
			foreach ($fields_to_register as $field_type => $field_value) {
				
				$field_props_array = array(
				    'key'          => $field_value['key'],
				    'label'        => $field_value['label'],
				    'name'         => $field_value['name'],
				    'type'         => $field_type,
				    'parent'       => $type,
				    'instructions' => '',
				    'required'     => $field_value['required']				    
				);

				if ($field_type === 'select' ) {
					$choices = [];
					foreach ($field_value['choices'] as $key => $value) {
						$choices[$key] = $value;					
					}				

					$field_props_array['choices'] = $choices;

				}

				acf_add_local_field( $field_props_array ); 
			}		   
		}*/
	}
	
}


function add_local_field($key,$label,$name,$type,$parent,$required=false,$choices=[]) {

	// Init the basic array
	$props_array = [
		'key'          => $key,
	    'label'        => $label,
	    'name'         => $name,
	    'type'         => $type,
	    'parent'       => $parent,
	    'instructions' => '',
	    'required'     => $required,
	    'default_value'	   => 1
	];

	if ($type === 'radio') {
		$props_array['layout'] = 'horizontal';
	}

	// for Select fields etc...
	if (is_array($choices) && count($choices) > 0) {
		$add_choices_array = [];
		foreach ($choices as $key => $value) {
			$add_choices_array[$key] = $value;					
		}				

		$props_array['choices'] = $add_choices_array;

	}
	if ($type === 'repeater') {		
		$props_array['sub_fields'] = $choices;
		$props_array['layout'] = 'block';

	}

	//$repeater_fields = make_local_field_repeater($props_array);

	// register local field
	acf_add_local_field( $props_array );

}





// for Future USE of repeater field
function add_local_field_repeater() {
	acf_add_local_field_group(array(
	'key' => '',
	'title' => 'testing',
	'fields' => array(
		array(
			'key' => 'field_5f0887d79b0da',
			'label' => 'repeater',
			'name' => 'repeater',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5f0887f49b0db',
					'label' => 'field1',
					'name' => 'field1',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));


}





































