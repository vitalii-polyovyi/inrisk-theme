<?php
$banner_top_text             = get_sub_field( 'banner_top_text' );
$banner_top_img              = get_sub_field( 'banner_top_img' );
$banner_top_link             = get_sub_field( 'banner_top_link' );
$banner_top_background_color = get_sub_field( 'banner_top_background_color' );
$banner_top_text_color       = get_sub_field( 'banner_top_text_color' );
if ( $banner_top_text_color == 'dark' ) {
	$text_color = ' text_dark-color';
} elseif ( $banner_top_text_color == 'grey' ) {
	$text_color = ' text_grey-color';
} elseif ( $banner_top_text_color == 'black' ) {
	$text_color = ' text_black-color';
} else { // default 'white'
	$text_color = ' text_white-color';
}
?>
<section class="request-demo"
         style="background-color: <?php echo ! empty( $banner_top_background_color ) ? $banner_top_background_color : '#313E50' ?>">
    <div class="request-demo__container">
        <div class="request-demo__content-wrapper">
            <div class="request-demo__description">
				<?php if ( $banner_top_text ): ?>
                    <div class="request-demo__title<?php echo $text_color; ?>">
						<?php echo $banner_top_text; ?>
                    </div>
				<?php endif; ?>
				<?php if ( $banner_top_link ): ?>
                    <a class="button button_primary-green button_large"
                       href="<?php echo esc_url( $banner_top_link['url'] ); ?>"
                       target="<?php echo ! empty( $banner_top_link['target'] ) ? esc_attr( $banner_top_link['target'] ) : '_self'; ?>">
						<?php echo esc_html( $banner_top_link['title'] ); ?>
                    </a>
				<?php endif; ?>
            </div>
			<?php if ( $banner_top_img ): ?>
                <div class="hidden-sm">
                    <img class="request-demo__img"
                         src="<?php echo LAZY_PRELOAD; ?>"
                         data-src="<?php echo esc_url( $banner_top_img['url'] ); ?>"
                         width="<?php echo isset( wp_get_attachment_metadata( $banner_top_img['ID'] )['width'] ) ? wp_get_attachment_metadata( $banner_top_img['ID'] )['width'] : '1135'; ?>"
                         height="<?php echo isset( wp_get_attachment_metadata( $banner_top_img['ID'] )['height'] ) ? wp_get_attachment_metadata( $banner_top_img['ID'] )['height'] : '784'; ?>"
                         alt="<?php echo ! empty( $banner_top_img['alt'] ) ? esc_attr( $banner_top_img['alt'] ) : 'banner-image'; ?>"
                         loading="lazy">
                </div>
			<?php endif; ?>
        </div>
    </div>
</section>