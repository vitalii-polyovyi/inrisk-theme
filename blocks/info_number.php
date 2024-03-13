<?php
$info_number_text  = get_sub_field( 'info_number_text' );
$info_number_items = get_sub_field( 'info_number_items' );
?>
<section class="cloud-solution-features">
    <div class="cloud-solution-features__container">
		<?php if ( $info_number_text ): ?>
            <div class="text_center cloud-solution-features__header">
				<?php echo $info_number_text; ?>
            </div>
		<?php endif;
		if ( $info_number_items ) : ?>
            <ul class="cloud-solution-features__grid">
				<?php foreach ( $info_number_items as $n_item ):
					$item_number = $n_item['item_number'];// 12 symbols
					$item_text = $n_item['item_text']; ?>
                    <li data-aos="fade-up" data-aos-duration="1000"
                        class="animate__fade-up_before-content cloud-solution-features__item wow-desktop"
                        data-wow-duration="1s">
						<?php if ( $item_number ): ?>
                            <div class="cloud-solution-features__item__index"><?php echo substr( $item_number, 0, 12 ); ?></div>
						<?php endif; ?>
						<?php if ( $item_text ): ?>
                            <p class="text_secondary-gray"><?php echo wp_trim_words( $item_text, 25, '...' ) ?></p>
						<?php endif; ?>
                    </li>
				<?php endforeach; ?>
            </ul>
		<?php endif; ?>
    </div>
</section>