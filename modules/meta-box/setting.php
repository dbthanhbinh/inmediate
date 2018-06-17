<?php
//// Re-define meta box path and URL
define( 'RWMB_URL', trailingslashit( get_stylesheet_directory_uri() . '/modules/meta-box' ) );
define( 'RWMB_DIR', trailingslashit( STYLESHEETPATH . '/modules/meta-box' ) );
//// Include the meta box script
require_once RWMB_DIR . 'meta-box.php';
//// Include the meta box definition (the file where you define meta boxes, see `demo/demo.php`)
require_once TEMPLATEPATH.'/modules/meta-box/demo/demo.php';