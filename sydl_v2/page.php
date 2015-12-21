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
		<div class="sydl-slide">
			<div class="ss-item s-ss-item">
				<span class="per1"></span>
				<span class="per2"></span>
				<span class="arrow arrow-left"></span>
				<span class="arrow arrow-right"></span>
			</div>
		</div>
		<div id="center" class="content cf">
			<div class="single-article">
				<div class="s-head cf">
					<h2>新闻资讯</h2>
					<span>News</span>
					<ul class="page-nav cf">
						<li class="current">新闻</li>
						<li>公告</li>
						<li>活动</li>
						<li>攻略</li>
					</ul>
				</div>
				<div class="s-body">
					<div class="list list-xw current">
						<ul>
							<?php $posts = get_posts( "category=1&numberposts=9" ); ?>
							<?php if( $posts ) : ?>
							<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li class="cf"><a href="<?php the_permalink() ?>"><span>【<?php echo get_cat_name(1); ?>】</span><?php the_title();?></a><span class="time"><?php the_time('Y-m.d');?></span></li>
							<?php endforeach; ?>
							<?php endif; ?>
						</ul>
						<?php par_pagenavi(1); ?>
					</div>
					<div class="list list-gg">
						<ul>
							<?php $posts = get_posts( "category=2&numberposts=9" ); ?>
							<?php if( $posts ) : ?>
							<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li class="cf"><a href="<?php the_permalink() ?>"><span>【<?php echo get_cat_name(1); ?>】</span><?php the_title();?></a><span class="time"><?php the_time('Y-m.d');?></span></li>
							<?php endforeach; ?>
							<?php endif; ?>
						</ul>
						<?php par_pagenavi(2); ?>
					</div>
					<div class="list list-hd">
						<ul>
							<?php $posts = get_posts( "category=1&numberposts=9" ); ?>
							<?php if( $posts ) : ?>
							<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li class="cf"><a href="<?php the_permalink() ?>"><span>【<?php echo get_cat_name(1); ?>】</span><?php the_title();?></a><span class="time"><?php the_time('Y-m.d');?></span></li>
							<?php endforeach; ?>
							<?php endif; ?>
						</ul>
						<?php par_pagenavi(1); ?>
					</div>
					<div class="list list-gl">
						<ul>
							<?php $posts = get_posts( "category=1&numberposts=9" ); ?>
							<?php if( $posts ) : ?>
							<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li class="cf"><a href="<?php the_permalink() ?>"><span>【<?php echo get_cat_name(1); ?>】</span><?php the_title();?></a><span class="time"><?php the_time('Y-m.d');?></span></li>
							<?php endforeach; ?>
							<?php endif; ?>
						</ul>
						<?php par_pagenavi(1); ?>
					</div>
				</div>
			</div>
			<?php get_sidebar(); ?>
			<?php //comments_template( '', true ); ?>
		</div>
	</div><!-- #content -->

<?php get_footer(); ?>