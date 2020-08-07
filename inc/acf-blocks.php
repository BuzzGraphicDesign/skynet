<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// MAIN Block Builder file
// include essential block builders




// register Theme options page
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}
add_action('acf/init', 'my_acf_op_init');

acf_add_local_field_group(array(        
        'title' => 'Theme Settings',
        'key' => 'options-page',            
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
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

    // Main Style Tab
    acf_add_local_field( array(
        'key'          => 'theme-options-tab-style',
        'label'        => 'Style',
        'name'         => 'theme-options-tab-style',
        'type'         => 'tab',
        'parent'       => 'options-page',
        'instructions' => '',
        'required'     => '',
    ) );

        acf_add_local_field( array(
            'key'          => 'theme-options-tab-style-primary-color',
            'label'        => 'Primary Colour',
            'name'         => 'style_primary_color',
            'type'         => 'color_picker',
            'parent'       => 'options-page',
            'instructions' => '',
            'required'     => '',
        ) );
        acf_add_local_field( array(
            'key'          => 'theme-options-tab-style-secondary-color',
            'label'        => 'Secondary Colour',
            'name'         => 'style_secondary_color',
            'type'         => 'color_picker',
            'parent'       => 'options-page',
            'instructions' => '',
            'required'     => '',
        ) );
        acf_add_local_field( array(
            'key'          => 'theme-options-tab-style-primary-bg-color',
            'label'        => 'Primary Background Colour',
            'name'         => 'style_primary_bg_color',
            'type'         => 'color_picker',
            'parent'       => 'options-page',
            'instructions' => '',
            'required'     => '',
        ) );
        acf_add_local_field( array(
            'key'          => 'theme-options-tab-style-secondary-bg-color',
            'label'        => 'Secondary Background Colour',
            'name'         => 'style_secondary_bg_color',
            'type'         => 'color_picker',
            'parent'       => 'options-page',
            'instructions' => '',
            'required'     => '',
        ) );
    // #end Style Tab

    // Footer Tab
    acf_add_local_field( array(
        'key'          => 'theme-options-tab-footer',
        'label'        => 'Footer',
        'name'         => 'theme-options-tab-footer',
        'type'         => 'tab',
        'parent'       => 'options-page',
        'instructions' => '',
        'required'     => '',
    ) );

    acf_add_local_field( array(
        'key'          => 'theme-options-tab-footer-primary-color',
        'label'        => 'Footer color',
        'name'         => 'footer-primary-color',
        'type'         => 'color_picker',
        'parent'       => 'options-page',
        'instructions' => '',
        'required'     => '',
    ) );











































