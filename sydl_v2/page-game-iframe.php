<?php 
/* Template Name: page-test */
?>
<?php
/**
 * The template for displaying all page-test.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<?php 
$url = $_GET["url"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<title></title>
</head>
<body style="margin: 0;padding: 0;">
<iframe  id="iframepage" name="iframepage" frameBorder=0 scrolling=no width="100%" src="<?php echo $url;?>"></iframe>
<?php 
$post = get_post(256);
echo $post->post_content;?>
<script type="text/javascript" language="javascript"> 
window.onload = function(){
	var ifm= document.getElementById("iframepage"); 
	ifm.height = window.innerHeight;
}
</script>
</body>
</html>