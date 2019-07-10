<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>">
	
<?php
_s_get_template_part( 'template-parts/global', 'hero' );
?>
	
	
	<div class="row">
		
		<div class="columns small-12 medium-12 large-7">
	
			<?php
		    
		    
		    $intro = get_field( 'introduction' );
		    
		    if( ! empty( $intro ) ) {
		        $intro = preg_replace( '~(?<=^<p>)(\W*)(\w)(?=[\s\S]*</p>$)~i',
		                       '$1<span class="first-letter">$2</span>',
		                       $intro );
		        printf( '<div class="intro">%s</div>', $intro );
		    }
		    ?>
		    
		    
		    <div class="entry-content">
			
				<?php 
				the_content(); 		
				?>
				
			</div><!-- .entry-content -->
		
			<footer class="entry-footer">
		        <?php
		        $previous = sprintf( '<span>%s</span>',  __( 'Previous Post', '_s') );
		                    
		        $next = sprintf( '<span>%s</span>',  __( 'Next Post', '_s') );
		        
		        $navigation = _s_get_the_post_navigation( array( 'prev_text' => $previous, 'next_text' => $next ) );
		        
/*
			        printf( '<h3><span>%s</span></h3><div class="wrap text-center">%s%s</div>', 
		                __( 'Share This', '_s' ),
		                _s_get_addtoany_share_icons(),
		                $navigation  
		              );
*/
	
		              
		            
		        ?>  
		        
		        
		        <div class="social-wrap share-icons a2a_kit clearfix" data-a2a-url="" data-a2a-title="">
			        <p>Share This</p>
			        <a class="a2a_button_facebook"><span class="screen-reader-text">facebook</span><img src="/wp-content/themes/portrait-displays/assets/svg/Facebook.svg"/></a>
			        <a class="a2a_button_twitter"><span class="screen-reader-text">twitter</span><img src="/wp-content/themes/portrait-displays/assets/svg/Twitter.svg"/></a>
			        <a class="a2a_button_linkedin"><span class="screen-reader-text">linkedin</span><img src="/wp-content/themes/portrait-displays/assets/svg/LinkedIn-White.svg"/></a>
			        
			    </div>
		        
		        
		                 
			</footer><!-- .entry-footer -->
		
		</div>
		
	</div>
    
</article><!-- #post-## -->
