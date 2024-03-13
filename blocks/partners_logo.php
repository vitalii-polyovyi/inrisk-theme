<?php
$partners_logo_text = get_sub_field( 'partners_logo_text' );
$partners_logo_items = get_sub_field( 'partners_logo_items' );
?>
<section class="partners">
	<div class="gallery partners__container">
		<?php if ( $partners_logo_text ): ?>
            <div class="partners__title">
                <?php echo $partners_logo_text; ?>
            </div>
		<?php endif;
        if ( $partners_logo_items ): ?>
            <div class="partners__grid">
	            <?php foreach ( $partners_logo_items as $p_item ): ?>
                    <div class="partners__grid__item">
                        <img src="<?php echo LAZY_PRELOAD; ?>"
                             data-src="<?php echo esc_url( $p_item['url'] ); ?>"
                             width="<?php echo isset( wp_get_attachment_metadata( $p_item['ID'] )['width'] ) ? wp_get_attachment_metadata( $p_item['ID'] )['width'] : '247'; ?>"
                             height="<?php echo isset( wp_get_attachment_metadata( $p_item['ID'] )['height'] ) ? wp_get_attachment_metadata( $p_item['ID'] )['height'] : '247'; ?>"
                             alt="<?php echo ! empty( $p_item['alt'] ) ? esc_attr( $p_item['alt'] ) : 'partner-logo'; ?>"
                             loading="lazy">
                    </div>
	            <?php endforeach; ?>
            </div>
        <?php endif; ?>
	</div>
</section>