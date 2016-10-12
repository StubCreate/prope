<?php
/**
 * The template for displaying archive-haircatalog
 */

get_header(); ?>
	<section id="primary" class="content-area large-9 columns">
		<div id="content" class="site-content staff" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">Hair&nbsp;Catalog</h1>
			</header><!-- .page-header -->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content-haircatalog-loopitem' ); ?>

			<?php endwhile; ?>

			<?php if ( class_exists( 'WP_SiteManager_page_navi' ) ) {
						WP_SiteManager_page_navi::page_navi( 'items=7&prev_label=Prev&next_label=Next&first_label=First&last_label=Last&show_num=1&num_position=after' );
					} else {
						_s_content_nav( 'nav-below' );
					}
				?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
