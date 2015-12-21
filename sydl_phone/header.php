<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script type="text/javascript">
	 function viewportMeta() {
	     var e = parseInt(window.screen.width),
	         t = e / 640,
	         i = navigator.userAgent;
	         // alert (navigator.userAgent)    
	     if (/Android (\d+\.\d+)/.test(i)) {
	         var a = parseFloat(RegExp.$1);
	         document.write(a > 2.3 ? '<meta name="viewport" content="width=640, minimum-scale = ' + t + ", maximum-scale = " + t + ', target-densitydpi=device-dpi">' : '<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
	     } else document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
	 }
	 viewportMeta();
</script>
</head>

<body <?php body_class(); ?>>
	<div id="header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" />
		</a>
		<div class="head-left">
			<h1>神谕大陆</h1>
			<span>回合制动作手游</span>
		</div>	
		<a href="" class="head-menu"><span></span></a>
		<a href="" class="downgame"><img src="<?php echo get_template_directory_uri(); ?>/images/downgame.png" alt="下载游戏"></a>
	</div>