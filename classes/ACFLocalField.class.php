<?php 

class ACFLocalField extends ACFLocalFieldHelper {

	protected $block_name;
	protected $field_name;
	protected $field_key;
	protected $field_title;
	protected $field_parent;
	protected $field_type;
	protected $field_required;
	protected $local_group_array = [];
	public $repeater_sub_fields = [];
	protected $acf_helper;
	protected $key_and_name;
	protected $field_props_array = [];
	protected $acf_api;


	public function __construct() {
		$this->local_group_array = $local_group_array;
		$this->repeater_sub_fields = $repeater_sub_fields;
		$this->key_and_name = $key_and_name;
		$this->field_props_array = $field_props_array;
		$this->field_parent = $field_parent;
		$this->acf_api = new ACFLocalFieldAPI;
		

	}



	public function buildLocalGroup($block_name) {

		$this->block_name = $block_name;

		$this->field_parent = $this->block_name;

		$this->local_group_array = $this->buildGroupArray();

		$this->acf_api->registerFieldGroup($this->local_group_array);
		
	}

	public function newLocalField(String $type, String $title, Array $args=[]) {

		// unify name and key
		$this->key_and_name = $this->keyNameUnify($title);		

		$this->field_props_array = array(
		    'key'          => $this->key_and_name,
		    'label'        => $title,
		    'name'         => $this->key_and_name,
		    'type'         => $type,
		    'parent'       => $this->field_parent,
		    'instructions' => '',
		    'required'     => ''				    
		);

		// deal with inner arrays
		if ($type === 'select' ) {
			
			$this->selectField($args);		

		}

		if ($type === 'repeater') {
			$this->repeaterField();
			$this->field_props_array['button_label'] = 'Add new';
			$this->field_props_array['layout'] = 'block';		

		}

		










		$this->acf_api->registerField( $this->field_props_array );
	}

	





























}
