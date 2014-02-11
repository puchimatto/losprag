<?php
/*
Template Name: Calendario
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="ninecol first clearfix calendario" role="main">
							<div id = 'linea'></div>

							  <?php

								$blogtime = date('Y');
								$prev_limit_year = $blogtime - 1;
								$prev_month = '';
								$prev_year = '';
								$additional_class = 'derecho';
								$args = array(
								         'posts_per_page' => 20,
								         'ignore_sticky_posts' => 1
								);

								$postsbymonth = new WP_Query($args);

								while($postsbymonth->have_posts()) {

								    $postsbymonth->the_post();

								    if(get_the_time('F') != $prev_month || get_the_time('Y') != $prev_year && get_the_time('Y') == $prev_limit_year) {

								          echo  "<h2>".get_the_time('F')."</h2><article class='vacio  ".$additional_class."'></article>\n\n";


								        }

								    ?>

								    <?php $additional_class = (++$j % 2 == 0) ? 'derecho' : 'izquierdo'; ?>

<article  <?php post_class('evento '.$additional_class); ?> >


	<div class = "info">
		<div class = "imagen"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a> </div>
		<div class = "texto">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        	<?php the_excerpt(); ?> 
    	</div>
    </div>
    <div class = "fecha">
    	<?php printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'j M', 'bonestheme' ) ), bones_get_the_author_posts_link() ); ?>
    </div>
</article>


    <?php
    $prev_month = get_the_time('F');
    $prev_year = get_the_time('Y');
} ?>

					

						</div>

						<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
