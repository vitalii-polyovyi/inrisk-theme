<?php
$grid_two_col_text  = get_sub_field( 'grid_two_col_text' );
$grid_two_col_items = get_sub_field( 'grid_two_col_items' );
?>
<section class="integrations">
    <div class="integrations__container">
		<?php if ( $grid_two_col_text ): ?>
            <div class="integrations__title">
				<?php echo $grid_two_col_text; ?>
            </div>
		<?php endif;
        if ( $grid_two_col_items ): ?>
        <div class="grid__content grid__content_one-col_xs grid__content_two-cols">
			<?php foreach ( $grid_two_col_items as $t_c_item ):
			$item_col_background_color = $t_c_item['item_col_background_color'];
			$item_col_icon = $t_c_item['item_col_icon'];
			$item_col_title = $t_c_item['item_col_title'];
			$item_col_info = $t_c_item['item_col_info'];
			$item_col_description = $t_c_item['item_col_description'];
			$item_col_values = $t_c_item['item_col_values']; // arr
			if ( $item_col_background_color == 'dark-blue' ) {
				$col_background = ' grid__item_dark-blue';
				$li_stretch     = ' timeline__list_stretch-list';
				$text_color     = ' style="color: #c1f20d;"';
			} else { // default 'light-blue'
				$col_background = ' grid__item_light-blue';
				$li_stretch     = ' timeline__list_row_xs timeline__list_stretch timeline_bg-turquoise';
				$text_color     = '';
			} ?>
            <div class="grid__item grid__item_content-align-center integrations__grid-item<?php echo $col_background; ?>">
                <div class="integrations__grid-item__content">
					<?php if ( $item_col_icon ): ?>
                        <img class="icon"
                             src="<?php echo LAZY_PRELOAD; ?>"
                             data-src="<?php echo esc_url( $item_col_icon['url'] ); ?>"
                             width="<?php echo isset( wp_get_attachment_metadata( $item_col_icon['ID'] )['width'] ) ? wp_get_attachment_metadata( $item_col_icon['ID'] )['width'] : '45'; ?>"
                             height="<?php echo isset( wp_get_attachment_metadata( $item_col_icon['ID'] )['height'] ) ? wp_get_attachment_metadata( $item_col_icon['ID'] )['height'] : '45'; ?>"
                             alt="<?php echo ! empty( $item_col_icon['alt'] ) ? esc_attr( $item_col_icon['alt'] ) : 'column-icon'; ?>"
                             loading="lazy">
					<?php endif;
					if ( $item_col_title ): ?>
                        <h3<?php echo $text_color; ?>><?php echo substr( $item_col_title, 0, 100 ); ?></h3>
					<?php endif;
					if ( $item_col_info ): ?>
                        <p><?php echo substr( $item_col_info, 0, 200 ); ?></p>
					<?php endif;
					if ( $item_col_description ): ?>
                        <div class="list-title">
                            <h3<?php echo $text_color; ?>><?php echo substr( $item_col_description, 0, 100 ); ?></h3>
                        </div>
					<?php endif;
					// different mobile
					echo $item_col_background_color == 'light-blue' ? '</div>' : '';
					// /integrations__grid-item__content
					if ( $item_col_values ): ?>
                        <ul class="timeline timeline__list<?php echo $li_stretch; ?>">
							<?php foreach ( $item_col_values as $c_value ):
								$col_value = $c_value['col_value']; ?>
                                <li class="timeline__item"><?php echo substr( $col_value, 0, 200 ); ?></li>
							<?php endforeach; ?>
                        </ul>
					<?php endif;
					// different mobile
					echo $item_col_background_color == 'dark-blue' ? '</div>' : '';
					// /integrations__grid-item__content ?>
                </div>
				<?php endforeach; ?>
            </div>
			<?php endif; ?>
        </div>
</section>