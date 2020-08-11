<?php
/**

* @Core blocks and Local fields

* @Params Field Group Name

* @Params Local Fields: $key,$label,$name,$type,$parent,$required=false,$choices=[],$deafult=false

*/
require('acf-helpers.php');

// Initialise Register Block Functions
function run() {

    $auto_register_blocks = [
        'header_block_core_register',
        'text_block_core_register',
        'form_block_core_register',
        'image_block_core_register',
        'content_image_block_core_register'
    ];

    foreach ($auto_register_blocks as $function_name) {
        add_action('acf/init', $function_name);
    }
}

run();


// Register Hero Header
function header_block_core_register() {

    // Check function exists.
    if( function_exists('header_block_core_register') ) {

        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Header Hero block'),
            'description'       => __('Header Hero block.'),
            'render_template'   => 'acf-templates/hero.php',
            //'category'          => '',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'text' ),
        ));
    }
}
// Create a field Group for the Block
build_local_field_group('hero');

// Create Local Fields
add_local_field('hero-bg', 'Use Background', 'hero_bg', 'select', 'hero', false, $bg_choices);

add_local_field('hero-bg-title', 'Hero Title', 'hero_bg_title', 'wysiwyg', 'hero');

$sub_fields = [
    [
        'key' => 'hero-image-subfield',
        'label' => 'Hero Image',
        'name' => 'hero_image_subfield',
        'type' => 'image'
    ],
    [
        'key' => 'hero-image-title',
        'label' => 'Hero Title',
        'name' => 'hero_image_title',
        'type' => 'wysiwyg'
    ],
    [
        'key' => 'hero-image-text-align',
        'label' => 'Text Alignment',
        'name' => 'hero_image_text_align',
        'type' => 'radio',
        'choices'   => [
            'left'  => 'Left',
            'center'  => 'Center',
            'right'  => 'Right',
        ],
        'layout' => 'horizontal'
    ]
];
add_local_field('hero-repeater', 'Use Image', 'hero_repeater', 'repeater', 'hero', false, $sub_fields);


// Register Text Block
function text_block_core_register() {

    // Check function exists.
    if( function_exists('text_block_core_register') ) {

        acf_register_block_type(array(
            'name'              => 'text-block',
            'title'             => __('Text block'),
            'description'       => __('A custom text block.'),
            'render_template'   => 'acf-templates/text-block.php',
            //'category'          => '',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'text' ),
        ));
    }
}
// Create a field Group for the Block
build_local_field_group('text-block');


// Register new Local Fields
add_local_field('full-width-text-block', 'Full Width', 'full_width_text_block', 'true_false', 'text-block');

// Select field
add_local_field('bg-color-text-block', 'Background Colour', 'bg_color_text_block', 'select', 'text-block',false, $bg_choices);

// wysiwyg editor
add_local_field('content-text-block', 'Content', 'content_text_block', 'wysiwyg', 'text-block');
    
//************** END Text Block


// Register Form Block
function form_block_core_register() {

    // Check function exists.
    if( function_exists('form_block_core_register') ) {

        acf_register_block_type(array(
            'name'              => 'form-block',
            'title'             => __('Form block'),
            'description'       => __('A custom Form block.'),
            'render_template'   => 'acf-templates/form-block.php',
            //'category'          => '',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'text' ),
        ));
    }
}
// Register Form Block Field Group
build_local_field_group('form-block');

// Register Local Fields
add_local_field('full-width-form-block', 'Full Width', 'full_width_form_block', 'true_false', 'form-block');

add_local_field('bg-color-form-block', 'Background Colour', 'bg_color_form_block', 'select', 'form-block',false, $bg_choices);

add_local_field('form-title-form-block', 'Form Title', 'form_title_form_block', 'text', 'form-block');

add_local_field('form-id-form-block', 'Form ID', 'form_id_form_block', 'text', 'form-block');

//************** END Form Block


// Register Image Block
function image_block_core_register() {

    // Check function exists.
    if( function_exists('image_block_core_register') ) {

        acf_register_block_type(array(
            'name'              => 'image-block',
            'title'             => __('Image Block'),
            'description'       => __('An image block.'),
            'render_template'   => 'acf-templates/image-block.php',
            //'category'          => '',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'image' ),
        ));
    }
}
//Register Image Block Field Group
build_local_field_group('image-block');

// Add Local Fields
add_local_field('full-width-img-block', 'Full Width', 'full_width_img_block', 'true_false', 'image-block');

add_local_field('image-block-overlay', 'Use Overlay', 'image_block_overlay', 'true_false', 'image-block');

add_local_field('image-img-block', 'Add Image', 'image_img_block', 'image', 'image-block');

add_local_field('content-image-block', 'Content', 'content_image_block', 'wysiwyg', 'image-block');


// Content Image Block
function content_image_block_core_register() {

    // Check function exists.
    if( function_exists('content_image_block_core_register') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'content-image-block',
            'title'             => __('Content Image'),
            'description'       => __('A content image block.'),
            'render_template'   => 'acf-templates/content-image-block.php',
            //'category'          => 'common-blocks',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'text' ),
        ));
    }
}
//Register Field Group
build_local_field_group('content-image-block');

// Register Local Fields
add_local_field('content-img-block-full-width', 'Full Width', 'content_img_block_full_width','true_false', 'content-image-block');

add_local_field('content-image-block-alignment', 'Align Items', 'content_image_block_alignment', 'radio', 'content-image-block', false, $content_image_radio_choices);

add_local_field('content-image-block-image', 'Image', 'content_image_block_image', 'image', 'content-image-block');

add_local_field('content-image-block-content', 'Content', 'content_image_block_content', 'wysiwyg', 'content-image-block');












