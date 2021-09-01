<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NCS4_Pro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<?php include('template-parts/message.html');?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ncs4-pro' ); ?></a>
	<a class="skip-link screen-reader-text" href="#colophon"><?php esc_html_e( 'Skip to footer', 'ncs4-pro'); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-header__inner ncs4-site-margin">
			<div class="site-header-col site-header-col__col1">
				<div id="site-header-topbar"></div>
				<div class="col-inner">
					<a class="title-link" href="/">
						<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

						if ( has_custom_logo() ) {
						    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
						} else {
						    echo '<h1>' . get_bloginfo('name') . '</h1>';
						}
						?>
					</a><!-- .title-link -->
				</div><!-- .col-inner -->
			</div><!-- .header-col.header-col1 -->
			<div class="site-header-col site-header-col__col2">
				<div class="col-inner">
					<!-- Container for membership link & small mobile buttons -->
					<div class="header-widget-area__small">
						<!-- Membership Button -->
						<div id="header-membership">
							<!-- Connect Link -->
							<a href="https://connect.ncs4.usm.edu/">Membership</a>
						</div><!-- #header-membership-->
						<div id="mobile_search-bar-toggle" class="mobile-widget">
							<button class="search-bar-toggle" aria-controls="header-search-bar" aria-expanded="false">
								<span class="screen-reader-text">Open search bar</span>
							</button><!-- .search-bar-toggle -->
						</div><!-- #mobile_search-bar-toggle -->
						<div id="mobile_navbar-toggle" class="mobile-widget">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<span class="dashicons dashicons-menu"/>
							</button>
						</div><!-- #mobile_navbar-toggle-->
					</div><!-- .header-widget-area__small -->
					<!-- Search bar widget -->
					<div id="header-search-widget" class="header-widget-area widget-area">
						<div id="header-search-widget__inner" class="header-widget-area__inner widget-area__inner">
							<form id="header-search-bar" class="search-form" method="get" action="/" role="search" itemprop="potentialAction" itemtype="https://schema.org/SearchAction">
								<label class="search-form-lbl screen-reader-text" for="searchform">Search</label>
								<input id="searchform" class="search-form-input" type="search" name="s" placeholder="Search" itemprop="query-input"><button class="search-form-submit" type="submit" value="Search" title="Search">
									<span class="screen-reader-text">Submit</span>
								</button>
								<meta content="/?s={s}" itemprop="target">
							</form>
						</div><!-- #header-search-widget__inner -->
					</div><!-- #header-search-widget -->
					<!-- Navbar -->
					<div id="header-navbar-area" class="header-widget-area">
						<nav id="header-navbar" class="main-navigation">
							<?php
							include get_stylesheet_directory() . '/ncs4-nav-walker.php';
							wp_nav_menu(
								array(
									'theme_location' 	=> 'menu-1',
									'menu_id'		 			=> 'primary-menu',
									'walker' 					=> new NCS4_Nav_Walker(),
								)
							);
							?>
						</nav>
					</div><!-- .col-inner -->
				</div><!-- #header-navbar-area -->
			</div><!-- .header-col.header-col2 -->
		</div><!-- .site-header-inner -->
	</header><!-- #masthead -->
