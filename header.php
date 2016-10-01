<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _s
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name='robots' content='noindex,follow' />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script type="text/javascript"src="//webfonts.sakura.ne.jp/js/sakura.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>

	<?php wp_head(); ?>
	<!--[if lt IE 9]>
		<link rel="stylesheet" id="ie-media-css"  href="<?php echo get_template_directory_uri(); ?>/assets/css/foundation-ie.min.css" type="text/css" media="all" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js" type="text/javascript"></script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<?php do_action( 'before' ); ?>
		<header id="masthead" class="site-header" role="banner">
			<div class="row">
				<div class="site-branding large-7 columns">
					<h1 class="site-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo00.png" alt="プロペラヘアー" />
						</a>
					</h1>
				</div>
				<div class="site-address large-5 columns">
					<div class="genericon genericon-phone"></div>並木店: <a href="tel:082-544-3511">082-544-3511</a>&nbsp;段原店: <a href="tel:082-506-1941">082-506-1941</a>
				</div>
			</div>
			<?php if ( is_home() || is_front_page() ) : ?>
						<div id="main-img">
							<div class="slider1">
							<div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide01.jpg" alt="トップイメージ01" /></div>
							<div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide02.jpg" alt="トップイメージ02" /></div>
							<div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide03.png" alt="トップイメージ03" /></div>
							<div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide04.jpg" alt="トップイメージ04" /></div>
							</div>
						</div>
			<?php endif; ?>
			<nav id="site-navigation" class="navigation-main" role="navigation">
				<h1 class="menu-toggle text-right">
					<div class="genericon genericon-menu"></div>
				</h1>
				<div class="row">
					<div class="large-12 columns">
						<?php wp_nav_menu( array( 'theme_location' =>'primary' ) ); ?>
					</div>
				</div>
			</nav>
			<!-- #site-navigation -->
		</header>
		<!-- #masthead -->

<?php if ( ! is_front_page() ) : ?>
		<div id="main" class="site-main row">
<?php endif; ?>