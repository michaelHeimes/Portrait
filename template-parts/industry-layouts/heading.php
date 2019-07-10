<?php
// Industry - Heading

if( get_row_layout() == 'heading' ):?>
	
	<section class="industry-heading">
		
		<div class="row columns">

			<div class="text-left">
				<?php
					_s_get_template_part( 'template-parts/global', 'pixel-set' );
				?>
				
				<h2><?php the_sub_field('heading_text');?></h2>
				
			</div>
			
		</div>
		
	</section>

<?php endif;?>
