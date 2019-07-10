<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php     
    $post_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
    if( !empty( $post_image ) ) {
        $post_image = sprintf( 'background-image: url(%s);', $post_image );
    };
    
    printf( '<a href="%s" class="post-hero" style="%s"></a>', get_permalink(), $post_image );?>

    
    <div class="post-copy-wrap">     
    
    
    <?php
    $post_date = _s_get_posted_on( 'M d, Y' );
       
    $post_title = sprintf( '<div class="post-achor-copy-wrap"><h3><a href="%s">%s...</a></h3>', get_permalink(), get_the_title() );
    
    $this_post_excerpt = sprintf( '<p><a href="%s">%s</a></p></div>', get_permalink(), _s_get_the_excerpt() );
                	
    printf( '<header class="entry-header">%s%s%s</header>', $post_date, $post_title, $this_post_excerpt );
    
    
    ?>
    
    <a class="read-more" href="<?php echo get_permalink();?>">Read More<span></span></a>
    
    </div>
    
</article><!-- #post-## -->




