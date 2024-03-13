<?php
$info_process_text_top    = get_sub_field( 'info_process_text_top' );
$info_process_items       = get_sub_field( 'info_process_items' );
$info_process_text_bottom = get_sub_field( 'info_process_text_bottom' );
$info_process_link_bottom = get_sub_field( 'info_process_link_bottom' );
?>
<section class="book-demo_processes">
    <div class="book-demo_processes__container">
        <div class="book-demo_processes__content_wrapper">
			<?php if ( $info_process_text_top ): ?>
                <div class="book-demo_processes__title">
					<?php echo $info_process_text_top; ?>
                </div>
			<?php endif;
			if ( $info_process_items ): ?>
                <div class="book-demo_processes__content">
                    <ul class="linked-points-list">
						<?php foreach ( $info_process_items as $p_item ):
							$item_process_name = $p_item['item_process_name'];
							$item_process_description = $p_item['item_process_description']; ?>
                            <li>
								<?php if ( $item_process_name ): ?>
                                    <h5><?php echo $item_process_name; ?></h5>
								<?php endif;
								echo $item_process_description; ?>
                            </li>
						<?php endforeach; ?>
                    </ul>
                </div>
			<?php endif; ?>
        </div>
		<?php if ( $info_process_text_bottom ): ?>
            <div class="book-demo_processes__card">
				<?php echo $info_process_text_bottom; ?>
            </div>
		<?php endif;
		if ( $info_process_link_bottom ): ?>
            <a class="button button_primary-green button_large"
               href="<?php echo esc_url( $info_process_link_bottom['url'] ); ?>"
               target="<?php echo ! empty( $info_process_link_bottom['target'] ) ? esc_attr( $info_process_link_bottom['target'] ) : '_self'; ?>">
				<?php echo esc_html( $info_process_link_bottom['title'] ); ?>
            </a>
		<?php endif; ?>
    </div>
</section>