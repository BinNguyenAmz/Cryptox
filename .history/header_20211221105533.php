<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">


<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>

	<!-- Basic Page Needs
	==================================================== -->
	<meta charset="UTF-8">

	<!-- Mobile Specific Metas
	==================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ITDragons</title>
	<meta name='robots' content='max-image-preview:large'/>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='js_composer_front-css'
		  href='<?php echo get_template_directory_uri() ?>/css/index__js_composer.min.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='cryptex-js-composer-front-css'
		  href='<?php echo get_template_directory_uri() ?>/css/index__css_composer_front.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='vcw-style-css'
		  href='<?php echo get_template_directory_uri() ?>/css/index__vcw.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='owl-carousel-css'
		  href='<?php echo get_template_directory_uri() ?>/css/index__owl.carousel.min.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='font-linearicons-css'
		  href='<?php echo get_template_directory_uri() ?>/css/linear-icons.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='font-bootstrap-css'  
		  href='<?php echo get_template_directory_uri() ?>/css/bootstrap-grid.min.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='font-fontello-css'
		  href='<?php echo get_template_directory_uri() ?>/css/fontello.min.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='cryptex-style-css'
		  href='<?php echo get_template_directory_uri() ?>/css/index__styles.css' type='text/css'
		  media='all'/>
	<link rel='stylesheet' id='cryptex-woocommerce-mod-css'
		  href='<?php echo get_template_directory_uri() ?>/css/woocommerce-mod.min.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='cryptex-responsive-css'
		  href='<?php echo get_template_directory_uri() ?>/css/responsive.min.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='cryptex-skin-css'
		  href='<?php echo get_template_directory_uri() ?>/css/skin_1.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='cryptex-google-fonts-css'
		  href='http://fonts.googleapis.com/css?family=Roboto%3A300%2C300italic%2C400%2C400italic%2C500%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic%257C%7CSource+Sans+Pro%3A300%2C300italic%2C400%2C400italic%2C500%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic%257C&amp;subset&amp;ver=5.7.4'
		  type='text/css' media='all'/>
	<script type='text/javascript'
			src='<?php echo get_template_directory_uri() ?>/js/jquery.min.js'
			id='jquery-core-js'></script>
	<script type='text/javascript'
			src='<?php echo get_template_directory_uri() ?>/js/jquery-migrate.min.js'
			id='jquery-migrate-js'></script>
	<script type='text/javascript'
			src='<?php echo get_template_directory_uri() ?>/js/add-to-cart.min.js'
			id='wc-add-to-cart-js'></script>
	<script type='text/javascript'
			src='<?php echo get_template_directory_uri() ?>/js/woocommerce-add-to-cart.js'
			id='vc_woocommerce-add-to-cart-js-js'></script>
	<script type='text/javascript'
			src='<?php echo get_template_directory_uri() ?>/js/jquery.modernizr.min.js'
			id='modernizr-js'></script>
	<meta name="generator" content="WordPress 5.7.4"/>
	<meta name="generator" content="WooCommerce 3.8.0"/>
	<link rel="canonical" href="index.html"/>
	<link rel='shortlink' href='index.html'/>
	<style type="text/css">

		.page-content-wrap {
			padding-top: 0px;
			padding-bottom: 0px;
		}
	</style>

	<noscript>
		<style>.woocommerce-product-gallery {
			opacity: 1 !important;
		}</style>
	</noscript>
	<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicon-100x100.png"
		  sizes="32x32"/>
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.png"
		  sizes="192x192"/>
	<link rel="apple-touch-icon-precomposed"
		  href="<?php echo get_template_directory_uri() ?>/img/favicon.png">
	<meta name="msapplication-TileImage"
		  content="<?php echo get_template_directory_uri() ?>/img/favicon.png">
	<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1528740043420 {
		margin-bottom: 30px !important;
		padding-top: 0px !important;
		padding-bottom: 0px !important;
		background-color: #ffffff !important;
	}

	.vc_custom_1528812724439 {
		margin-bottom: 0px !important;
		padding-top: 0px !important;
		padding-bottom: 0px !important;
	}

	.vc_custom_1528812436624 {
		margin-bottom: 0px !important;
		padding-top: 0px !important;
		padding-bottom: 25px !important;
	}

	.vc_custom_1528812616539 {
		padding-top: 0px !important;
		padding-bottom: 0px !important;
	}

	.vc_custom_1528371098333 {
		padding-right: 30px !important;
		padding-left: 0px !important;
	}

	.vc_custom_1528371137372 {
		padding-left: 0px !important;
	}

	.vc_custom_1520946181153 {
		padding-left: 15px !important;
	}

	.vc_custom_1528371315289 {
		padding-top: 30px !important;
		padding-right: 30px !important;
		padding-left: 0px !important;
	}

	.vc_custom_1520944085869 {
		padding-left: 0px !important;
	}

	.vc_custom_1528812059076 {
		padding-left: 0px !important;
	}</style>
	<noscript>
		<style type="text/css"> .wpb_animate_when_almost_visible {
			opacity: 1;
		}</style>
	</noscript>

	<style>
		@font-face {
			font-family: 'fontello';
			src: url(fonts/fontello.eot);
			src: url('fonts/fontello.eot?73349828#iefix') format('embedded-opentype'), url(fonts/fontello.woff2?73349828) format('woff2'), url(fonts/fontello.woff?73349828) format('woff'), url(fonts/fontello.ttf?73349828) format('truetype'), url('fonts/fontello.svg?73349828#fontello') format('svg');
			font-weight: 400;
			font-style: normal
		}

		@font-face {
			font-family: 'Linearicons';
			src: url('fonts/Linearicons.ttf') format('truetype');
			font-weight: normal;
			font-style: normal;
		}

		[class^="licon-"], [class*="licon-"] {
			font-family: 'Linearicons';
			speak: none;
			font-style: normal;
			font-weight: normal;
			font-variant: normal;
			text-transform: none;
			line-height: 1;

			/* Enable Ligatures ================ */
			-webkit-font-feature-settings: "liga";
			-moz-font-feature-settings: "liga=1";
			-moz-font-feature-settings: "liga";
			-ms-font-feature-settings: "liga" 1;
			-o-font-feature-settings: "liga";
			font-feature-settings: "liga";

			/* Better Font Rendering =========== */
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}
	</style>
    <?php wp_head(); ?>
</head>

<body class="home page-template-default page page-id-11 theme-cryptox header-style-1 front__page no-sidebar woocommerce-no-js tribe-no-js wpb-js-composer js-comp-ver-5.7 vc_responsive">

<div class="loader">
	<div id='qLbar'></div>
</div>
<div id="wrapper" class="wrapper-container">

	<nav id="mobile-advanced" class="mobile-advanced"></nav>


	<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

    <header id="header" class="header sticky-header style-1">


        <div class="searchform-wrap">
            <div class="vc-child h-inherit">

                <form class="search-form" action="">
                    <button type="submit" class="search-button"></button>
                    <div class="wrapper">
                        <input type="text" autocomplete="off" id="s" name="s" placeholder="Start typing..." value="">
                    </div>
                </form>

                <button class="close-search-form"></button>

            </div>
        </div>

        <div class="pre-header">

            <div class="container">

                <div class="row justify-content-between">

                    <div class="col">
                        <div class="date">
                            Thursday, December 02, 2021
                        </div>
                    </div>


                </div>

            </div>

        </div><!--/ .pre-header-->

        <div class="top-header">

            <div class="container">

                <div class="row justify-content-between align-items-center">

                    <div class="col">


                        <ul class="social-icons">

                            <li><a title="Facebook" href="#"><i class="icon-facebook"></i></a></li>

                            <li><a title="Twitter" href="#"><i class="icon-twitter"></i></a></li>

                            <li><a title="Tumblr" href="#"><i class="icon-gplus-3"></i></a></li>

                            <li><a title="LinkedIn" href="#"><i class="icon-linkedin-3"></i></a></li>

                        </ul>


                    </div>

                    <div class="col">

                        <div class="logo-wrap" style="text-align: center">

                            <a class="logo" href="index.html" title="ITDx - News and Technology Source" rel="home">
                                <h1 style="margin: 0">LOGO</h1>
                            </a>

                        </div>

                    </div>

                    <div class="col align-right">
                        <a href="#" class="btn btn-style-4 btn-big"><i class="licon-mailbox-full"></i>Subscribe</a>
                    </div>

                </div>

            </div>

        </div><!--/ .top-header-->

        <div class="menu-holder">

            <div class="container">

                <div class="menu-wrap">

                    <div class="nav-item">

                        <nav id="main-navigation" class="main-navigation">
                            <ul id="menu-primary-menu" class="clearfix">
                                <li id="nav-menu-item-27"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-11 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children  default-dropdown">
                                    <a href="index.html">Home</a>
                                    <div class="sub-menu-wrap">
                                        <ul class="sub-menu">
                                            <li id="nav-menu-item-28"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-11 current_page_item ">
                                                <a href="index.html">Home – Blog</a></li>
                                            <li id="nav-menu-item-595"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                    #>Home
                                                – Corporate</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="nav-menu-item-565"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  default-dropdown">
                                    <a href="#">ICO Calendar</a>
                                    <div class="sub-menu-wrap">
                                        <ul class="sub-menu">
                                            <li id="nav-menu-item-1379"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                    #>Ultimate
                                                ITD Shortcodes</a></li>
                                            <li id="nav-menu-item-1350"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                    #>Virtual
                                                Coin Widgets</a></li>
                                            <li id="nav-menu-item-566"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                    #>ICO
                                                List</a></li>
                                            <li id="nav-menu-item-591"
                                                class="menu-item menu-item-type-post_type menu-item-object-ico "><a
                                                    #>Single
                                                ICO Page</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="nav-menu-item-537"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  default-dropdown">
                                    <a href="#">Events</a>
                                    <div class="sub-menu-wrap">
                                        <ul class="sub-menu">
                                            <li id="nav-menu-item-538"
                                                class="menu-item menu-item-type-custom menu-item-object-custom "><a
                                                    #>Events
                                                List</a></li>
                                            <li id="nav-menu-item-539"
                                                class="menu-item menu-item-type-custom menu-item-object-custom "><a
                                                    #>Events
                                                by Month</a></li>
                                            <li id="nav-menu-item-536"
                                                class="menu-item menu-item-type-post_type menu-item-object-tribe_events ">
                                                <a #>Single
                                                    Event Page</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="nav-menu-item-30"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  default-dropdown">
                                    <a href="#">Pages</a>
                                    <div class="sub-menu-wrap">
                                        <ul class="sub-menu">
                                            <li id="nav-menu-item-19"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                    href="#">About
                                                Us</a></li>
                                            <li id="nav-menu-item-220"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children ">
                                                <a href="#">Our
                                                    Team</a>
                                                <ul class="sub-menu">
                                                    <li id="nav-menu-item-221"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Team
                                                            Overview</a></li>
                                                    <li id="nav-menu-item-1102"
                                                        class="menu-item menu-item-type-post_type menu-item-object-team-members ">
                                                        <a href="#">Team
                                                            Member Page</a></li>
                                                </ul>
                                            </li>
                                            <li id="nav-menu-item-368"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children ">
                                                <a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li id="nav-menu-item-369"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Services
                                                            Overview</a></li>
                                                    <li id="nav-menu-item-413"
                                                        class="menu-item menu-item-type-post_type menu-item-object-services ">
                                                        <a href="#">Single
                                                            Service Page</a></li>
                                                </ul>
                                            </li>
                                            <li id="nav-menu-item-323"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children ">
                                                <a href="#">Portfolio</a>
                                                <ul class="sub-menu">
                                                    <li id="nav-menu-item-324"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a #>Standard
                                                            – 2 Columns</a></li>
                                                    <li id="nav-menu-item-322"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Portfolio
                                                            Grid – 3 Columns</a></li>
                                                    <li id="nav-menu-item-321"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Gallery</a>
                                                    </li>
                                                    <li id="nav-menu-item-414"
                                                        class="menu-item menu-item-type-post_type menu-item-object-portfolio ">
                                                        <a href="#">Single
                                                            Portfolio Post</a></li>
                                                </ul>
                                            </li>
                                            <li id="nav-menu-item-358"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                    href="#">Contact</a>
                                            </li>
                                            <li id="nav-menu-item-934"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                    href="#">Coming
                                                Soon Page</a></li>
                                            <li id="nav-menu-item-936"
                                                class="menu-item menu-item-type-custom menu-item-object-custom "><a
                                                    href="#">404
                                                Page</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="nav-menu-item-29"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  multicolumn">
                                    <a href="#">Features</a>
                                    <div class="sub-menu-wrap">
                                        <ul class="sub-menu">
                                            <li id="nav-menu-item-24"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children ">
                                                <a>ELEMENTS 1</a>
                                                <ul class="sub-menu">
                                                    <li id="nav-menu-item-92"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Accordions
                                                            &#038; Toggles</a></li>
                                                    <li id="nav-menu-item-117"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Alert
                                                            Boxes &#038; Buttons</a></li>
                                                    <li id="nav-menu-item-120"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Dividers
                                                            &#038; Pagination</a></li>
                                                    <li id="nav-menu-item-118"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Call
                                                            to Actions</a></li>
                                                    <li id="nav-menu-item-119"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Counters,
                                                            Charts &#038; Progress Bars</a></li>
                                                </ul>
                                            </li>
                                            <li id="nav-menu-item-91"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children ">
                                                <a>ELEMENTS 2</a>
                                                <ul class="sub-menu">
                                                    <li id="nav-menu-item-88"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Icon
                                                            &#038; Info Boxes</a></li>
                                                    <li id="nav-menu-item-122"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Tables
                                                            &#038; Pricing Tables</a></li>
                                                    <li id="nav-menu-item-121"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Tabs
                                                            &#038; Tour Sections</a></li>
                                                    <li id="nav-menu-item-124"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Team
                                                            Members &#038; Partners</a></li>
                                                    <li id="nav-menu-item-123"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Testimonials</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="nav-menu-item-90"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children ">
                                                <a>ELEMENTS 3</a>
                                                <ul class="sub-menu">
                                                    <li id="nav-menu-item-87"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Dropcaps
                                                            &#038; Blockquotes</a></li>
                                                    <li id="nav-menu-item-126"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Headings
                                                            &#038; Paragraphs</a></li>
                                                    <li id="nav-menu-item-125"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="#">Highlights,
                                                            Tooltips &#038; Listings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="nav-menu-item-22"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  default-dropdown">
                                    <a href="#">News</a>
                                    <div class="sub-menu-wrap">
                                        <ul class="sub-menu">
                                            <li id="nav-menu-item-972"
                                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children ">
                                                <a href="#">Category</a>
                                                <ul class="sub-menu">
                                                    <li id="nav-menu-item-974"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-category ">
                                                        <a href="#">2
                                                            Columns</a></li>
                                                    <li id="nav-menu-item-973"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-category ">
                                                        <a href="#">3
                                                            Columns</a></li>
                                                    <li id="nav-menu-item-975"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-category ">
                                                        <a href="#">List</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="nav-menu-item-21"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                    href="#">Classic</a>
                                            </li>
                                            <li id="nav-menu-item-20"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                    href="#">Masonry</a>
                                            </li>
                                            <li id="nav-menu-item-416"
                                                class="menu-item menu-item-type-post_type menu-item-object-post "><a
                                                    href="detail.html">Single
                                                News Page</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="nav-menu-item-23"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  default-dropdown">
                                    <a href="#">Shop</a>
                                    <div class="sub-menu-wrap">
                                        <ul class="sub-menu">
                                            <li id="nav-menu-item-31"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                    href="#">Shop</a>
                                            </li>
                                            <li id="nav-menu-item-483"
                                                class="menu-item menu-item-type-post_type menu-item-object-product "><a
                                                    href="#">Single
                                                Product Page</a></li>
                                            <li id="nav-menu-item-484"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                    href="#">Cart</a>
                                            </li>
                                            <li id="nav-menu-item-485"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                    href="#">Checkout</a>
                                            </li>
                                            <li id="nav-menu-item-486"
                                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                                    href="#">My
                                                Account</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>

                    </div>

                    <div class="search-holder">

                        <button type="button" class="search-button"></button>


                        <div class="shop-cart">

                            <button class="sc-cart-btn dropdown-invoker"><span class="licon-cart"></span></button>

                            <div class="shopping-cart dropdown-window">
                                <div class="widget_shopping_cart_content"></div>
                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div><!--/ .menu-holder-->    </header><!--/ #header -->