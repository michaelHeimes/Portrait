<div class="reveal" id="contact-modal" data-animation-in="fadeIn fast" data-animation-out="fadeOut fast" data-reveal>
<div id="contact-modal-header"><h3>Let's Talk</h3>

	<button class="cm-close-button no-style-button" data-close aria-label="Close reveal">
		<img class="top-arrow" src="/wp-content/themes/portrait-displays/assets/svg/contact-modal-close.svg"/>
	</button>

</div>
	<?php
		_s_get_template_part( 'template-parts/global', 'contact-form' );
	?>
</div>

<ul class="skip-link screen-reader-text">
    <li><a href="#content" class="screen-reader-shortcut"><?php esc_html_e( 'Skip to content', '_s' ); ?></a></li>
    <li><a href="#footer" class="screen-reader-shortcut"><?php esc_html_e( 'Skip to footer', '_s' ); ?></a></li>
</ul>