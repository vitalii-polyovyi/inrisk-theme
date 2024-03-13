<?php
$list_feature_title = get_sub_field( 'list_feature_title' );
$list_feature_items = get_sub_field( 'list_feature_items' );
?>
<section class="med-app-features">
    <div class="med-app-features__container">
		<?php if ( $list_feature_title ): ?>
            <h2><?php echo $list_feature_title; ?></h2>
		<?php endif;
		if ( $list_feature_items ) :
			$feature_counter = 1;
			foreach ( $list_feature_items as $f_item ):
				$feature_item_position = $f_item['feature_item_position'];
				$feature_item_img = $f_item['feature_item_img'];
				$feature_item_img_mobile = $f_item['feature_item_img_mobile'];
				$feature_item_title = $f_item['feature_item_title'];
				$feature_item_values = $f_item['feature_item_values']; // arr
				$feature_reverse_class = $feature_item_position == 'right-img' ? '-reverse' : ''; ?>
				<?php if ( $feature_item_title ): // based on dist html ?>
                    <div class="med-app-features__mobile-title">
                        <span><?php echo sprintf( '%02d', $feature_counter ) . PHP_EOL; ?></span>
                        <h4> <?php echo $feature_item_title; ?></h4>
                    </div>
                <?php endif; ?>
                <div class="med-app-features__box<?php echo $feature_reverse_class; ?>">
					<?php if ( $feature_item_position == 'left-img' ): ?>
	                    <?php if ( $feature_item_img ): // desktop ?>
                            <img src="<?php echo LAZY_PRELOAD; ?>"
                                 data-src="<?php echo esc_url( $feature_item_img['url'] ); ?>"
                                 width="<?php echo isset( wp_get_attachment_metadata( $feature_item_img['ID'] )['width'] ) ? wp_get_attachment_metadata( $feature_item_img['ID'] )['width'] : '200'; ?>"
                                 height="<?php echo isset( wp_get_attachment_metadata( $feature_item_img['ID'] )['height'] ) ? wp_get_attachment_metadata( $feature_item_img['ID'] )['height'] : '404'; ?>"
                                 alt="<?php echo ! empty( $feature_item_img['alt'] ) ? esc_attr( $feature_item_img['alt'] ) : 'feature-image'; ?>"
                                 loading="lazy">
						<?php endif; ?>
						<?php if ( $feature_item_img_mobile ): // mobile ?>
                            <img class="hidden-xl" src="<?php echo LAZY_PRELOAD; ?>"
                                 data-src="<?php echo esc_url( $feature_item_img_mobile['url'] ); ?>"
                                 width="<?php echo isset( wp_get_attachment_metadata( $feature_item_img_mobile['ID'] )['width'] ) ? wp_get_attachment_metadata( $feature_item_img_mobile['ID'] )['width'] : '200'; ?>"
                                 height="<?php echo isset( wp_get_attachment_metadata( $feature_item_img_mobile['ID'] )['height'] ) ? wp_get_attachment_metadata( $feature_item_img_mobile['ID'] )['height'] : '404'; ?>"
                                 alt="<?php echo ! empty( $feature_item_img_mobile['alt'] ) ? esc_attr( $feature_item_img_mobile['alt'] ) : 'mobile-feature-image'; ?>"
                                 loading="lazy">
						<?php endif; ?>
					<?php endif; ?>
                    <div>
						<?php if ( $feature_item_title ): ?>
                            <h4 class="med-app-features__box-title">
                                <span><?php echo sprintf( '%02d', $feature_counter ) . PHP_EOL; ?></span>
								<?php echo $feature_item_title; ?>
                            </h4>
						<?php endif; ?>
						<?php if ( $feature_item_values ) : ?>
                            <ul class="med-app-features__box-list">
								<?php foreach ( $feature_item_values as $f_value ):
									$feature_value_text = $f_value['feature_value_text']; ?>
                                    <li class="med-app-features__box-list-item">
										<?php echo $feature_value_text; ?>
                                    </li>
								<?php endforeach; ?>
                            </ul>
						<?php endif; ?>
                    </div>
					<?php if ( $feature_item_position == 'right-img' ): ?>
						<?php if ( $feature_item_img ): // desktop ?>
                            <img class="med-app-features__policy-img"
                                 src="<?php echo LAZY_PRELOAD; ?>"
                                 data-src="<?php echo esc_url( $feature_item_img['url'] ); ?>"
                                 width="<?php echo isset( wp_get_attachment_metadata( $feature_item_img['ID'] )['width'] ) ? wp_get_attachment_metadata( $feature_item_img['ID'] )['width'] : '200'; ?>"
                                 height="<?php echo isset( wp_get_attachment_metadata( $feature_item_img['ID'] )['height'] ) ? wp_get_attachment_metadata( $feature_item_img['ID'] )['height'] : '404'; ?>"
                                 alt="<?php echo ! empty( $feature_item_img['alt'] ) ? esc_attr( $feature_item_img['alt'] ) : 'feature-image'; ?>"
                                 loading="lazy">
						<?php endif; ?>
						<?php if ( $feature_item_img_mobile ): // mobile ?>
                            <img class="hidden-xl" src="<?php echo LAZY_PRELOAD; ?>"
                                 data-src="<?php echo esc_url( $feature_item_img_mobile['url'] ); ?>"
                                 width="<?php echo isset( wp_get_attachment_metadata( $feature_item_img_mobile['ID'] )['width'] ) ? wp_get_attachment_metadata( $feature_item_img_mobile['ID'] )['width'] : '200'; ?>"
                                 height="<?php echo isset( wp_get_attachment_metadata( $feature_item_img_mobile['ID'] )['height'] ) ? wp_get_attachment_metadata( $feature_item_img_mobile['ID'] )['height'] : '404'; ?>"
                                 alt="<?php echo ! empty( $feature_item_img_mobile['alt'] ) ? esc_attr( $feature_item_img_mobile['alt'] ) : 'mobile-feature-image'; ?>"
                                 loading="lazy">
						<?php endif; ?>
					<?php endif; ?>
                </div>
				<?php $feature_counter ++;
			endforeach;
		endif; ?>
    </div>
</section>