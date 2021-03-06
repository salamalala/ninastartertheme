<?php


$args = [
    'label'               => __($single, ' '),
    'description'         => __($single, ' '),
    'labels'              => [
        'name'               => _x($plural, 'Post Type General Name', ' '),
        'singular_name'      => _x($single, 'Post Type Singular Name', ' '),
        'menu_name'          => __($plural, ' '),
        'parent_item_colon'  => __('Parent '.$single.':', ' '),
        'all_items'          => __('All '.$plural, ' '),
        'view_item'          => __('View '.$single, ' '),
        'add_new_item'       => __('Add New '.$single, ' '),
        'add_new'            => __('Add New', ' '),
        'edit_item'          => __('Edit '.$single, ' '),
        'update_item'        => __('Update '.$single, ' '),
        'search_items'       => __('Search '.$single, ' '),
        'not_found'          => __('Not found', ' '),
        'not_found_in_trash' => __('Not found in Trash', ' '),
    ],
    'supports'            => $support,
    'taxonomies'          => $taxonomies,
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => $menuPosition,
    'menu_icon'           => $menuIcon,
    'can_export'          => true,
    'has_archive'         => __( $archive, ' ' ),
    'rewrite'             => array('slug' => _x( $archive, 'URL slug', ' ' )),
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => $type,
    'show_in_rest'        => $rest_api,
    'template'            => $template
];
