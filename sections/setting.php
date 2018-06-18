<?php
function getQueryArgs($post_type = 'post', $posts_per_page = 6){
    // Set up our standard query args.
    $query_args = array(
        'post_type'         => $post_type,
        'posts_per_page'    => $posts_per_page
    );

    return $q = new WP_Query( $query_args );
}