<?php


class ACFLocalFieldHelper extends ACFLocalFieldAPI{

	protected $acf_api;

	public function __construct() {

		$this->acf_api = $acf_api;
	}
	

	protected function buildGroupArray() {

		return $this->local_group_array = [
			'key' => $this->block_name,            
		    'location' => array(
		        array(
		            array(
		                'param' => 'block',
		                'operator' => '==',
		                'value' => 'acf/'.$this->block_name,
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
		    'description' => ''
		];
	}

	protected function selectField($args) {

		foreach ($args as $key => $value) {
				$choices[$key] = $value;					
			}				

			$this->field_props_array['choices'] = $choices;	

	}


	protected function repeaterField() {
		
		$sub_fields = $this->repeater_sub_fields;
			foreach ($sub_fields as $sub_filed_type => $sub_field_title) {				
				
				$sub_fields = array(			
					
					'key' => $sub_field_title,
					'label' => $sub_field_title,
					'name' => $sub_field_title,
					'type' => $sub_filed_type,
					'instructions' => '',
					'required' => 0,
					'parent' => $this->key_and_name
					
							
				);

				$this->acf_api->registerField( $sub_fields );
			}		
		
	}







	protected function keyNameUnify($title) {

		if ($title) {
			
			if (strpos($title, ' ') !== false || strpos($title, '_') !== false) {
				$key_and_name = str_replace(' ', '-', $title);
			}else {
				$key_and_name = $title;
			}

			return strtolower( $key_and_name );
		}
		// fallback
		return false;

	}



}