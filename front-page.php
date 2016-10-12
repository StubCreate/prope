<?php
/**
 * The template for displaying front-page
 */
get_header(); ?>
<div class="row">
	<div class="large-5 small-12 colums left">
		<h3 class="field_tit">NEWS</h3>
		<dl class="list_news">
		<?php
		   $newslist = get_posts( array(
		    'category_name' => 'news', //特定のカテゴリースラッグを指定
		    'posts_per_page' => 3 //取得記事件数
		  ));
		    foreach( $newslist as $post ):
		    setup_postdata( $post );
		?>
		<?php
		$days = 30;
		$today = date_i18n('U');
		$entry = get_the_time('U');
		$news = date('U',($today - $entry)) / 86400 ;
		if( $days > $news ){ print '<span class="new">New!</span>'; }
?>
		<dt> <?php the_time('Y年n月j日'); ?></dt>
		<dd class="detail"> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
		<?php the_excerpt(); ?>

		</dd>
		<?php
		  endforeach;
		?>
	  <?php
	    else;
	  ?>
		<dt></dt>
		<dd class="detail">現在、お知らせはありません。</dd>
		<?php endif; ?>
		</dl>
		<?php wp_reset_postdata(); ?>
	</div><!-- News -->
	<div class="large-7 small-12 colums right">
		<h3 class="field_tit">COUPON</h3>
		<a href="<?php bloginfo('url'); ?>/2426">
			<img class="coupon" src="<?php echo get_template_directory_uri(); ?>/assets/img/coupon.jpg" alt="クーポン一覧" />
		</a>
</div><!--SnapWidget-->
</div>

<div class="front-news">
	<div class="row">
		<div class="large-12 columns">
			<h3 class="field_tit">PICK&nbsp;UP</h3>
			<div class="row newstyle">
				<?php query_posts("cat=20&showposts=4"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="large-3 small-12 columns">
					<a href="<?php the_permalink(); ?>">
						<div class="newspost">
							<div class="row">
								<div class="large-12 small-3 columns">
									<div class="thumbnail">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'top-thumb', array( 'class' => 'thumbnail' ) ); ?>
									<?php else : ?>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no_image.gif" alt="" title="" />
									<?php endif; ?>
									</div>
								</div>

								<div class="large-12 small-9 columns">
									<div class="news-meta">
										<div class="date">
											<?php the_time( 'Y/m/d' ); ?>
										</div>
										<p>
											<?php echo mb_substr( get_the_title(), 0, 40 ); ?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
			</div>
		</div>
	</div> <!-- /row -->
</div> <!-- /front-news -->

<div class="front-sp">
	<div class="row">
		<div class="large-5 small-12 columns">
			<div class="large-12 small-12 columns circle">
				<a href="<?php bloginfo('url'); ?>/?post_type=staff"><img class="philosoy" src="<?php echo get_template_directory_uri(); ?>/assets/img/philosophy.jpg" alt="プロペラヘアーのコンセプト" /></a>
				<div class="large-8 small-8 columns all_staff">
         <span>PROPELLER&nbsp;HAIR'S</span><br>
				 <span>ALL&nbsp;STAFF&nbsp;PAGE</span>
				</div>
			</div>
		</div>
		<div class="large-3 small-12 columns kodawari">
			<h1>Our&nbsp;Minds</h1>
			<h2>自分的ヘアスタイル</h2>
			<p>&nbsp;&nbsp;=&nbsp;ジブン的こだわり</p>
		</div>
		<div class="large-4 small-12 columns recruit">
			<div class="large-8 small-8 columns info_recruit">
				<span>GO&nbsp;TO!<br>RECRUITMENT&nbsp;SITE！</span>
			</div>
				<div class="large-12 small-12 columns">
			<a href="#"><img class="bnr_recruit" src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit.jpg" alt="リクルートサイトへ"></a>
	</div>
</div>
</div>

<div class="area_pick">
	<div class="row front-feature">
		<center>
		<h3 class="info_tit">PICK&nbsp;UP</h3></center>
	<?php if ( get_page_by_path( 'concept' ) ) : ?>
		<div class="large-4 columns">
			<a href="<?php echo get_permalink( get_page_by_path( 'concept' )->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/concept.jpg" alt="コンセプト"></a>
			<h5><a href="<?php echo get_permalink( get_page_by_path( 'concept' )->ID ); ?>"><strong>コンセプト</strong></a></h5>
			<p>丁寧で細やかな、カウンセリングと、幅広く個性あふれるデザインが特徴。</p>
		</div>
	<?php endif; ?>
	<?php if ( get_page_by_path( 'menu' ) ) : ?>
		<div class="large-4 columns">
			<a href="<?php echo get_permalink( get_page_by_path( 'menu' )->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.jpg" alt="メニュー"></a>
			<h5><a href="<?php echo get_permalink( get_page_by_path( 'menu' )->ID ); ?>"><strong>メニュー</strong></a></h5>
			<p>カット・パーマの他にも充実したオーガニックカラーやヘッドスパメニューも。</p>
		</div>
	<?php endif; ?>
	<?php if ( get_page_by_path( 'access' ) ) : ?>
		<div class="large-4 columns">
			<a href="<?php echo get_permalink( get_page_by_path( 'access' )->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/access.jpg" alt="アクセス"></a>
			<h5><a href="<?php echo get_permalink( get_page_by_path( 'access' )->ID ); ?>"><strong>アクセス</strong></a></h5>
			<p>プロペラヘアーまでの詳しい地図などはこちらを御覧ください。</p>
		</div>
	<?php endif; ?>
	</div>
</div>


	<div class="row">
		<div class="large-6 columns">
		<center>
		<h3 class="cata_tit">HAIR&nbsp;CATALOG</h3></center>
		<div class="slider2">
		<div><a href="<?php bloginfo('url'); ?>/haircatalog/サイド短めのショートヘアー"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide_cata01.jpg" alt="ヘアーカタログ01" /></a></div>
		<div><a href="<?php bloginfo('url'); ?>/haircatalog/まっすぐ揃ったバングが印象的"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide_cata02.jpg" alt="ヘアーカタログ02" /></a></div>
		<div><a href="<?php bloginfo('url'); ?>/haircatalog/女性らしく、活動的に"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide_cata03.jpg" alt="ヘアーカタログ03" /></a></div>
		<div><a href="<?php bloginfo('url'); ?>/haircatalog/軽めのパーマ"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide_cata04.jpg" alt="ヘアーカタログ04" /></a></div>
		<div><a href="<?php bloginfo('url'); ?>/haircatalog/黒髪のスタイリッシュアレンジ"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide_cata05.jpg" alt="ヘアーカタログ05" /></a></div>
		</div>
</div>
</div>


<div id="main" class="site-main row">
<?php get_footer(); ?>
