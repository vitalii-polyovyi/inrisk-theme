<?php
$grid_three_col_text  = get_sub_field( 'grid_three_col_text' );
$grid_three_col_items = get_sub_field( 'grid_three_col_items' );
?>
<section class="integrations">
    <div class="integrations__container">
		<?php if ( $grid_three_col_text ): ?>
            <div class="integrations__title">
				<?php echo $grid_three_col_text; ?>
            </div>
		<?php endif;
		if ( $grid_three_col_items ): ?>
            <div class="grid__content grid__content_three-cols grid__content_two-cols_xs">
				<?php foreach ( $grid_three_col_items as $t_c_item ):
					$item_col_size = $t_c_item['item_col_size'];
					$item_col_icon = $t_c_item['item_col_icon'];
					$item_col_text = $t_c_item['item_col_text'];
					$item_col_background = $t_c_item['item_col_background'];
					// size
					if ( $item_col_size == 'vertical' ) {
						$box_size = ' grid__item_col-2_sm grid__item_content_justify_end grid__item_row-2';
					} else { // default 'square'
						$box_size = ' grid__item__icon_position-right-bottom';
					}
					// color
					if ( $item_col_background == 'green' ) {
						$box_bg = ' grid__item_primary-green';
					} elseif ( $item_col_background == 'dark-blue' ) {
						$box_bg = ' grid__item_dark-blue';
					} elseif ( $item_col_background == 'light-blue' ) {
						$box_bg = ' grid__item_light-blue';
					} else { // default 'grey'
						$box_bg = ' grid__item_dark-grey';
					} ?>
                    <div class="grid__item<?php echo $box_size . $box_bg; ?>">
						<?php if ( $item_col_icon ): ?>
                            <img class="icon"
                                 src="<?php echo LAZY_PRELOAD; ?>"
                                 data-src="<?php echo esc_url( $item_col_icon['url'] ); ?>"
                                 width="<?php echo isset( wp_get_attachment_metadata( $item_col_icon['ID'] )['width'] ) ? wp_get_attachment_metadata( $item_col_icon['ID'] )['width'] : '45'; ?>"
                                 height="<?php echo isset( wp_get_attachment_metadata( $item_col_icon['ID'] )['height'] ) ? wp_get_attachment_metadata( $item_col_icon['ID'] )['height'] : '45'; ?>"
                                 alt="<?php echo ! empty( $item_col_icon['alt'] ) ? esc_attr( $item_col_icon['alt'] ) : 'box-icon'; ?>"
                                 loading="lazy">
						<?php endif;
						if ( $item_col_text ): ?>
                            <h3><?php echo substr( $item_col_text, 0, 100 ); ?></h3>
						<?php endif; ?>
                    </div>
				<?php endforeach; ?>
            </div>
		<?php endif; ?>
    </div>
</section>