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
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php
if (is_single()) {
  // 自定义字段名称为 description_value
  $description = get_post_meta($post->ID, "_category_game_value", true);

  // 自定义字段名称为 keywords_value
  $keywords = get_post_meta($post->ID, "_intro_game_value", true);

  // 去除不必要的空格和HTML标签
  $description = trim(strip_tags($description));
  $keywords = trim(strip_tags($keywords));

  echo '<meta name="category_game" content="'.$description.'" />
<meta name="intro_game" content="'.$keywords.'" />';
}

?>
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
	var win_width=window.innerWidth||document.documentElement.clientWidth;
	var userAgentInfo = navigator.userAgent;
	var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
	var isPC = true;
	for (var v = 0; v < Agents.length; v++) {
		if (userAgentInfo.indexOf(Agents[v]) > 0) { isPC = false; break; }
	}
	var dr=1136/740;//设计稿的尺寸
	if(!isPC){
		document.documentElement.className="phone";
		var win_height=window.innerHeight||document.documentElement.clientHeight;
		var radio=win_height/win_width;
		radio=radio<1.44?1.44:radio>dr?dr:radio;
		var maxwidth=win_height/radio;
		if(win_height/win_width<radio){
			win_width=maxwidth;
		}
		document.documentElement.style.fontSize= (win_width/740>1?1:win_width/740) * 100+ 'px';
	}else{
		document.documentElement.className="pc";
	}
</script>
</head>
<body <?php body_class(); ?>>
	<div id="header">
		<div class="content cf">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo" />
				<strong class="logo_text">——回合制动作手游——</strong>
			</a>
			<div class="header-nav cf">
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-home">
		            <p class="line"></p>
		            <p>HOME</p>
		            <p>首页君</p>
		        </a>

		        <a href="http://localhost/wordpress1/?page_id=334" class="nav-news">
		            <p class="line"></p>
		            <p>NEWS</p>
		            <p>新闻资讯</p>
		        </a>

		        <a href="#" class="nav-bbs">
		            <p class="line"></p>
		            <p>BBS</p>
		            <p>官方论坛</p>
		        </a>
		    </div>
		
		</div>
	</div>