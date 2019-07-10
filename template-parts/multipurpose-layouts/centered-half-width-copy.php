<?php
// Multipurpose - Centered 1/2 Width Copy w/Optional Link

if( get_row_layout() == 'centered_12_width_copy_woptional_link' ):

	$row_bg_color = get_sub_field('row_background_color');?>

	<section class="flex-centered-half-width-copy row-bg-<?php echo $row_bg_color ?>">
		
		<div class="row column">
		
			<div class="small-wrap text-center">
			
				<?php if ( get_sub_field('heading')):?>
				<h2><?php the_sub_field('heading');?></h2>
				<?php endif;
		
				if ( get_sub_field('copy')):?>
				<p><?php the_sub_field('copy');?></p>
				<?php endif;
				
				$link = get_sub_field('link');
				if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';?>
				<a class="button blue-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span class="button-text"><?php echo esc_html($link_title); ?></span><img src="/wp-content/themes/portrait-displays/assets/svg/white-link-arrow.svg"/></a>
				<?php endif;?>
				
			</div>

		</div>
		
	</section>
<?php endif;?>
