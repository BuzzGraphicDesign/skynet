<?php

// getting callback error, not finishing update but the changes are saved
class ACFBlockRegister extends ACFBlockSetup {

	//protected $new_block_array;
	//protected $blocks;

	public function __construct() {
		//$this->blocks = $blocks;
		//$this->build();
		//$this->init();
	}

	public function build() {
		$this->blocks = [
			'textBlock'
		];

		foreach ($this->blocks as $block_name) {
			//add_action('acf/init', $this->textBlock());
		}
	}


	public function newBlock($new_block_array) {
		$this->new_block_array = $new_block_array;
	}



	
}