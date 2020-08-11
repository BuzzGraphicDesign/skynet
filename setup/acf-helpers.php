<?php 
/**
 * Skynet helper functions and definitions
 *
 * @package Skynet
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bg_choices['choices'] = [
    ''		=> 'None',
    '#eee' 	=> 'Primary BG Color',
    'green' => 'Secondary BG Color',
];

function text_alignment_flex($align_to) {
	
	if ($align_to === 'right') {
		return 'flex-end;';
	}

	return $align_to;

}


