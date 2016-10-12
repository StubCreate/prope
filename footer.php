<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _s
 */
?>
		</div><!-- #main -->

		<div class="breadcrumb">
			<div class="row">
				<div class="large-12 columns">
					<p>
						<?php if ( class_exists( 'WP_SiteManager_bread_crumb' ) ) { WP_SiteManager_bread_crumb::bread_crumb( 'type=string' ); } ?>
					</p>
				</div>
			</div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="row">


				<div class="large-6 columns">
					<?php do_action( 'before_sidebar' ); ?>
					<?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?>
					<aside id="search" class="widget widget_search">
						<h4 class="widget-title">MENU</h4>
							<?php wp_nav_menu( array( 'theme_location' =>'primary', 'container' => '', 'menu_class' => 'site-map', 'depth' => 1 ) ); ?>
					</aside>
					<?php endif;?>
				</div>

				<!-- <div class="large-4 columns">
					<?php do_action( 'before_sidebar' ); ?>
					<?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?>
					<aside id="calendar" class="widget widget_calendar">
						<h4 class="widget-title">NEW</h4>
							<ul>
								<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
							</ul>
					</aside>
					<?php endif;?>
				</div> -->

				<div class="large-6 columns">
					<?php do_action( 'before_sidebar' ); ?>
					<?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?>
					<aside id="site_meta" class="widget widget_site_meta">
						<h4 class="widget-title">SOCIAL</h4>
					  <ul>
							<li><a href="">Facebook</a></li>
							<li><a href="">Instagram</a></li>
							<li><a href="">Line</a></li>
							<li><a href="">YouTube</a></li>
						</ul>
					</aside>
					<?php endif;?>
				</div>
			</div>

			<div class="row">
				<div class="large-12 columns">
					<div class="site-info text-center">
						<p>Copyright&copy; <?php echo date_i18n( 'Y' );?><?php if ( get_page_by_path( 'sitemap' ) ) : ?>　<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> All Rights Reserved. | <a href="<?php echo get_permalink( get_page_by_path( 'sitemap' )->ID ); ?>" title="sitemap" >Sitemap</a><?php endif; ?></p>
					</div><!-- .site-info -->
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->
<?php wp_footer(); ?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('.slider1').slick({
	centerMode: true, //要素を中央寄せ
  centerPadding:'20px', //両サイドの見えている部分のサイズ
  dots: false,
  infinite: true,
	autoplay: true,
  autoplaySpeed: 5000,
	arrows: false,
	directionNav: false,
	ontrolNav: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
    });
  </script>
	<script type="text/javascript">
	$(document).ready(function(){
	$('.slider2').slick({
		centerMode: true, //要素を中央寄せ
	  centerPadding:'50px', //両サイドの見えている部分のサイズ
	  dots: true,
	  infinite: true,
		autoplay: true,
	  autoplaySpeed: 5000,
		arrows: true,
		directionNav: false,
		ontrolNav: false,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 5,
	        slidesToScroll: 1,
	        infinite: true,
	        dots: false,
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});
	    });
	  </script>





<script>
var ua = navigator.userAgent.toLowerCase();
var isMobile = /iphone/.test(ua)||/android(.+)?mobile/.test(ua);
if (!isMobile) {
$('[href^="tel:"]').on('click', function(e) {
e.preventDefault();
});
}
</script>
</body>
</html>
