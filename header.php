<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri() ?>/favicon.png" />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
		
	<!-- faq -->
	<?php if(is_page( 'faqs' )): ?>
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/faq.css" type="text/css" media="all">
	<?php endif ?>

	<?php wp_head(); ?>
	<link type="text/css" rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/animate.css">
    <link type="text/css" rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/style.min.css">

    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118637328-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-118637328-1');
	</script> -->
</head>
<body <?php body_class(); ?>>
	<div class="main-page">	
        <header>
            <div class="site-header" id="top-navigation">
                <div class="container">
                    <div class="row">
                        <div class="logo col-lg-3 col-9">
                            <a href="<?= site_url() ?>" class="logo-site">Logo</a>
                        </div>
                        <nav class="navbar navbar-expand-lg navbar-light page-menu col-lg-9 col-3">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <?php
                                $siteUrl = false; 
                                if(is_home() || is_front_page()) {
                                    $siteUrl = true;
                                }
                                ?>
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?= $siteUrl ? '' : site_url()?>#about-us">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $siteUrl ? '' : site_url()?>#teams">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $siteUrl ? '' : site_url()?>#token">Token</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $siteUrl ? '' : site_url()?>#road-map">Roadmap</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $siteUrl ? '' : site_url()?>#news">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $siteUrl ? '' : site_url()?>#events">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= site_url()?>/faqs">Faq</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link whitePaper" href="https://inmediate.io/Inmediate_Whitepaper_V1.2.pdf">White paper</a>
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
        </header>
        <?php if(is_home() || is_front_page()):?>
        <div class="page-header">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-12 headerText animate fadeInLeft">
                    <h1>The Smart Insurance Platform</h1>
                    <p>Making policies transparent and trustworthy, by powering
                    <br>Smart Contract Insurance</p>
                    <div class="groupsIcon text">
                        <a target="_blank" href="https://inmediate.io/Eco_System_Concept_Paper.pdf"><span class="icon icon01">Ecosytem concept paper</span></a>
                        <a target="_blank" href="https://t.me/inmediate"><span class="icon icon02">Join us on telegram</span></a>
                    </div>
                    <?php 
                        get_template_part( 'template-parts/subscribe/content', 'sub' );
                    ?>
                    <?php 
                    get_template_part( 'template-parts/social/content', 'icons' );
                    ?>
                </div>
                </div>
            </div>
            </div>
        <?php endif ?>