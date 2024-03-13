<?php
$info_point_title = get_sub_field( 'info_point_title' );
$info_point_items = get_sub_field( 'info_point_items' );
$info_point_text  = get_sub_field( 'info_point_text' );
?>
<section class="bg-dark-blue med-app-benefits">
    <div class="med-app-benefits__container">
		<?php if ( $info_point_title ): ?>
            <h2><?php echo $info_point_title; ?></h2>
		<?php endif;
		if ( $info_point_items ) : ?>
            <div class="med-app-benefits__benefits-boxes">
				<?php foreach ( $info_point_items as $p_item ):
					$item_img = $p_item['item_img'];
					$item_description = $p_item['item_description']; // 200 symbols
					?>
                    <div class="med-app-benefits__benefits-box">
						<?php if ( $item_img ): ?>
                            <div class="med-app-benefits__circle-container">
                                <img src="<?php echo LAZY_PRELOAD; ?>"
                                     data-src="<?php echo esc_url( $item_img['url'] ); ?>"
                                     width="<?php echo isset( wp_get_attachment_metadata( $item_img['ID'] )['width'] ) ? wp_get_attachment_metadata( $item_img['ID'] )['width'] : '30'; ?>"
                                     height="<?php echo isset( wp_get_attachment_metadata( $item_img['ID'] )['height'] ) ? wp_get_attachment_metadata( $item_img['ID'] )['height'] : '30'; ?>"
                                     alt="<?php echo ! empty( $item_img['alt'] ) ? esc_attr( $item_img['alt'] ) : 'point-image'; ?>"
                                     loading="lazy">
                            </div>
						<?php endif;
						echo substr( $item_description, 0, 200 ); ?>
                    </div>
				<?php endforeach; ?>
            </div>
		<?php endif;
        if ( $info_point_text ): echo $info_point_text; endif; ?>
    </div>
</section>