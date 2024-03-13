<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <style>
        .loaded {
            opacity: 1
        }
    </style>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php echo is_front_page() ? get_bloginfo( 'name' ) : wp_title( '' ); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo( 'wpurl' ); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_bloginfo( 'wpurl' ); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_bloginfo( 'wpurl' ); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_bloginfo( 'wpurl' ); ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_bloginfo( 'wpurl' ); ?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileImage" content="<?php echo get_bloginfo( 'wpurl' ); ?>/favicon-32x32.png"/>
    <meta name="msapplication-TileColor" content="#313E50">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:image" content="<?php echo wp_get_attachment_image_src(get_rank_math_open_graph_image(), 'full')[0] ?? PATH_TO_FRONT . '/images/banner-top/inrisk-app-dashboard.png'; ?>">
    <meta property="og:image:width" content="<?php echo wp_get_attachment_image_src(get_rank_math_open_graph_image(), 'full')[1] ?? '1200'; ?>"/>
    <meta property="og:image:height" content="<?php echo wp_get_attachment_image_src(get_rank_math_open_graph_image(), 'full')[2] ?? '630'; ?>"/>
    <meta property="og:image:type" content="image/png"/>
	<?php if ( $head_tag_scripts = get_field( 'head_tag_scripts', 'option' ) ):
		echo $head_tag_scripts;
	endif; ?>
	<?php wp_head(); ?>
</head>
<body>
<?php if ( $body_tag_scripts = get_field( 'body_tag_scripts', 'option' ) ):
	echo $body_tag_scripts;
endif; ?>
<div class="wrapper">
    <header class="bg-dark-blue header">
        <div class="header__container">
	        <?php if ( $header_logo = get_field( 'header_logo', 'option' ) ): ?>
                <a href="<?php echo get_home_url(); ?>" class="header__logo-container" aria-label="logo-link">
                    <img class="header__logo"
                         src="<?php echo LAZY_PRELOAD; ?>"
                         data-src="<?php echo esc_url( $header_logo['url'] ); ?>"
                         width="<?php echo isset( wp_get_attachment_metadata( $header_logo['ID'] )['width'] ) ? wp_get_attachment_metadata( $header_logo['ID'] )['width'] : '284'; ?>"
                         height="<?php echo isset( wp_get_attachment_metadata( $header_logo['ID'] )['height'] ) ? wp_get_attachment_metadata( $header_logo['ID'] )['height'] : '52'; ?>"
                         alt="<?php echo ! empty( $header_logo['alt'] ) ? esc_attr( $header_logo['alt'] ) : 'header-logo'; ?>"
                         loading="lazy">
                </a>
	        <?php endif; ?>
            <input id="menu-toggle" type="checkbox">
            <label class="menu-button" for="menu-toggle">
                <span class="menu-icon"></span>
            </label>
            <nav id="nav" class="navigation" aria-label="header navigation menu">
				<?php if ( has_nav_menu( 'main_header_menu' ) ):
					wp_nav_menu(
						array(
							'theme_location'  => 'main_header_menu',
							'container'       => 'div',
							'container_class' => 'header-menu',
							'menu_class'      => 'nav-menu',
							'items_wrap'      => '<ul class="menu">%3$s</ul>',
						)
					);
				endif; ?>
                <div class="buttons-group">
					<?php if ( $login_link = get_field( 'login_link', 'option' ) ): ?>
                        <a class="button button_small button_text hide_element"
                           href="<?php echo esc_url( $login_link['url'] ); ?>"
                           target="<?php echo ! empty( $login_link['target'] ) ? esc_attr( $login_link['target'] ) : '_self'; ?>"
                           aria-label="user-account">
							<?php echo esc_html( $login_link['title'] ); ?>
                        </a>
					<?php endif; ?>
                    <div class="divide hide_element"></div>
					<?php if ( $demo_link = get_field( 'demo_link', 'option' ) ): ?>
                        <a class="button button_primary-green button_small"
                           href="<?php echo esc_url( $demo_link['url'] ); ?>"
                           target="<?php echo ! empty( $demo_link['target'] ) ? esc_attr( $demo_link['target'] ) : '_self'; ?>"
                           aria-label="contact-link">
							<?php echo esc_html( $demo_link['title'] ); ?>
                        </a>
					<?php endif; ?>
                </div>
            </nav>
        </div>
    </header>
    <main class="page">