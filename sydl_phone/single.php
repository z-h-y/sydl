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
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="page-nav cf">
			<a href="http://localhost/wordpress1/?page_id=334" class="back-btn">后退</a>
			<div class="single-hd">
				<h1><?php the_title(); ?></h1>
				<span>发布于：<?php the_time('Y-m-d');?></span>
			</div>			
		</div>
		<div class="single-article">
			<?php the_content(); ?>
		</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->

<?php get_footer(); ?>