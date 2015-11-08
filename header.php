<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package leo
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php leo_html_tag_schema(); ?>>
	
    <div class="container">
<header id="masthead" class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<div class="row">
			<div class="site-header-inner col-sm-12">

				<?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo esc_html(get_custom_header()->width); ?>" height="<?php echo esc_html(get_custom_header()->height); ?>" alt="">
					</a>
				<?php } // end if ( ! empty( $header_image ) ) ?>


				<div class="site-branding">
					<h1 class="site-title" itemprop="headline"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
				</div>

			</div>
		</div>
</header><!-- #masthead -->

<nav class="site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
	<div class="row">
			<div class="site-navigation-inner col-sm-12">
				<div class="navbar navbar-default">
					<div class="navbar-header">
					<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="sr-only"><?php __('Toggle navigation', 'leo') ?></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>

					<!-- Your site title as branding in the menu -->
					</div>

				<!-- The WordPress Menu goes here -->
			<?php wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
					'menu_class' => 'nav navbar-nav',
					'fallback_cb' => '',
					'menu_id' => 'main-menu',
					'walker' => new wp_bootstrap_navwalker()
				)
			); ?>

				</div><!-- .navbar -->
			</div>
		</div>
</nav><!-- .site-navigation -->

<div class="main-content">
	<div class="row">
                    <?php if(!is_front_page()) { ?>
			<div id="content" class="main-content-inner col-sm-12 col-md-8" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
                    <?php } ?>        

