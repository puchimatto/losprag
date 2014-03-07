				<div id="sidebar1" class="sidebar threecol last clearfix" role="complementary">

					<div class="relacionado">
						<h4 class="widgettitle">tal vez te interese</h4>
						<?php
						    global $post;
						    $categories = get_the_category();
						    $this_post = $post->ID;
						     $args = array( 'numberposts' => 4, 'post__not_in' => array($this_post), 'orderby' => 'rand', 'category' => $category[0]->term_id);
						     $rand_posts = get_posts( $args );
						    foreach( $rand_posts as $post ) :



						?>

						    <div>

						    	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><div class ="sidetumb" style ="background-image:url(<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  echo $feat_image; ?>);">
						    	</div></a>
						    	<p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						    		<?php the_title(); ?>
						    	</a></p>
						    	<p><?php echo substr(get_the_excerpt(),0,73); ?> [...]</p>

						    </div>
						<?php endforeach; ?>
						 
 
					</div>
 

				</div>