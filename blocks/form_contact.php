<?php
$form_contact_description = get_sub_field( 'form_contact_description' );
$form_contact_title       = get_sub_field( 'form_contact_title' );
$form_contact_select      = get_sub_field( 'form_contact_select' ); // ID, max.1
?>
<section class="form-contact">
    <div class="form-contact__container">
        <?php if ( $form_contact_description ): ?>
            <h3 class="form-contact__description"><?php echo $form_contact_description; ?></h3>
        <?php endif;
        if ( $form_contact_title ): ?>
            <h2 class="form-contact__title"><?php echo $form_contact_title; ?></h2>
        <?php endif;
        if ( $form_contact_select ): ?>
            <div class="form-contact__form-wrapper">
                <?php echo do_shortcode( '[contact-form-7 id="' . $form_contact_select[0] . '" html_class="form-contact"]' ); ?>
            </div>
        <?php endif; ?>
    </div>
</section>