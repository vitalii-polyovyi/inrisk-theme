<?php
$info_faq_title = get_sub_field( 'info_faq_title' );
$info_faq_items = get_sub_field( 'info_faq_items' );
?>
<section class="questions">
    <div class="questions__container">
		<?php if ( $info_faq_title ): ?>
            <div class="section__title">
                <h2 class="text_center"><?php echo $info_faq_title; ?></h2>
            </div>
		<?php endif;
		if ( $info_faq_items ) : ?>
            <ul>
				<?php $faq_counter = 1;
				foreach ( $info_faq_items as $f_item ):
					$item_faq_title = $f_item['item_faq_title'];
					$item_faq_description = $f_item['item_faq_description']; ?>
                    <li class="questions__item">
						<?php if ( $item_faq_title ): ?>
                            <div class="collapse__toggle questions__item__title">
                                <span class="questions__item__index"><?php echo sprintf( '%02d', $faq_counter ) . PHP_EOL; ?></span>
                                <h3><?php echo $item_faq_title; ?></h3>
                                <i class="icon collapse__toggle__icon icon-arrow-down icon-color-dark"></i>
                            </div>
						<?php endif; ?>
						<?php if ( $item_faq_description ): ?>
                            <div class="collapse__content questions__item__content">
                                <?php echo $item_faq_description; ?>
                            </div>
						<?php endif; ?>
                    </li>
					<?php $faq_counter ++;
				endforeach; ?>
            </ul>
		<?php endif; ?>
    </div>
</section>