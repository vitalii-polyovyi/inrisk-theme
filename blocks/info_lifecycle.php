<?php
$info_lifecycle_text  = get_sub_field( 'info_lifecycle_text' );
$info_lifecycle_items = get_sub_field( 'info_lifecycle_items' );
?>
<section class="bg-dark-blue lifecycle">
    <div class="lifecycle__container">
		<?php if ( $info_lifecycle_text ): ?>
            <div class="lifecycle__title">
				<?php echo $info_lifecycle_text; ?>
            </div>
		<?php endif;
		if ( $info_lifecycle_items ) : ?>
            <div class="lifecycle__content">
                <ul class="lifecycle-list">
					<?php $lifecycle_counter   = 1;
					foreach ( $info_lifecycle_items as $l_item ):
						$item_lifecycle_title = $l_item['item_lifecycle_title'];
						$item_lifecycle_points = $l_item['item_lifecycle_points']; //arr
						?>
                        <li class="lifecycle-list__item">
                            <div class="collapse__toggle lifecycle-list__item__label">
                                <span class="lifecycle-list__item__index"><?php echo sprintf( '%02d', $lifecycle_counter ) . PHP_EOL; ?></span>
								<?php if ( $item_lifecycle_title ): ?>
                                    <h3><?php echo substr( $item_lifecycle_title, 0, 50 ); ?></h3>
								<?php endif;
								if ( $item_lifecycle_points ) : // drop icon?>
                                    <i class="icon collapse__toggle__icon icon-arrow-down icon-color-dark"></i>
								<?php endif; ?>
                            </div>
							<?php if ( $item_lifecycle_points ) : ?>
                                <div class="collapse__content" data-aos="fade-right">
                                    <ul class="lifecycle__timeline-list">
										<?php foreach ( $item_lifecycle_points as $l_point ):
											$lifecycle_point = $l_point['lifecycle_point'];
											if ( $lifecycle_point ): ?>
                                                <li class="lifecycle__timeline-list__item">
													<?php echo substr( $lifecycle_point, 0, 100 ); ?>
                                                </li>
											<?php endif;
										endforeach; ?>
                                    </ul>
                                </div>
							<?php endif; ?>
                        </li>
						<?php $lifecycle_counter ++;
					endforeach; ?>
                </ul>
            </div>
		<?php endif; ?>
    </div>
</section>