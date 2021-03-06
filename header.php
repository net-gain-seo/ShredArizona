<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
   <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i" rel="stylesheet">

    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-5997020-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-5997020-1');
	</script>
    <!-- Call Tracking Script -->
    <script async src="//193452.tctm.co/t.js"></script>
</head>

<body <?php body_class(); ?>>

<header class="container-fluid site-header">
    <div class="container flex-header">
        <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt=""></a></div>
        <div class="header-block">
            <div class="inner-block">
                <span id="tagline">Don't Dread It, Let A-1 Shred It!</span><div class="phone"><a href="tel:16024413339">Call (602) 441-3339</a></div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="container padding0">
              <div class="stickylogo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-sticky.png" alt=""></a></div>
              <div class="mobile-icons">
                <a href="javascript:void(0);" id="navToggle" class="nav-toggle">
                    <i class="fa fa-bars"></i>
                    <span>MENU</span>
                </a>
                <a href="tel:16024413339" class="nav-phone">
                    <i class="fa fa-phone"></i>
                    <span>CALL</span>
                </a>

                <a href="<?php echo home_url(); ?>/contact/" class="nav-contact">
                    <i class="fa fa-envelope"></i>
                    <span>CONTACT</span>
                </a>
            </div>
            <nav id="mainNav" class="mobile-nav" role="navigation">
              <a href="javascript:void(0);" class="get-quote" data-toggle="modal" data-target="#popForm">GET A QUOTE</a>
               <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '' ) ); ?>
            </nav>
        </div>
    </div>
</header>
<main>
