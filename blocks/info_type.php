<?php
$info_type_text  = get_sub_field( 'info_type_text' );
$info_type_link  = get_sub_field( 'info_type_link' );
$info_type_items = get_sub_field( 'info_type_items' );
?>
<section class="bg-dark-blue book-demo">
    <div class="book-demo__container">
		<?php if ( $info_type_text ): ?>
            <div class="section__title description">
				<?php echo $info_type_text; ?>
            </div>
		<?php endif;
		if ( $info_type_link ): ?>
            <div class="actions">
                <a class="button button_primary-green button_large left"
                   href="<?php echo esc_url( $info_type_link['url'] ); ?>"
                   target="<?php echo ! empty( $info_type_link['target'] ) ? esc_attr( $info_type_link['target'] ) : '_self'; ?>">
					<?php echo esc_html( $info_type_link['title'] ); ?>
                </a>
            </div>
		<?php endif;
		if ( $info_type_items ) : ?>
            <div class="content">
				<?php foreach ( $info_type_items as $t_item ):
					$item_type_img = $t_item['item_type_img'];// 12 symbols
					$item_type_title = $t_item['item_type_title']; ?>
                    <div class="content__item">
						<?php if ( $item_type_img ): ?>
                            <div class="bg-turquoise circle-container content__item__icon">
                                <img src="<?php echo LAZY_PRELOAD; ?>"
                                     data-src="<?php echo esc_url( $item_type_img['url'] ); ?>"
                                     width="<?php echo isset( wp_get_attachment_metadata( $item_type_img['ID'] )['width'] ) ? wp_get_attachment_metadata( $item_type_img['ID'] )['width'] : '50'; ?>"
                                     height="<?php echo isset( wp_get_attachment_metadata( $item_type_img['ID'] )['height'] ) ? wp_get_attachment_metadata( $item_type_img['ID'] )['height'] : '50'; ?>"
                                     alt="<?php echo ! empty( $item_type_img['alt'] ) ? esc_attr( $item_type_img['alt'] ) : 'type-image'; ?>"
                                     loading="lazy">
                            </div>
						<?php endif; ?>
						<?php echo $item_type_title; ?>
                    </div>
				<?php endforeach; ?>
            </div>
		<?php endif; ?>
    </div>
</section>