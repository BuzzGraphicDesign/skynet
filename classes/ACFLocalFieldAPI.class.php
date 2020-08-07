<?php

class ACFLocalFieldAPI {


	public function registerFieldGroup($group_array) {

		if (function_exists('acf_add_local_field_group')) {
			
			acf_add_local_field_group($group_array);
		}
	}

	public function registerField($field_array) {

		if (function_exists('acf_add_local_field')) {
			
			acf_add_local_field($field_array);
		}
	}
	
}