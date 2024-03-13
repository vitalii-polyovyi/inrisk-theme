<?php
$leadership_title   = get_sub_field('leadership_title');
$leadership_persons = get_sub_field('leadership_persons');
?>
<section class="our-leadership">
    <div class="our-leadership__container">
        <?php if ($leadership_title) : ?>
            <div class="our-leadership__title">
                <h2 class="text_center"><?php echo $leadership_title; ?></h2>
            </div>
        <?php endif;
        if ($leadership_persons) : ?>
            <div class="our-leadership__grid">
                <?php foreach ($leadership_persons as $l_person) :
                    $person_photo = $l_person['person_photo'];
                    $person_name = $l_person['person_name'];
                    $person_position = $l_person['person_position'];
                    $person_socials = $l_person['person_socials']; ?>
                    <div class="our-leadership__grid__item">
                        <div class="our-leadership__card">
                            <?php if ($person_photo) : ?>
                                <div class="our-leadership__card__selfie">
                                    <img src="<?php echo LAZY_PRELOAD; ?>"
                                         data-src="<?php echo esc_url($person_photo['url']); ?>"
                                         width="<?php echo isset(wp_get_attachment_metadata($person_photo['ID'])['width']) ? wp_get_attachment_metadata($person_photo['ID'])['width'] : '384'; ?>"
                                         height="<?php echo isset(wp_get_attachment_metadata($person_photo['ID'])['height']) ? wp_get_attachment_metadata($person_photo['ID'])['height'] : '505'; ?>"
                                         alt="<?php echo !empty($person_photo['alt']) ? esc_attr($person_photo['alt']) : 'person-photo'; ?>"
                                         loading="lazy">
                                </div>
                            <?php endif; ?>
                            <div class="personal-information">
                                <?php if ($person_name) : ?>
                                    <span class="personal-information__fullname">
                                        <?php echo $person_name; ?>
                                    </span>
                                <?php endif;
                                if ($person_position) : ?>
                                    <span class="personal-information__position">
                                        <?php echo $person_position; ?>
                                    </span>
                                    <?php endif;
                                if ($person_socials) : // max.1 (at this moment)
                                    foreach ($person_socials as $p_social) :
                                        $social_link = $p_social['social_link']; ?>
                                        <a href="<?php echo esc_url($social_link['url']); ?>" class="icon icon-linkedin" target="<?php echo !empty($social_link['target']) ? esc_attr($social_link['target']) : '_self'; ?>"></a>
                                <?php endforeach;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>