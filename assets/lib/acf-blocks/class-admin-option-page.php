<?php

/**
 * Class: ACF option page
 *
 * @author Dennis Kjellin 
 * @package DennisK
 */

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => 'Theme settings',
        'menu_title'    => 'Theme settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    // hero-image
    acf_add_options_sub_page(array(
        'page_title'    => 'Front page hero image',
        'menu_title'    => 'Hero image',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}