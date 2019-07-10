<?php
// Industry - Products

if( get_row_layout() == 'partners_list' ):?>

	<section id="partner-list">
		
		<div class="row columns">

			<div class="text-center">
				<?php
					_s_get_template_part( 'template-parts/global', 'pixel-set' );
				?>
				
				<h2><?php the_sub_field('heading');?></h2>
				
			</div>
			
				<?php 
				$images = get_sub_field('logos');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				
				if( $images ): ?>
				    <ul class="partner-logos row align-middle">
				        <?php foreach( $images as $image ): ?>
				            <li class="columns">
				            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
				            </li>
				        <?php endforeach; ?>
				    </ul>
				<?php endif; ?>
			
		</div>
		
	</section>

<?php endif;?>
