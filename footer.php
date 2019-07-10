<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */
?>

</div><!-- #content -->

<?php
_s_get_template_part( 'template-parts/global', 'footer-cta' );
?>


<footer class="site-footer" id="site-footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">
    <div class="wrap">
	    
	    <div class="row">

			<div class="columns footer-half small-12 medium-4 large-4">
				
				<div id="footer-first-widget">
				
					<div id="footer-logo-wrap">
					<?php
					$site_url = home_url();
					$logo = sprintf('<img src="%slogo.svg" alt="site logo" class="" />', trailingslashit( THEME_IMG ) );    
					printf('<a href="%s" title="%s">%s</a>',
					        $site_url, 
					        get_bloginfo( 'name' ), 
					        $logo );
					?>
					</div>
					
						
					<?php if(get_field('tagline', 'option')):?>
					<h3 id="footer-tagline"><?php the_field('tagline', 'option');?></h3>
					<?php endif;?>
					
					
					<?php if( have_rows('social_media_links', 'option') ):?>
						<div class="social-wrap">
						<?php while ( have_rows('social_media_links', 'option') ) : the_row();?>	
					
							<?php if( have_rows('single_social_link', 'option') ):?>
								<?php while ( have_rows('single_social_link', 'option') ) : the_row();?>	
							
									<?php 
									$link = get_sub_field('link', 'option');
									if( $link ): 
										$link_url = $link['url'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="single-social-link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
											
											<?php 
											$image = get_sub_field('icon', 'option');
											if( !empty($image) ): ?>
												<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											<?php endif; ?>
											
										</a>
									<?php endif; ?>
							
							
								<?php endwhile;?>
							<?php endif;?>
					
						<?php endwhile;?>
						</div>
					<?php endif;?>
					
				</div>
					
				
			</div>
			
		       <?php
	                // Footer Menu
	                $args = array(
	                    'theme_location' => 'footer',
	                    'menu' => 'Footer Menu',
	                    'container' => '',
	                    'container_class' => '',
	                    'container_id' => '',
	                    'menu_id'        => 'js-superfish',
	                    'menu_class'     => 'primary-menu footer-half menu row columns small-12 smedium-12 medium-8 large-8',
	                    'before' => '',
	                    'after' => '',
	                    'link_before' => '',
	                    'link_after' => '',
	                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	                    'add_li_class'  => 'columns'
	                 );
	                wp_nav_menu($args);
	            ?>	    
	    
	        
	    </div>
	    
    </div><!-- Wrap -->
	    
    <div id="footer-copyright" class="row columns">
	    <div><small>&copy; <?php echo date('Y'); ?> <?php the_field('footer_copyright_text', 'option');?></small></div>
	    
	    <div class="legal-policy-wrap">
			<?php 
			$link = get_field('footer_legal_link', 'option');
			if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<a class="single-social-link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><small><?php echo esc_html($link_title); ?></small></a>
			<?php endif; ?>    
			<span class="footer-dash">/</span>
			<?php 
			$link = get_field('footer_privacy_link', 'option');
			if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<a class="single-social-link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><small><?php echo esc_html($link_title); ?></small></a>
			<?php endif; ?>  
			
		</div>
		
	
	<div><a href="https://www.sayenkodesign.com/" target="_blank"><small>Web Design</small></a><small> by </small><a href="https://www.sayenkodesign.com/" target="_blank"><small>Sayenko Design</small></a></div>
	    
    </div>
 
 </footer><!-- #colophon -->

<?php 
 
wp_footer(); 
?>
</body>
</html>
