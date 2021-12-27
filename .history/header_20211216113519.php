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
?><!doctype html>
<html <?php language_attributes(); ?>>
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
		  href='./css/index__js_composer.min.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='cryptex-js-composer-front-css'
		  href='./css/index__css_composer_front.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='vcw-style-css'
		  href='./css/index__vcw.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='owl-carousel-css'
		  href='./css/index__owl.carousel.min.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='font-linearicons-css'
		  href='./css/linear-icons.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='font-bootstrap-css'
		  href='./css/bootstrap-grid.min.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='font-fontello-css'
		  href='./css/fontello.min.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='cryptex-style-css'
		  href='./css/index__styles.css' type='text/css'
		  media='all'/>
	<link rel='stylesheet' id='cryptex-woocommerce-mod-css'
		  href='./css/woocommerce-mod.min.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='cryptex-responsive-css'
		  href='./css/responsive.min.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='cryptex-skin-css'
		  href='./css/skin_1.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='cryptex-google-fonts-css'
		  href='http://fonts.googleapis.com/css?family=Roboto%3A300%2C300italic%2C400%2C400italic%2C500%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic%257C%7CSource+Sans+Pro%3A300%2C300italic%2C400%2C400italic%2C500%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic%257C&amp;subset&amp;ver=5.7.4'
		  type='text/css' media='all'/>
	<script type='text/javascript'
			src='./js/jquery.min.js'
			id='jquery-core-js'></script>
	<script type='text/javascript'
			src='./js/jquery-migrate.min.js'
			id='jquery-migrate-js'></script>
	<script type='text/javascript'
			src='./js/add-to-cart.min.js'
			id='wc-add-to-cart-js'></script>
	<script type='text/javascript'
			src='./js/woocommerce-add-to-cart.js'
			id='vc_woocommerce-add-to-cart-js-js'></script>
	<script type='text/javascript'
			src='./js/jquery.modernizr.min.js'
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
	<link rel="icon" href="./img/favicon-100x100.png"
		  sizes="32x32"/>
	<link rel="icon" href="./img/favicon.png"
		  sizes="192x192"/>
	<link rel="apple-touch-icon-precomposed"
		  href="./img/favicon.png">
	<meta name="msapplication-TileImage"
		  content="./img/favicon.png">
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

</head>
<body class="link-body">
<?php wp_body_open(); ?>
