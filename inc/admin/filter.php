<?php
function remove_core_updates(){
    global $wp_version;
    return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_plugins','remove_core_updates'); // disable plugin
add_filter('pre_site_transient_update_themes','remove_core_updates');  // disable themes

// Change featured image default
add_filter('admin_post_thumbnail_html','change_thumbnail_html');
function change_thumbnail_html( $content ) 
{    
    $featured = str_replace(__('Set featured image'), __('Set Image size: 700x448 px'), $content);
    if ( 'featured' === get_post_type() ) {
        $featured = str_replace(__('Set featured image'), __('Set Image size: 600x448 px'), $content);
    }
    return $featured;
}
