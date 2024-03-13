<?php
$slider_logo_title = get_sub_field( 'slider_logo_title' );
$slider_logo_items = get_sub_field( 'slider_logo_items' );
?>
<section>
    <div class="swiper-container swiper-marquee">
		<?php if ( $slider_logo_title ): ?>
            <div class="swiper__title-container">
                <h3 class="text_center"><?php echo $slider_logo_title; ?></h3>
            </div>
		<?php endif;
		if ( $slider_logo_items ): ?>
            <div class="swiper-wrapper">
                <?php foreach ( $slider_logo_items as $l_item ): ?>
                    <div class="swiper-slide">
                        <img class="swiper__partner-logo"
                             src="<?php echo esc_url( $l_item['url'] ); ?>"
                             width="<?php echo isset( wp_get_attachment_metadata( $l_item['ID'] )['width'] ) ? wp_get_attachment_metadata( $l_item['ID'] )['width'] : '381'; ?>"
                             height="<?php echo isset( wp_get_attachment_metadata( $l_item['ID'] )['height'] ) ? wp_get_attachment_metadata( $l_item['ID'] )['height'] : '65'; ?>"
                             alt="<?php echo ! empty( $l_item['alt'] ) ? esc_attr( $l_item['alt'] ) : 'client-logo'; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>