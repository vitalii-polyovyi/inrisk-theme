<?php
$slider_message_background = get_sub_field( 'slider_message_background' );
$slider_message_text       = get_sub_field( 'slider_message_text' );
$slider_message_items      = get_sub_field( 'slider_message_items' );
if ( $slider_message_background == 'light-blue' ) {
	$messages_bg = ' bg-turquoise';
} else { // default 'dark'
	$messages_bg = ' bg-dark-blue';
}
?>
<section class="testimonials<?php echo $messages_bg; ?>">
    <div class="testimonials_medapp__container">
        <div class="testimonials_medapp__title">
			<?php if ( $slider_message_text ):
				echo $slider_message_text; ?>
			<?php endif; ?>
            <div class="animate__pulse slider-medapp__controls wow hidden-small" data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="2">
                <span class="slider-medapp__nav-button slider-medapp__nav-button_prev"></span>
                <span class="slider-medapp__nav-button slider-medapp__nav-button_next"></span>
            </div>
        </div>
		<?php if ( $slider_message_items ): ?>
            <div class="slider-medapp__content">
				<?php foreach ( $slider_message_items as $m_item ):
					$item_message_text = $m_item['item_message_text'];
					$item_message_description = $m_item['item_message_description']; ?>
                    <div class="testimonials_medapp__message">
						<?php if ( $item_message_text ): ?>
                            <p class="testimonials_medapp__text">
								<?php echo $item_message_text; ?>
                            </p>
						<?php endif;
						if ( $item_message_description ): ?>
                            <p class="testimonials_medapp__info">
								<?php echo $item_message_description; ?>
                            </p>
						<?php endif; ?>
                    </div>
				<?php endforeach; ?>
            </div>
            <div class="hidden-xl animate__pulse slider-medapp__controls wow" data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="2">
                <span class="slider-medapp__nav-button slider-medapp__nav-button_prev"></span>
                <span class="slider-medapp__nav-button slider-medapp__nav-button_next"></span>
            </div>
		<?php endif; ?>
    </div>
</section>