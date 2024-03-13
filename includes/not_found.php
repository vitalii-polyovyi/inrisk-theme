<section class="bg-dark-blue page-not-found">
    <div class="page-not-found__container">
        <span class="page-not-found__error-code">4<span class="letter_decoration">0</span>4</span>
        <p class="page-not-found__message">
			<?php _e( 'Sorry, there’s', TEXT_DOMAIN ); ?>
            <span style="color: #c1f20d;"><?php _e( 'nothing here', TEXT_DOMAIN ); ?></span>
        </p>
        <a class="button button_primary-green" href="<?php echo esc_url( home_url() ); ?>">
			<?php _e( 'Go home', TEXT_DOMAIN ); ?>
        </a>
    </div>
</section>