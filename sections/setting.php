<?php
// $tax_query=[
//     'taxonomy'=> 'group',
//     'termSlug' => '$termSlug'
//     ]
function getQueryArgs($post_type = 'post', $tax_query=[], $posts_per_page = 100){
    // Set up our standard query args.
    if (!empty($tax_query)) {
        $query_args = array(
            'post_type'         => $post_type,
            'posts_per_page'    => $posts_per_page,
            'orderby' => 'menu_order ID',
		    'order' => 'ASC',
            'tax_query'         => array(
                array(
                    'taxonomy'  => $tax_query['taxonomy'],
                    'field'     => 'slug',
                    'terms'     => array( $tax_query['termSlug'] ),
                    'operator'  => 'IN'
                )
            )
        );
    } else {
        $query_args = array(
            'post_type'         => $post_type,
            'orderby' => 'menu_order ID',
		    'order' => 'ASC',
            'posts_per_page'    => $posts_per_page
        );
    }

    return $q = new WP_Query( $query_args );
}