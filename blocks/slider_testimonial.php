<?php
$slider_testimonial_background = get_sub_field( 'slider_testimonial_background' );
$slider_testimonial_title      = get_sub_field( 'slider_testimonial_title' );
$slider_testimonial_items      = get_sub_field( 'slider_testimonial_items' );
if ( $slider_testimonial_background == 'dark' ) {
	$testimonials_bg = ' bg-dark-blue';
} else { // default 'light-blue'
	$testimonials_bg = ' bg-turquoise';
}
?>
<section class="testimonials<?php echo $testimonials_bg; ?>">
    <div class="gallery testimonials__container">
        <div class="section__title testimonials__title">
			<?php if ( $slider_testimonial_title ): ?>
                <h2><?php echo $slider_testimonial_title; ?></h2>
			<?php endif; ?>
            <div class="gallery__controls">
                <span class="gallery__nav-button gallery__nav-button_prev"></span>
                <span class="gallery__nav-button gallery__nav-button_next"></span>
            </div>
        </div>
		<?php if ( $slider_testimonial_items ): ?>
            <div class="gallery__content">
				<?php foreach ( $slider_testimonial_items as $s_item ):
					$item_testimonial_photo = $s_item['item_testimonial_photo'];
					$item_testimonial_text = $s_item['item_testimonial_text'];
					$item_testimonial_title = $s_item['item_testimonial_title'];
					$item_testimonial_description = $s_item['item_testimonial_description'];
					$item_testimonial_link = $s_item['item_testimonial_link']; ?>
                    <div>
                        <div class="gallery__item testimonials__card">
	                        <?php if ( $item_testimonial_photo ): ?>
                                <div class="selfie">
                                    <img src="<?php echo esc_url( $item_testimonial_photo['url'] ); ?>"
                                         width="<?php echo isset( wp_get_attachment_metadata( $item_testimonial_photo['ID'] )['width'] ) ? wp_get_attachment_metadata( $item_testimonial_photo['ID'] )['width'] : '381'; ?>"
                                         height="<?php echo isset( wp_get_attachment_metadata( $item_testimonial_photo['ID'] )['height'] ) ? wp_get_attachment_metadata( $item_testimonial_photo['ID'] )['height'] : '65'; ?>"
                                         alt="<?php echo ! empty( $item_testimonial_photo['alt'] ) ? esc_attr( $item_testimonial_photo['alt'] ) : 'person-image'; ?>"
                                         loading="lazy">
                                </div>
	                        <?php endif; ?>
                            <div class="personal-information">
								<?php if ( $item_testimonial_title ): ?>
                                    <span class="personal-information__fullname">
                                        <?php echo $item_testimonial_title; ?>
                                    </span>
								<?php endif; ?>
								<?php if ( $item_testimonial_description ): ?>
                                    <span class="personal-information__position">
                                        <?php echo $item_testimonial_description; ?>
                                    </span>
								<?php endif; ?>
                            </div>
							<?php if ( $item_testimonial_text ): ?>
                                <div class="text">
                                    <div class="message message__sb message__sb_bottom">
										<?php echo $item_testimonial_text; ?>
                                    </div>
                                </div>
							<?php endif;
							if ( $item_testimonial_link ): ?>
                                <div class="actions">
                                    <a class="button button_primary-green button_large"
                                       href="<?php echo esc_url( $item_testimonial_link['url'] ); ?>"
                                       target="<?php echo ! empty( $item_testimonial_link['target'] ) ? esc_attr( $item_testimonial_link['target'] ) : '_self'; ?>">
										<?php echo esc_html( $item_testimonial_link['title'] ); ?>
                                    </a>
                                </div>
							<?php endif; ?>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
		<?php endif; ?>
    </div>
</section>