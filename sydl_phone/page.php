<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


	<div id="content" role="main">
		<div class="page-nav cf">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back-btn">后退</a>
			<ul class="cf">
				<li class="current">新闻</li>
				<li>公告</li>
				<li>活动</li>
				<li>攻略</li>
			</ul>
		</div>
		<div class="page-article">
			<div class="swiper-container">
		    	<div class="swiper-wrapper">
		    		<section class="swiper-slide">
						<ul class="list list-xw current">
							<?php $posts = get_posts( "category=1&numberposts=20" ); ?>
							<?php if( $posts ) : ?>
							<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li class="cf"><a href="<?php the_permalink() ?>"><span>【<?php echo get_cat_name(1); ?>】</span><?php the_title();?></a><span class="time"><?php the_time('Y-m.d');?></span></li>
							<?php endforeach; ?>
							<?php endif; ?>
						</ul>
		    		</section>
		    		<section class="swiper-slide">
						<ul class="list list-gg">
							<?php $posts = get_posts( "category=1&numberposts=20" ); ?>
							<?php if( $posts ) : ?>
							<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li class="cf"><a href="<?php the_permalink() ?>"><span>【<?php echo get_cat_name(1); ?>】</span><?php the_title();?></a><span class="time"><?php the_time('Y-m.d');?></span></li>
							<?php endforeach; ?>
							<?php endif; ?>
						</ul>
		    		</section>
		    		<section class="swiper-slide">
						<ul class="list list-hd">
							<?php $posts = get_posts( "category=1&numberposts=20" ); ?>
							<?php if( $posts ) : ?>
							<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li class="cf"><a href="<?php the_permalink() ?>"><span>【<?php echo get_cat_name(1); ?>】</span><?php the_title();?></a><span class="time"><?php the_time('Y-m.d');?></span></li>
							<?php endforeach; ?>
							<?php endif; ?>
						</ul>
		    		</section>
		    		<section class="swiper-slide">
						<ul class="list list-gl">
							<?php $posts = get_posts( "category=1&numberposts=20" ); ?>
							<?php if( $posts ) : ?>
							<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li class="cf"><a href="<?php the_permalink() ?>"><span>【<?php echo get_cat_name(1); ?>】</span><?php the_title();?></a><span class="time"><?php the_time('Y-m.d');?></span></li>
							<?php endforeach; ?>
							<?php endif; ?>
						</ul>
		    		</section>
		    	</div>
		    </div>
		</div>
		<div class="page-bottom-nav"></div>
	</div><!-- #content -->

<?php get_footer(); ?>