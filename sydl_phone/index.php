<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="main">
	<div class="swiper-container">
    	<div class="swiper-wrapper">
    		<section class="swiper-slide slide-1">
    			<span class="road"></span>
    			<span class="slide-text text-1"><em class="text-top"></em><em class="text-bottom"></em><i>THIS TURN IS FIGHT FOR YOU</i></span>
    			<span class="top-line"></span>
    			<span class="bottom-line"></span>
    			<span class="per per-nd"></span>
    			<span class="per per-ls"></span>
    			<span class="per per-rj"></span>
    			<span class="top-img-1"></span>
	        </section>
	        <section class="swiper-slide"> 
	        	<div class="inner-img slide-bg-1">
		        	<span class="per-big per-ysn-big"></span>
		        	<span class="slide-text text-2"><em class="text-top"></em><em class="text-bottom"></em><i>THIS TURN IS FIGHT FOR YOU</i></span>  
		        	<span class="cloud cloud-1"></span>
		        	<span class="cloud cloud-2"></span>
		        	<span class="cloud cloud-3"></span>
		        </div>      
	        </section>
	        <section class="swiper-slide">
	        	<div class="inner-img slide-bg-2">
		        	<span class="per-big per-ls-big"></span>
		        	<span class="slide-text text-3"><em class="text-top"></em><em class="text-bottom"></em><i>THIS TURN IS FIGHT FOR YOU</i></span> 
		        	<span class="gold-icon"></span>     
		        </div>    
	        </section>
	        <section class="swiper-slide">  
	        	<div class="inner-img slide-bg-3">
		        	<span class="per-big per-rj-big"></span>
		        	<span class="slide-text text-4"><em class="text-top"></em><em class="text-bottom"></em><i>THIS TURN IS FIGHT FOR YOU</i></span>  
		        	<span class="stone"></span> 
		        </div> 
	        </section>
	        <section class="swiper-slide"> 
	        	<div class="inner-img slide-bg-4"> 
		        	<span class="per-big per-nd-big"></span>
		        	<span class="slide-text text-5"><em class="text-top"></em><em class="text-bottom"></em><i>THIS TURN IS FIGHT FOR YOU</i></span>  
		        	<span class="arrow-nd"></span> 
		        </div>
	        </section>
    	</div>
    </div>
    <a href="" class="bottom-left-btn bottom-btn">礼包</a>
    <a href="http://localhost/wordpress1/?page_id=334" class="bottom-right-btn bottom-btn">新闻</a>
    <a href="javascript:void(0);" class="arrow-next"></a>
    <a href="javascript:void(0);" class="arrow-top"><span></span>返回顶部</a>
</div>

<?php get_footer(); ?>
