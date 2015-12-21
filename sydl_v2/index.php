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
<img src="<?php echo get_template_directory_uri(); ?>/images/share.jpg" style="display:none"/>
<div class="loading">
	<p>正在加载<i>0</i>%</p>
</div>
<div class="present">
	<a href="">
		<img src="<?php echo get_template_directory_uri(); ?>/img/present.png" alt="独家礼包"/>
		<i class="present-text"></i>
	</a>
	<p>官方IOS玩家群：192376539</p>
	<p>官方安卓玩家群：247282776</p>
</div>
<div class="main">
	<div id="center">
    	<div class="sydl-slide">
			<div class="ss-item ss-item1">
				<span class="slogan"></span>
				<span class="per"></span>
				<span class="arrow arrow-left"></span>
				<span class="arrow arrow-right"></span>
			</div>
			<div class="ss-item ss-item2">
				<span class="slogan"></span>
				<span class="per"></span>
				<span class="arrow arrow-left"></span>
				<span class="arrow arrow-right"></span>
			</div>
			<div class="ss-item ss-item3">
				<span class="slogan"></span>
				<span class="per"></span>
				<span class="arrow arrow-left"></span>
				<span class="arrow arrow-top"></span>
			</div>
			<div class="ss-item ss-item4">
				<span class="slogan"></span>
				<span class="per"></span>
				<span class="arrow arrow-left"></span>
				<span class="arrow arrow-right"></span>
			</div>
	 		<a href="javascript:void(0);" class="slide-arrow sa-left"></a>
			<a href="javascript:void(0);" class="slide-arrow sa-right"></a>
		</div>
		<div class="content">
			
			<div class="content-top cf">
				<div class="download cf">
		            <div class="qrcode-game">
						<img src="<?php echo get_template_directory_uri(); ?>/img/qrcode.jpg" width="91" height="89">
						<span>扫一扫下载游戏</span>
					</div>
		            <div class="download-btn">
		                <a href="" class="ios-btn" target="_blank">苹果版下载</a>
		                <a href="" target="_blank" class="and-btn">安卓版敬请期待</a>
		            </div>
		        </div>
		        <a href="javascript:;" class="video-btn video" id="video-btn" typeid="qq" sid="s01633wrnkg"><span></span></a>
			</div>
			<div class="content-news">
				<div class="c-head cf">
					<h2>新闻资讯</h2>
					<span>News</span>
					<a class="more_news" href="http://localhost/wordpress1/?page_id=334"></a>
				</div>
				<div class="c-body">
					<ul>
						<?php $posts = get_posts( "category=1&numberposts=1" ); ?>
						<?php if( $posts ) : ?>
						<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
						<li class="cf"><a href="<?php the_permalink() ?>"><span>【<?php echo get_cat_name(1); ?>】</span><?php the_title();?></a><span class="time"><?php the_time('Y-m.d');?></span></li>
						<?php endforeach; ?>
						<?php endif; ?>
						<?php $posts = get_posts( "category=1&numberposts=1" ); ?>
						<?php if( $posts ) : ?>
						<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
						<li class="cf"><a href="<?php the_permalink() ?>"><span>【<?php echo get_cat_name(1); ?>】</span><?php the_title();?></a><span class="time"><?php the_time('Y-m.d');?></span></li>
						<?php endforeach; ?>
						<?php endif; ?>
						<?php $posts = get_posts( "category=1&numberposts=1" ); ?>
						<?php if( $posts ) : ?>
						<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
						<li class="cf"><a href="<?php the_permalink() ?>"><span>【<?php echo get_cat_name(1); ?>】</span><?php the_title();?></a><span class="time"><?php the_time('Y-m.d');?></span></li>
						<?php endforeach; ?>
						<?php endif; ?>
						<?php $posts = get_posts( "category=1&numberposts=1" ); ?>
						<?php if( $posts ) : ?>
						<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
						<li class="cf"><a href="<?php the_permalink() ?>"><span>【<?php echo get_cat_name(1); ?>】</span><?php the_title();?></a><span class="time"><?php the_time('Y-m.d');?></span></li>
						<?php endforeach; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<div class="content-service">
				<div class="c-head cf">
					<h2>客服服务</h2>
					<span>service</span>
				</div>
				<div class="c-body">
					<ul>
						<li>官方邮箱：service@sys.appgame.com</li>
						<li>客服电话：020-23337086</li>
					</ul>
				</div>
				<div class="qrcode">
					<img src="<?php echo get_template_directory_uri(); ?>/img/qrcode.jpg" width="91" height="89">
					<span>官方微信公众号</span>
				</div>
			</div>
		</div>
	</div>
	<div class="show_video">
		<img class="close" src="<?php echo get_template_directory_uri(); ?>/images/close.png">
		<div id="playvideo"></div>
	</div>
</div>
<?php get_footer(); ?>
