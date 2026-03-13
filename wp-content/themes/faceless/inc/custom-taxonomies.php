<?php 
function register_tools_taxonomy() {

    $labels = [
        'name'              => 'Tools Categories',
        'singular_name'     => 'Tools Category',
        'search_items'      => 'Search Tools Categories',
        'all_items'         => 'All Tools Categories',
        'parent_item'       => 'Parent Category',
        'parent_item_colon' => 'Parent Category:',
        'edit_item'         => 'Edit Tools Category',
        'update_item'       => 'Update Tools Category',
        'add_new_item'      => 'Add New Tools Category',
        'new_item_name'     => 'New Tools Category Name',
        'menu_name'         => 'Tools Categories',
    ];

    $args = [
        'hierarchical'      => true, // как обычные категории
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [
            'slug' => 'tools-category',
            'with_front' => false,
        ],
        'show_in_rest'      => true, // важно для Gutenberg
    ];

    register_taxonomy('tools_category', ['tools'], $args);
}

add_action('init', 'register_tools_taxonomy');