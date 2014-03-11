<?php
/*
Template Name: Podcast
*/
?>

	<?php get_header(); ?>
	<div id="content">
	<div id="inner-content" class="wrap clearfix">
  	<?php get_template_part( 'social' ); ?> 
		<div id="main" class="twelvecol first clearfix podcast" role="main">
 			<ul class="cbp_tmtimeline">
			<?php
			$args = array(
				'category_name' => 'podcast',
				'posts_per_page' => 20,
				'ignore_sticky_posts' => 1
			);
			$postsbymonth = new WP_Query($args);
			while($postsbymonth->have_posts()) {
			$postsbymonth->the_post();
			?>
	 			<li>
	        		<time class="cbp_tmtime" datetime="2013-04-10 18:30"><span><?php the_time('d/m/y'); ?></span> <span><?php the_time('g:i'); ?></span></time>
	        		<div class="cbp_tmicon"></div>
	        		<div class="cbp_tmlabel">
	            		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	           			<!--<?php the_post_thumbnail('thumbnail'); ?>-->
						<p><?php the_content(); ?></p>
	        		</div>
	    		</li>
    		<?php } ?>
			</ul>
		</div>
	</div>
	<?php get_footer(); ?>
