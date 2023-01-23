<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta id="viewport-tag" name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( has_action( 'aios_seotools_gtm_body' ) ) { do_action('aios_seotools_gtm_body'); } ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Mobile Header") ) : ?><?php endif ?>

	<div id="main-wrapper">


    <?php do_action('aios_landing_page_header'); ?>
    <?php do_action('aios_neighborhoods_header'); ?>


	<header class="header fixed w-100 top-0 left-0">
		<div class="header-container default-container flex justify-between items-center">

			<div class="header-left">
				<div class="logo">
					<a href="<?php echo esc_url( home_url() ) ?>" class="site-name block w-100">
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/logo.png" alt="Joe Milani Real Estate Group" class="block w-100">
					</a>
				</div>
			</div><!-- end of header left -->

			<div class="header-right flex items-center">
				<nav class="navigation">
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'nav', 'theme_location' => 'primary-menu' ) ); ?>
				</nav>

				<div class="header-others flex items-center">
					<div class="translate">
						<div class="hd-translation relative translator-trigger">
							<a href="#" class="flex items-center"><i class="ai-font-world-f"></i>translate</a>
						</div>
					</div>
					<div class="burger-menu"></div>
				</div>
			</div><!-- end of header right -->
		</div><!-- end of header container -->
	</header>


	<div class="expanded-menu fixed w-100 h-100">
		<div class="expanded-menu-container w-100 h-100 relative">

			<div class="expandended-float absolute flex items-center">
				<div class="translate">
					<div class="hd-translation relative translator-trigger">
						<a href="#" class="flex items-center"><i class="ai-font-world-f"></i>translate</a>
					</div>
				</div>

				<div class="expanded-close">
					<i class="ai-font-close-c"></i>
				</div>
			</div><!-- end of expanded float -->

			<div class="logo">
				<a href="<?php echo esc_url( home_url() ) ?>" class="site-name block w-100">
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/logo-colored.png" alt="Joe Milani Real Estate Group" class="block w-100">
				</a>
			</div><!-- end of logo colored -->


			<nav class="expanded-navigation">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'expanded-menu', 'theme_location' => 'primary-menu' ) ); ?>
			</nav>


			<div class="contact-information">
				<ul class="flex items-start justify-center">
					<li>
						<i class="ai-font-phone"></i>
						<strong>Phone: </strong>
						<span><?= do_shortcode('[ai_client_phone]{default-phone}[/ai_client_phone]')?></span>
					</li>
					<li>
						<i class="ai-font-location-c"></i>
						<strong>OFFICE ADDRESS: </strong>
						<span><?= do_shortcode('[ai_client_address]')?></span>
					</li>
					<li>
						<i class="ai-font-envelope-filled-a"></i>
						<strong>EMAIL: </strong>
						<span><?= do_shortcode('[ai_client_email]{default-email}[/ai_client_email]')?></span>
					</li>
				</ul>
			</div><!-- end of contact info -->


		</div>
	</div>
	<main>
		<h2 class="aios-starter-theme-hide-title">Main Content</h2>

		<!-- ip banner goes here -->
    <?php
    if ( ! is_home() && !is_page_template( 'template-homepage.php' ) && is_custom_field_banner( get_queried_object() ) && is_active_sidebar('aios-inner-pages-banner')) {
      dynamic_sidebar('aios-inner-pages-banner');
    }
    ?>
		<!-- ip banner goes here -->


		<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>

		<div id="inner-page-wrapper">
			<div class="container">

		<?php endif ?>
