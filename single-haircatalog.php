<?php
/**
 * The template for displaying single-haircatalog
 */

get_header(); ?>

	<div id="primary" class="content-area large-9 columns">
		<div id="content" class="site-content staff" role="main">
		<h1>スタッフ</h1>
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="entry-content">
			<h2><?php the_title();?> <?php echo get_the_term_list( $post->ID, 'haircatalog-cat', '<span class="staffCate">', ' , ', '</span>' );?></h2>
			<div class="staff-thumbnail"><?php the_post_thumbnail(); ?></div>
			<div class="staff-info">
				<dl>
					<dt>タイトル</dt>
					<dd><?php echo esc_html( post_custom( 'Title' ) ); ?></dd>
				</dl>
				<dl>
					<dt>ヘアースタイル</dt>
					<dd><?php echo esc_html( post_custom( 'hairStyle' ) ); ?></dd>
				</dl>
			</div>
			<div class="staff-content"><?php the_content(); ?></div>
		</div>
		<?php _s_content_nav( 'nav-below' ); ?>
		<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
