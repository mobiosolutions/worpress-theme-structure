<?php
/*
* Creating a function to create our CPT
*/

function wpmudev_create_post_type_demo()
{
    // set up labels
    $labels = array(
        'name' => 'demo',
        'singular_name' => 'demo',
        'add_new' => 'Add New demo',
        'add_new_item' => 'Add New demo',
        'edit_item' => 'Edit demo',
        'new_item' => 'New demo',
        'all_items' => 'All demo',
        'view_item' => 'View demo',
        'search_items' => 'Search demo',
        'not_found' => 'No Products Found',
        'not_found_in_trash' => 'No Products found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'demo',

    );
    //register post type
    register_post_type('demo', array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-post',
            'supports' => array('title', 'editor', 'page-attributes', 'thumbnail'),
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'rewrite' => array('slug' => 'demo'),
            'taxonomies' => array('category', 'post_tag'),
        )
    );
}

add_action('init', 'wpmudev_create_post_type_demo');