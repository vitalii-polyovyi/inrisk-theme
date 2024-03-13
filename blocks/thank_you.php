<?php
$thank_you_title   = get_sub_field( 'thank_you_title' );
$thank_you_message = get_sub_field( 'thank_you_message' );
$thank_you_link    = get_sub_field( 'thank_you_link' );
?>
<section class="bg-dark-blue thank-you">
    <div class="thank-you__container">
		<?php if ( $thank_you_title ): ?>
            <h2><?php echo $thank_you_title; ?></h2>
		<?php endif;
		if ( $thank_you_message ):
			echo $thank_you_message; ?>
		<?php endif;
		if ( $thank_you_link ): ?>
            <a class="button button_primary-green"
               href="<?php echo esc_url( $thank_you_link['url'] ); ?>"
               target="<?php echo ! empty( $thank_you_link['target'] ) ? esc_attr( $thank_you_link['target'] ) : '_self'; ?>">
				<?php echo esc_html( $thank_you_link['title'] ); ?>
            </a>
		<?php endif; ?>
    </div>
</section>