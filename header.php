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
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/faq.css" type="text/css" media="all">
	<?php endif ?>

	<?php wp_head(); ?>
	<link type="text/css" rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/styles.css">
</head>
<body>
	<div class="main-page">	
        <header class="page-header">
            <div class="site-header">
                <div class="container">
                    <div class="row">
                        <div class="logo col-lg-3 col-9">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/logos/logo_reverse.png" alt="Logo" />
                        </div>
                        <nav class="navbar navbar-expand-lg navbar-light page-menu col-lg-9 col-3">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Token</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Roadmap</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Faq</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link whitePaper" href="#">White paper</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link lang" href="#">En</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <?php if(is_home() || is_front_page()):?>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 headerText">
                        <h1>The Smart Insurance Platform</h1>
                        <p>Making policies transparent and trustworth, by powering
                            <br>Smart Contract Insurance</p>
                        <div class="groupsIcon text">
                            <span class="icon icon01">Ecosytem concept pater</span>
                            <span class="icon icon02">Join us on telegram</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">SUBSCRIBE</button>
                            </div>
                        </div>
                        <div class="groupsIcon">
                            <span class="icon icon03"></span>
                            <span class="icon icon04"></span>
                            <span class="icon icon05"></span>
                            <span class="icon icon06"></span>
                            <span class="icon icon07"></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif ?>
        </header>