<?php 
/**
 * Skynet helper functions and definitions
 *
 * @package Skynet
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bg_choices = [
    ''		=> 'None',
    '#eee' 	=> 'Primary BG Color',
    'green' => 'Secondary BG Color',
];

$content_image_radio_choices = [
    'content-left' => 'Content left Image right',
    'content-right' => 'Content right Image left'
];

function text_alignment_flex($align_to) {
	
	if ($align_to === 'right') {
		return 'flex-end;';
	}

	return $align_to;

}


