<?php
/**
 * The Template for displaying all single posts
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
				<?php while ( have_posts() ) : the_post(); ?>
				<?php 
				if(in_category(2)) {
					$cat_name = get_cat_name(2);
				} else if(in_category(3)) {
					$cat_name = get_cat_name(3);
				} else if(in_category(4)) {
					$cat_name = get_cat_name(4);
				} else if(in_category(5)) {
					$cat_name = get_cat_name(5);
				}
				?>
				<div class="s-head cf">
					<h2>新闻资讯</h2>
					<span>News</span>
					<div class="position">
						你的当前位置：
						<a href="<?php echo get_settings('home'); ?>">首页</a>>
						<a href="<?php echo get_settings('home'); ?>">新闻中心</a>>
						<?php echo $cat_name; ?>
					</div>
				</div>

					<?php //get_template_part( 'content', get_post_format() ); ?>

					<div class="s-body">
						<h1><?php the_title(); ?></h1>
						<div class="s-publish"><div class="bdsharebuttonbox"><span>发布于：<?php the_time('Y-m-d');?> | 分享到：</span><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div></div>
						<div class="single-content">
							<?php the_content(); ?>
						</div>				
					</div>

				<?php endwhile; // end of the loop. ?>
			</div>
			<?php get_sidebar(); ?>
			<?php //comments_template( '', true ); ?>
		</div>
	</div><!-- #content -->

<?php get_footer(); ?>