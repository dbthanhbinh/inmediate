<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
global $meta_boxes,$wpdb,$options;
$prefix = $wpdb->prefix;



$meta_boxes = array();

// 2nd meta box
$meta_boxes[] = array(
	'id'    => 'additional_info',
	'title' => 'Infomation',
	'pages' => array( 'event'),

	'fields' => array(        		
        // DATE
		array(
			'name' => 'Day of',
			'id'   => "{$prefix}date",
			'desc' => 'Day of event',
			'type' => 'date',
			'format' => 'd MM, yy',
		),
		// TIME
		array(
			'name' => 'Time of',
			'id'   => "{$prefix}time",
			'desc' => 'Time of event',
			'type' => 'time',
			'format' => 'hh:mm:ss',
		),
		// TEXT
		array(
			'name' => 'Location',
			'id' => $prefix . 'location',
			'desc' => 'Location of event',
			'type'  => 'text',
			'std' => '',
		),		
	)
);

// For as feature, partner
$meta_boxes[] = array(
	'id'    => 'additional_references',
	'title' => 'Infomation',
	'pages' => array( 'featured', 'partner'),

	'fields' => array(
		// TEXT
		array(
			'name' => 'Link references',
			'id' => $prefix . 'reference',
			'desc' => 'Link references',
			'type'  => 'text',
			'std' => 'http://',
		),		
	)
);


/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'YOUR_PREFIX_register_meta_boxes' );
?>