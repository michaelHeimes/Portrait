<?php
// Multipurpose - Full Width Copy

if( get_row_layout() == 'full_width_copy' ):?>
	<section class="flex-full-width-copy row column">
		
		<?php if ( get_sub_field('heading')):?>
		<h2><?php the_sub_field('heading');?></h2>
		<?php endif;

		if ( get_sub_field('copy')):?>
		<p><?php the_sub_field('copy');?></p>
		<?php endif;?>
		
	</section>
<?php endif;?>
