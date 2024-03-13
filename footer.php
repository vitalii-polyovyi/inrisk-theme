</main>
<footer>
    <div class="footer">
        <div class="footer__container">
			<?php if ( $footer_logo = get_field( 'footer_logo', 'options' ) ) : ?>
                <a href="<?php echo get_home_url(); ?>" class="logo__link" aria-label="logo-link-footer">
                    <img class="site-logo--footer"
                         src="<?php echo LAZY_PRELOAD; ?>"
                         data-src="<?php echo esc_url( $footer_logo['url'] ); ?>"
                         width="<?php echo isset( wp_get_attachment_metadata( $footer_logo['ID'] )['width'] ) ? wp_get_attachment_metadata( $footer_logo['ID'] )['width'] : '284'; ?>"
                         height="<?php echo isset( wp_get_attachment_metadata( $footer_logo['ID'] )['height'] ) ? wp_get_attachment_metadata( $footer_logo['ID'] )['height'] : '52'; ?>"
                         alt="<?php echo ! empty( $footer_logo['alt'] ) ? esc_attr( $footer_logo['alt'] ) : 'footer-logo'; ?>"
                         loading="lazy">
                </a>
			<?php endif; ?>
			<?php if ( $footer_socials = get_field( 'footer_socials', 'option' ) ) : ?>
                <div class="footer-networks">
                    <ul class="social-list">
						<?php
						$socials_counter = 0;
						$social_icon     = '';
						foreach ( $footer_socials as $social ) :
							$footer_social_link = $social['footer_social_link'];
							if ( $socials_counter == 0 ) {
								$social_icon = ' icon-linkedin'; // at the moment
							} else {
								$social_icon = '';
							} ?>
                            <li>
                                <a class="icon footer__social<?php echo $social_icon; ?>"
                                   href="<?php echo esc_url( $footer_social_link['url'] ); ?>"
                                   target="<?php echo ! empty( $footer_social_link['target'] ) ? esc_attr( $footer_social_link['target'] ) : '_self'; ?>"
                                   aria-label="social-network">
                                </a>
                            </li>
							<?php $socials_counter ++;
						endforeach; ?>
                    </ul>
                </div>
			<?php endif; ?>
            <nav id="nav-footer" aria-label="footer-navigation-menu">
				<?php
				if ( has_nav_menu( 'footer_first_menu' ) ): ?>
                    <div class="footer-menu-wrap">
						<?php $first_menu = wp_get_nav_menu_object( get_nav_menu_locations()['footer_first_menu'] );
						echo '<h4>' . $first_menu->name . '</h4>';
						wp_nav_menu(
							array(
								'theme_location' => 'footer_first_menu',
								'menu_class'     => 'nav-menu',
								'container'      => false,
								'items_wrap'     => '<ul class="footer-list">%3$s</ul>'
							)
						); ?>
                    </div>
				<?php endif;
				if ( has_nav_menu( 'footer_second_menu' ) ): ?>
                    <div class="footer-menu-wrap">
						<?php $second_menu = wp_get_nav_menu_object( get_nav_menu_locations()['footer_second_menu'] );
						echo '<h4>' . $second_menu->name . '</h4>';
						wp_nav_menu(
							array(
								'theme_location' => 'footer_second_menu',
								'menu_class'     => 'nav-menu',
								'container'      => false,
								'items_wrap'     => '<ul class="footer-list">%3$s</ul>'
							)
						); ?>
                    </div>
				<?php endif;
				if ( has_nav_menu( 'footer_third_menu' ) ): ?>
                    <div class="footer-menu-wrap">
						<?php $third_menu = wp_get_nav_menu_object( get_nav_menu_locations()['footer_third_menu'] );
						echo '<h4>' . $third_menu->name . '</h4>';
						wp_nav_menu(
							array(
								'theme_location' => 'footer_third_menu',
								'menu_class'     => 'nav-menu',
								'container'      => false,
								'items_wrap'     => '<ul class="footer-list">%3$s</ul>'
							)
						); ?>
                    </div>
				<?php endif; ?>
            </nav>
			<?php if ( $copyright_text = get_field( 'copyright_text', 'options' ) ) :
				$copyright_str = str_replace( "©YEAR", "©" . date( "Y" ), $copyright_text ); ?>
                <div class="copyright">
                    <p class="copyright-text">
						<?php echo $copyright_str; ?>
                    </p>
                </div>
			<?php endif; ?>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>