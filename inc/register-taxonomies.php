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