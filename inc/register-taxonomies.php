<?php
add_action ( 'init', 'create_category_group' );
function create_category_group() {
	$labels = array (
			'name' => __ ( "Group" ),
			'singular_name' => __ ( 'Group' ),
			'search_items' => __ ( 'Search ' . 'Group' ),
			'all_items' => __ ( 'All ' . 'Group' ),
			'parent_item' => __ ( 'Group' ),
			'parent_item_colon' => __ ( 'Group' ),
			'edit_item' => __ ( 'Edit' . 'Group' ),
			'update_item' => __ ( 'Update ' . 'Group' ),
			'add_new_item' => __ ( 'Add new ' . 'Group' ),
			'new_item_name' => __ ( 'Add new ' . 'Group' ),
			'menu_name' => __ ( 'Group' ) 
	);
	
	register_taxonomy ( 'group', 'faq', array (
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'with_front' => false,
			'rewrite' => array (
					'slug' => 'group',
					'with_front' => false 
			),
			'query_var' => true,
			'rewrite' => true 
	) );
}

//add_action ( 'init', 'create_category_ct_clients_sets' );
function create_category_ct_clients_sets() {
	$labels = array (
			'name' => __ ( "Client set" ),
			'singular_name' => __ ( 'Client set' ),
			'search_items' => __ ( 'Search ' . 'Client set' ),
			'all_items' => __ ( 'All ' . 'Client set' ),
			'parent_item' => __ ( 'Client set' ),
			'parent_item_colon' => __ ( 'Client set' ),
			'edit_item' => __ ( 'Edit' . 'Client set' ),
			'update_item' => __ ( 'Update ' . 'Client set' ),
			'add_new_item' => __ ( 'Add new ' . 'Client set' ),
			'new_item_name' => __ ( 'Add new ' . 'Client set' ),
			'menu_name' => __ ( 'Client set' ) 
	);
	
	register_taxonomy ( 'ct_clients_sets', 'ct_client', array (
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'with_front' => false,
			'rewrite' => array (
					'slug' => 'ct_clients_sets',
					'with_front' => false 
			),
			'query_var' => true,
			'rewrite' => true 
	) );
}

add_action ( 'init', 'create_category_ct_teams' );
function create_category_ct_teams() {
	$labels = array (
			'name' => __ ( "Team set" ),
			'singular_name' => __ ( 'Team set' ),
			'search_items' => __ ( 'Search ' . 'Team set' ),
			'all_items' => __ ( 'All ' . 'Team set' ),
			'parent_item' => __ ( 'Team set' ),
			'parent_item_colon' => __ ( 'Team set' ),
			'edit_item' => __ ( 'Edit' . 'Team set' ),
			'update_item' => __ ( 'Update ' . 'Team set' ),
			'add_new_item' => __ ( 'Add new ' . 'Team set' ),
			'new_item_name' => __ ( 'Add new ' . 'Team set' ),
			'menu_name' => __ ( 'Team set' ) 
	);
	
	register_taxonomy ( 'ct_teams', 'ct_team_person', array (
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'with_front' => false,
			'rewrite' => array (
					'slug' => 'ct_teams',
					'with_front' => false 
			),
			'query_var' => true,
			'rewrite' => true 
	) );
}