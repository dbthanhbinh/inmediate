<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
		
	<!-- faq -->
	<?php if(is_page( 'faq' )): ?>
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/faq.css" type="text/css" media="all">
	<?php endif ?>

	<?php wp_head(); ?>
</head>
<body>