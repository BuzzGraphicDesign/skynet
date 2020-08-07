<?php
require_once(get_template_directory() . '/setup/acf-block-setup.php');



function register_custom_block($type, $name) {

	// register a test block.
    acf_register_block_type(array(
        'name'              => $name,
        'title'             => __($name),
        'description'       => __('A custom test block.'),
        'render_template'   => 'acf-templates/text-block-2.php',
        'category'          => 'common-blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( $type ),
    ));

    
}
add_action('acf/init', 'register_custom_block');


