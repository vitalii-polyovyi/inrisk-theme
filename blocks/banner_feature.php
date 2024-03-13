<?php
$banner_feature_text = get_sub_field( 'banner_feature_text' );
$banner_feature_name = get_sub_field( 'banner_feature_name' );
$banner_feature_img  = get_sub_field( 'banner_feature_img' );
$banner_feature_link = get_sub_field( 'banner_feature_link' );
?>
<section class="bg-dark-blue book-demo_features">
    <div class="book-demo_features__container">
		<?php if ( $banner_feature_text ): ?>
            <div class="book-demo_features__title">
				<?php echo $banner_feature_text; ?>
            </div>
		<?php endif; ?>
        <div class="book-demo_features__content">
            <div class="book-demo_features__img-wrapper">
				<?php if ( $banner_feature_name ): ?>
                    <div class="book-demo_features__img-label">
						<?php echo $banner_feature_name; ?>
                    </div>
				<?php endif;
				if ( $banner_feature_img ): ?>
                    <img src="<?php echo LAZY_PRELOAD; ?>"
                         data-src="<?php echo esc_url( $banner_feature_img['url'] ); ?>"
                         width="<?php echo isset( wp_get_attachment_metadata( $banner_feature_img['ID'] )['width'] ) ? wp_get_attachment_metadata( $banner_feature_img['ID'] )['width'] : '1200'; ?>"
                         height="<?php echo isset( wp_get_attachment_metadata( $banner_feature_img['ID'] )['height'] ) ? wp_get_attachment_metadata( $banner_feature_img['ID'] )['height'] : '800'; ?>"
                         alt="<?php echo ! empty( $banner_feature_img['alt'] ) ? esc_attr( $banner_feature_img['alt'] ) : 'feature-image'; ?>"
                         loading="lazy">
				<?php endif; ?>
            </div>
        </div>
		<?php if ( $banner_feature_link ): ?>
            <a class="button button_primary-green button_large"
               href="<?php echo esc_url( $banner_feature_link['url'] ); ?>"
               target="<?php echo ! empty( $banner_feature_link['target'] ) ? esc_attr( $banner_feature_link['target'] ) : '_self'; ?>">
				<?php echo esc_html( $banner_feature_link['title'] ); ?>
            </a>
		<?php endif; ?>
    </div>
</section>