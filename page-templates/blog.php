<?php
/**
 * Template Name: Blog
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<?php
_s_get_template_part( 'template-parts/global', 'hero' );
?>
					
	<div class="row column">
			
		<div id="primary" class="content-area site-content">
			    
			<main id="main" class="site-main columns row" role="main">            
			                        
				<div class="row small-up-1 medium-up-2 large-up-3 xlarge-up-4 grid" data-equalizer data-equalize-on="large" data-equalize-by-row="true">
			                               
			                    
					<?php if( have_rows('post_links') ):?>
						<?php while ( have_rows('post_links') ) : the_row();?>	
							<?php
							$post_object = get_sub_field('single_link');
							if( $post_object ): 
							$post = $post_object;
							setup_postdata( $post );?>
								
							<article class="columns column-block">
								
								<div class="row">
									
									<?php
										$imgID = get_field('page_top_background_image');
										$imgSize = "large";
										$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
									?>
							    
								    <a href="<?php echo get_permalink();?>" class="post-hero" style="background-image: url(<?php echo $imgArr[0]; ?> );background-repeat: no-repeat; background-position: center center;">
	
								    </a>
							    
								    <div class="post-copy-wrap">     
									    
									    <header class="entry-header">
								    
										    <?php echo $post_date = _s_get_posted_on( 'M d, Y' );?>
										    
										    <div class="post-anchor-copy-wrap">
											    <h3>
												    <a href="<?php echo get_permalink();?>">
											    		<?php echo get_the_title();?>
											    	</a>
										    	</h3>
										    
										    <div class="archive-post-excerpt">
											    <a href="<?php echo get_permalink();?>">
												    <?php the_field('introduction');?>
											    </a>
											</div>
										
										    </div>
										
										</header>

							    <a class="read-more" href="<?php echo get_permalink();?>">Read More<span></span></a>
							    
							    </div>
							    
								</div>
							    
							</article><!-- #post-## -->
					
					    	<?php wp_reset_postdata();?>
							<?php endif; ?>

						<?php endwhile;?>
					<?php endif;?>

			    
				</div>
			                             
			</main>
			        
		</div>
		
		
		<?php
		$is_paged = get_field('is_there_more_than_one_blog_page', 'option');
		if( $is_paged && in_array('yes', $is_paged) ): ?>
		
			<div class="blog-pagination-wrap">
		
				<?php if( have_rows('previous_and_next_arrows') ):?>
					<div class="blog-page-arrows">
					<?php while ( have_rows('previous_and_next_arrows') ) : the_row();?>	
					
						<?php if(get_sub_field('previous_page')):?>
							<a class="previous-blog-page" href="<?php the_sub_field('previous_page');?>"><span><img class="page-nav-arrow page-nav-gray-arrow-prev" src="/wp-content/themes/portrait-displays/assets/svg/gray-value-modal-left-arrow.svg"/><img class="page-nav-arrow page-nav-blue-arrow-prev" src="/wp-content/themes/portrait-displays/assets/svg/blue-value-modal-left-arrow.svg"/></span></a>
						<?php endif;?>
						
						<?php if(get_sub_field('next_page')):?>
							<a class="next-blog-page" href="<?php the_sub_field('next_page');?>"><span><img class="page-nav-arrow page-nav-blue-arrow-next" src="/wp-content/themes/portrait-displays/assets/svg/blue-value-modal-right-arrow.svg"/><img class="page-nav-arrow page-nav-gray-arrow-next" src="/wp-content/themes/portrait-displays/assets/svg/gray-value-modal-right-arrow.svg"/></span></a>
						<?php endif;?>
	
					<?php endwhile;?>
					</div>
				<?php endif;?>	
					
				<div class="posts-pagination">
					<?php if( have_rows('blog_page_links', 'option') ):?>
						<ul class="nav-links">
						<?php while ( have_rows('blog_page_links', 'option') ) : the_row();?>	
										
							<li><a href="<?php the_sub_field('single_link', 'option');?>"><?php echo get_row_index();?></a></li>
							
						<?php endwhile;?>
						</ul>
					<?php endif;?>				
				</div>
				<?php endif; ?>
				
			</div>
			
	</div>


<?php
get_footer();