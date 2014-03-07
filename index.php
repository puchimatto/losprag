<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="principal wrap clearfix">

  					<?php get_template_part( 'social' ); ?> 

						<div id="main" class="twelvecol first clearfix" role="main">

							
							<ul class="grid cs-style-1">

							<?php $count = 0; ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  							<?php $count++; ?>      

							    <li id="post-<?php the_ID(); ?>"  style="background-image:url( <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  echo $feat_image; ?>
 ); " <?php if ($count == 1) post_class( 'grande' ); ?><?php post_class( 'clearfix' ); ?> role="article">
							        <figure >
										 <br>
										<figcaption>
											<div class="titulonota">
							               		<h3 class="h2">
							               			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							               		</h3 >
							                </div>
											<div class ="line">
												<?php if ($count == 1) { ?>
							                	<?php the_excerpt(); ?>
							                	<?php } else { ?>
							                	<p> <?php echo substr(get_the_excerpt(),0,73); ?> </p>
							                	<?php } ?>
							                </div>
							                <div class="boton-nota"	>	
							            	<a href="<?php the_permalink() ?>" rel="bookmark" class="btn btn-5 btn-5a icon-cart"><span>leer más</span></a>
				                			</div>
 							            </figcaption>
							        </figure>
							    </li>
						
							<?php endwhile; ?>
						

									<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
											<?php bones_page_navi(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
														<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
													</ul>
											</nav>
									<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
							</ul>
						</div>


 
				</div>

			</div>

<?php get_footer(); ?>
