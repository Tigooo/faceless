<?php

if( function_exists('acf_add_options_sub_page') ) {

    // Add parent.
    $parent = acf_add_options_page(array(
        'page_title'  => __('Website Settings'),
        'menu_title'  => __('Website Settings'),
        'icon_url' => 'dashicons-admin-tools',
        'redirect'    => true,
    ));

    // Add sub page.
    $child = acf_add_options_sub_page(array(
        'page_title'  => __('Header'),
        'menu_title'  => __('Header'),
        'parent_slug' => $parent['menu_slug'],
    ));

    // Add sub page.
    $child = acf_add_options_sub_page(array(
        'page_title'  => __('Footer'),
        'menu_title'  => __('Footer'),
        'parent_slug' => $parent['menu_slug'],
    ));

    // Add sub page.
    $child = acf_add_options_sub_page(array(
        'page_title'  => __('404 page'),
        'menu_title'  => __('404 page'),
        'parent_slug' => $parent['menu_slug'],
    ));

    // Add sub page.
    $child = acf_add_options_sub_page(array(
        'page_title'  => __('Social media'),
        'menu_title'  => __('Social media'),
        'parent_slug' => $parent['menu_slug'],
    ));

}