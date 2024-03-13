<?php
$coming_soon_title   = get_sub_field( 'coming_soon_title' );
$coming_soon_message = get_sub_field( 'coming_soon_message' );
$coming_soon_link    = get_sub_field( 'coming_soon_link' );
$footer_socials      = get_field( 'footer_socials', 'option' );
?>
<section class="bg-dark-blue coming-soon">
    <div class="coming-soon__container">
		<?php if ( $coming_soon_title ): ?>
            <span class="coming-soon__error-text"><?php echo $coming_soon_title; ?></span>
		<?php endif;
		if ( $coming_soon_message ): ?>
            <p class="coming-soon__message"><?php echo $coming_soon_message; ?></p>
		<?php endif;
		if ( $coming_soon_link ): ?>
            <a class="button button_primary-green"
               href="<?php echo esc_url( $coming_soon_link['url'] ); ?>"
               target="<?php echo ! empty( $coming_soon_link['target'] ) ? esc_attr( $coming_soon_link['target'] ) : '_self'; ?>">
				<?php echo esc_html( $coming_soon_link['title'] ); ?>
            </a>
		<?php endif;
		$socials_counter = 0;
		$social_icon     = '';
		foreach ( $footer_socials as $social ) :
			$footer_social_link = $social['footer_social_link'];
			if ( $socials_counter == 0 ) {
				$social_icon = ' icon-linkedin'; // at the moment
			} else {
				$social_icon = '';
			} ?>
            <li>
                <a class="icon<?php echo $social_icon; ?>"
                   href="<?php echo esc_url( $footer_social_link['url'] ); ?>"
                   target="<?php echo ! empty( $footer_social_link['target'] ) ? esc_attr( $footer_social_link['target'] ) : '_self'; ?>"
                   aria-label="social-network">
                </a>
            </li>
			<?php $socials_counter ++;
		endforeach; ?>
    </div>
</section>