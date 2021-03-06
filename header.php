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
	<!-- Facebook -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8&appId=343598589322953";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div id="page" class="hfeed site">
		<?php do_action( 'before' ); ?>
		<header id="masthead" class="site-header" role="banner">
			<div class="row">
				<div class="site-branding large-7 small-12 small-centered large-uncentered columns">
					<h1 class="site-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<span>PROPELLER&nbsp;HAIR</span>
						</a>
					</h1>
				</div>
				<div class="site-address large-5 large-uncentered columns">
			<ul class="snslogo">
				<li class="cont_shop">
					<a href="<?php bloginfo('url'); ?>/contact"><span class="genericon genericon-phone gene"></span></a>
			</li>
				<li class="facebook"><a href="https://www.facebook.com/PROPELLERHAIR" target="_blank">
					<img class="btn_fb" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook_logo.png" alt="Facebook" />
				</a></li>
				<li class="insta"><a href="https://www.instagram.com/propeller_hair/" target="_blank">
					<img class="btn_insta" src="<?php echo get_template_directory_uri(); ?>/assets/img/insta_logo.png" alt="Instagram" />
				</a></li>
			</ul>
				</div>
			</div>

			<div class="reserve"><a href="<?php bloginfo('url'); ?>/contact">Reserve</a></div>

			<nav id="site-navigation" class="navigation-main" role="navigation">
				<h1 class="menu-toggle text-right">
					<div class="genericon genericon-menu"></div>
				</h1>
				<div class="row posi_nav ">
					<div class="large-12 columns">
						<?php wp_nav_menu( array( 'theme_location' =>'primary' ) ); ?>
					</div>
				</div>
			</nav>
		</header>
		<!-- #masthead -->
		<?php if ( is_home() || is_front_page() ) : ?>
					<div id="main-img">
						<div class="slider1">
						<div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide01.jpg" alt="トップイメージ01" /></div>
						<div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide02.jpg" alt="トップイメージ02" /></div>
						<div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide05.png" alt="トップイメージ03" /></div>
						<div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide04.jpg" alt="トップイメージ04" /></div>
						</div>
					</div>
		<?php endif; ?>
		<!-- <div class="row">
		<div class="small-6 small-centered columns">
			<center>
		<ul class="snslogo_sp">
			<li class="cont_shop_sp">
				<span class="genericon genericon-phone gene"></span>
		</li>
			<li class="facebook_sp"><a href="https://www.facebook.com/PROPELLERHAIR" target="_blank">
				<img class="btn_fb_sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook_logo.png" alt="Facebook" />
			</a></li>
			<li class="insta_sp"><a href="https://www.instagram.com/propeller_hair/" target="_blank">
				<img class="btn_insta" src="<?php echo get_template_directory_uri(); ?>/assets/img/insta_logo.png" alt="Instagram" />
			</a></li>
		</ul>
	</center>
	</div>
</div> -->

		<!-- #site-navigation -->

<?php if ( ! is_front_page() ) : ?>
		<div id="main" class="site-main row">
<?php endif; ?>
