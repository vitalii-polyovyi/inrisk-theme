<?php
$banner_app_text             = get_sub_field( 'banner_app_text' );
$banner_app_description      = get_sub_field( 'banner_app_description' );
$banner_app_img              = get_sub_field( 'banner_app_img' );
$banner_app_stores           = get_sub_field( 'banner_app_stores' );
$banner_app_link             = get_sub_field( 'banner_app_link' );
$banner_app_background_color = get_sub_field( 'banner_app_background_color' );
$banner_app_text_color       = get_sub_field( 'banner_app_text_color' );
if ( $banner_app_text_color == 'dark' ) {
	$text_color = ' text_dark-color';
} elseif ( $banner_app_text_color == 'grey' ) {
	$text_color = ' text_grey-color';
} elseif ( $banner_app_text_color == 'black' ) {
	$text_color = ' text_black-color';
} else { // default 'white'
	$text_color = ' text_white-color';
}
?>
<section class="banner-top-medapp"
         style="background-color: <?php echo ! empty( $banner_app_background_color ) ? $banner_app_background_color : '#313E50' ?>">
    <div class="banner-top-medapp__container">
        <div class="banner-top-medapp__content-wrapper">
            <div class="banner-top-medapp__description">
				<?php if ( $banner_app_text || $banner_app_img ): ?>
                    <div class="banner-top-medapp__title<?php echo $text_color; ?>">
						<?php
                        echo $banner_app_text;
                        if ( $banner_app_img ): // mobile ?>
                            <div class="banner-top-medapp__mobile-img-container">
                                <img class="banner-top-medapp__mobile-img"
                                     src="<?php echo LAZY_PRELOAD; ?>"
                                     data-src="<?php echo esc_url( $banner_app_img['url'] ); ?>"
                                     width="<?php echo isset( wp_get_attachment_metadata( $banner_app_img['ID'] )['width'] ) ? wp_get_attachment_metadata( $banner_app_img['ID'] )['width'] : '584'; ?>"
                                     height="<?php echo isset( wp_get_attachment_metadata( $banner_app_img['ID'] )['height'] ) ? wp_get_attachment_metadata( $banner_app_img['ID'] )['height'] : '672'; ?>"
                                     alt="<?php echo ! empty( $banner_app_img['alt'] ) ? esc_attr( $banner_app_img['alt'] ) : 'mobile-app-image'; ?>"
                                     loading="lazy">
                            </div>
						<?php endif;
						echo $banner_app_description; ?>
                    </div>
				<?php endif;
				if ( $banner_app_link ): ?>
                    <a class="button button_primary-green button_large"
                       href="<?php echo esc_url( $banner_app_link['url'] ); ?>"
                       target="<?php echo ! empty( $banner_app_link['target'] ) ? esc_attr( $banner_app_link['target'] ) : '_self'; ?>">
						<?php echo esc_html( $banner_app_link['title'] ); ?>
                    </a>
				<?php endif;
				if ( $banner_app_stores ) : ?>
                    <div class="banner-top-medapp__app-link-container">
						<?php foreach ( $banner_app_stores as $store ):
							$app_store_img = $store['app_store_img'];
							$app_store_url = $store['app_store_url'];
							if ( $app_store_url ): ?>
                                <a href="<?php echo esc_url( $app_store_url ); ?>" target="_blank">
                                    <img class="banner-top-medapp__link-img"
                                         src="<?php echo LAZY_PRELOAD; ?>"
                                         data-src="<?php echo esc_url( $app_store_img['url'] ); ?>"
                                         width="<?php echo isset( wp_get_attachment_metadata( $app_store_img['ID'] )['width'] ) ? wp_get_attachment_metadata( $app_store_img['ID'] )['width'] : '180'; ?>"
                                         height="<?php echo isset( wp_get_attachment_metadata( $app_store_img['ID'] )['height'] ) ? wp_get_attachment_metadata( $app_store_img['ID'] )['height'] : '52'; ?>"
                                         alt="<?php echo ! empty( $app_store_img['alt'] ) ? esc_attr( $app_store_img['alt'] ) : 'store-image'; ?>"
                                         loading="lazy">
                                </a>
							<?php endif;
						endforeach; ?>
                    </div>
				<?php endif; ?>
            </div>
			<?php if ( $banner_app_img ): ?>
                <div class="banner-top-medapp__img-container">
                    <img class="banner-top-medapp__img"
                         src="<?php echo LAZY_PRELOAD; ?>"
                         data-src="<?php echo esc_url( $banner_app_img['url'] ); ?>"
                         width="<?php echo isset( wp_get_attachment_metadata( $banner_app_img['ID'] )['width'] ) ? wp_get_attachment_metadata( $banner_app_img['ID'] )['width'] : '584'; ?>"
                         height="<?php echo isset( wp_get_attachment_metadata( $banner_app_img['ID'] )['height'] ) ? wp_get_attachment_metadata( $banner_app_img['ID'] )['height'] : '672'; ?>"
                         alt="<?php echo ! empty( $banner_app_img['alt'] ) ? esc_attr( $banner_app_img['alt'] ) : 'app-image'; ?>"
                         loading="lazy">
                </div>
			<?php endif; ?>
        </div>
    </div>
</section>