<?php
/**
 * The template for displaying single-haircatalog
 */

get_header(); ?>

	<div id="primary" class="content-area large-9 columns">
		<div id="content" class="site-content staff" role="main">
		<h1>Hair&nbsp;Catalog</h1>
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="entry-content">
			<h2><?php the_title();?>
				<?php echo get_the_term_list( $post->ID, 'haircatalog', '<span class="staffCate">', ' , ', '</span>' );?></h2>

			<div class="staff-thumbnail"><?php the_post_thumbnail(); ?></div>
			<div>
				<dl>
					<dt>Concept</dt>
					<dd><?php echo esc_html( post_custom( 'concept' ) ); ?></dd>
				</dl>
				<dl>
					<dt>Stylist</dt>
					<dd><?php echo esc_html( post_custom( 'responsible' ) ); ?></dd>
				</dl>
			</div>
			<div><?php the_content(); ?></div>
		</div>
		<?php _s_content_nav( 'nav-below' ); ?>
		<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(' hairstyle '); ?>
<?php get_footer(); ?>
