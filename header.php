<?php 
/**
 * Dusk Magazine theme header
**/ 
?>
<!DOCTYPE html>
<html <?php language_attributes();?>><head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<!--viewport-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--pingback-->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="header">
	<div id="top-navigation">
		<div class="top-navigation-wrap">
			<nav id="top-menu">
				<?php if ( has_nav_menu( 'top-menu' ) ) {wp_nav_menu(array('theme_location' => 'top-menu', 'depth' => 1, 'fallback_cb'     => 'wp_page_menu')); } else { echo '<span class="top-add-menu">ADD MENU</span>';} ?>
			</nav>
			<!--top-menu-->
			<div class="top-date-wrap">
				<div id="top-date">
					<?php echo esc_html(date('l'));?> - <?php echo date(get_option('date_format')); ?>
				</div>
				<!--top-date-->
			</div>
			<!--top-date-wrap-->
		</div>
		<!-- top-navigation-wrap -->
	</div>
	<!--top-navigation-->
	<div class="site-logo-wrapper">
		<div id="site-logo">
			<div class="big-logo">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php header_image(); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
				</a>
			</div>
			<!--big-logo-->
		</div>
		<!--site-logo-->
		<?php $dusk_magazine_header_advert = get_option( 'dusk_magazine_header_advert' );if ( ! empty( $dusk_magazine_header_advert ) ){?>
		<div class="header-ad-space">
			<?php echo dusk_magazine_ad_widget_sanitize(get_option('dusk_magazine_header_advert')); ?>
		</div>
		<!-- header-ad-space -->
		<?php } ?>
	</div>


	<div id="nav-wrapper">
		<div id="navigation" class="<?php echo esc_attr(get_option('dusk_magazine_fixed_menu', 'show-menu')); ?> <?php echo esc_attr(get_option('dusk_magazine_header_type')); ?>">
			<nav id="main-nav">
			<?php $dusk_magazine_menu_logo = get_option( 'dusk_magazine_menu_logo' );if ( ! empty( $dusk_magazine_menu_logo ) ){?>
				<div class="nav-logo">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php echo esc_attr($dusk_magazine_menu_logo); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
					</a>
				</div>
				<!--big-logo-->
				<?php } ?>
				<div id="mob-menu">
					<div class="mob-menu-button">
					</div>
					<!-- mob-menu-button -->
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php echo esc_attr($dusk_magazine_menu_logo); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
					</a>
					<div class="search-box">
					</div>
					<!--search-box-->
				</div>
				<!--mob-menu-->
				<?php if ( has_nav_menu( 'main-menu' ) ) {wp_nav_menu(array(
				'theme_location' => 'main-menu',
				'depth' => 10, 
				'fallback_cb'     => 'wp_page_menu',
				'walker' => new dusk_magazine_super_menu()
				));}else { echo '<span class="add-menu">ADD MENU</span>';} ?>
								<span class="close-search-box">
				</span>
				<a href="#" class="search-menu-icon">
				</a>
				<?php	dusk_magazine_menu_share_icons();	 ?>			
			</nav>
			<!--main-nav-->
			<div class="search-box widgetfx-1">

				<?php get_search_form(); ?>
			</div>
			<!--search-box-->		
		</div>
		<!--navigation-->
	</div>
	<!--nav-wrapper-->
</header>
<!--header-->
<section id="wrapper" class="hfeed">
