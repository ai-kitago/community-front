<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package community
 */
$content = $dataClass->getData(get_the_ID());
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article id="post-<?php the_ID(); ?>" <?php post_class('shop'); ?>>
				<header class="single-header">
					<div class="wrapper">
						<div class="single-logo">
							<a href="#"><img src="<?php echo get_template_directory_uri().'/images/shop/logo-shop-image-01.jpg'; ?>" class="suck"></a>
						</div>
					</div>
					<style>
						.single-header {
							background-image: url("<?php echo get_template_directory_uri().'/images/shop/top-shop-image-01.jpg'; ?>");
						}
					</style>
				</header>
				<section class="entry-section">
					<div class="wrapper">
						<header class="entry-header">
							<span class="category-name category-color align-center">YOGA SHOP</span>
							<h1 class="entry-title"><?php echo get_the_title(); ?><span class="entry-shopname">&nbsp;<?php echo $content['shop_name']; ?></span></h1>
							<p class="entry-company-name"><?php echo $content['company']; ?></p>
							<p class="entry-description"><?php echo $content['description']; ?></p>
							
							<div class="entry-tel"><a href="tel:03-5725-9707">03-5725-9707</a></div>
							
							<div class="social-icon">
								<ul>
									<li><a href="#" rel="nofollow" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></li>
									<li><a href="#" rel="nofollow" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" rel="nofollow" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#" rel="nofollow" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#" rel="nofollow" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							
						</header>
					</div>
				</section>
				<section class="entry-section">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">基本情報<span class="category-color">INFORMATION</span></h2>
						</header>
						<div class="entry-content">
							<div class="entry-lightbox">
								<ul class="gallery-ul">
									<li class="gallery-li">
										<a class="venobox" data-gall="gallery01" href="<?php echo get_template_directory_uri(); ?>/images/studio/main/studio-main-image-01.jpg">
											<img src="<?php echo get_template_directory_uri(); ?>/images/studio/thumbnail/studio-thumbnail-image-01.jpg" class="suck">
										</a>
									</li>
									<li class="gallery-li">
										<a class="venobox" data-gall="gallery01" href="<?php echo get_template_directory_uri(); ?>/images/studio/main/studio-main-image-02.jpg">
											<img src="<?php echo get_template_directory_uri(); ?>/images/studio/thumbnail/studio-thumbnail-image-02.jpg" class="suck">
										</a>
									</li>
									<li class="gallery-li">
										<a class="venobox" data-gall="gallery01" href="<?php echo get_template_directory_uri(); ?>/images/studio/main/studio-main-image-01.jpg">
											<img src="<?php echo get_template_directory_uri(); ?>/images/studio/thumbnail/studio-thumbnail-image-01.jpg" class="suck">
										</a>
									</li>
									<li class="gallery-li">
										<a class="venobox" data-gall="gallery01" href="<?php echo get_template_directory_uri(); ?>/images/studio/main/studio-main-image-02.jpg">
											<img src="<?php echo get_template_directory_uri(); ?>/images/studio/thumbnail/studio-thumbnail-image-02.jpg" class="suck">
										</a>
									</li>
								</ul>
							</div>
							<div class="row">
								<div class="col-pc-6 col-sp-12">
									<table class="detail-table">
										<tbody>
											<tr>
												<th>ヒトコト</th>
												<td>オシャレでかわいいヨガウェアやヨガマットに特化したオンライン通販ショップ
国内外からのセレクトであなたの探していたアイテムも見つかるはず。</td>
											</tr>
											<tr>
												<th>お支払い方法</th>
												<td>
													<span class="tag">VISA</span>
													<span class="tag">マスターカード</span>
													<span class="tag">JCB</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-pc-6 col-sp-12">
									<table class="detail-table">
										<tbody>
											<tr>
												<th>営業時間</th>
												<td>
													<ul>
														<li><span>月曜：</span>14:00～21:00</li>
														<li><span>火曜：</span>14:00～21:00</li>
														<li><span>水曜：</span>14:00～21:00</li>
														<li><span>木曜：</span>14:00～21:00</li>
														<li><span>金曜：</span>14:00～21:00</li>
														<li><span>土陽：</span>14:00～21:00</li>
														<li><span>祝日：</span>18:00～23:00</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>定休日</th>
												<td>水曜</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<footer class="entry-footer">

						</footer>
					</div>
				</section>
				
				<section class="entry-section">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">おすすめ商品<span class="category-color">ITEM</span></h2>
						</header>
						<div class="section-content">
							<div class="row row-height slick-item">
								<?php
									$itemClass = new itemClass;
									foreach($itemClass->get() as $key => $value){
								?>
								<div class="col-pc-4">
									<div class="item-block">
										<label class="item-trigger" for="modal-item-<?php echo $key; ?>">
											<div class="item-thumbnail">
											<!-- <a href="<?php echo $value['href']; ?>"> -->
												<img src="<?php echo get_template_directory_uri(); ?>/images/shop/item/<?php echo $value['src'] ?>" class="suck">
											</div>
											<div class="item-content">
												<h3 class="item-title"><?php echo mb_strimwidth($value['title'],0,46,'…','UTF-8'); ?></h3>
												<p class="item-description"><?php echo mb_strimwidth($value['description'],0,80,'…','UTF-8'); ?></p>
											</div>
										</label>
									</div>
								</div>
								<?php } ?>
							</div>
							<?php
								foreach($itemClass->get() as $key => $value){
							?>
							<div class="modal">
								<input id="modal-item-<?php echo $key; ?>" class="checkbox" type="checkbox">
								<div class="modal-overlay">
									<label for="modal-item-<?php echo $key; ?>" class="o-close"></label>
									<div class="modal-wrap">
										<!-- <label for="modal-trigger" class="close">&#10006;</label> -->
										<img src="<?php echo get_template_directory_uri(); ?>/images/shop/item/<?php echo $value['src'] ?>" class="suck">
										<h2><?php echo $value['title']; ?></h2>
										<p><?php echo $value['description']; ?></p>
										<a href="<?php echo $value['href']; ?>" class="button button-shop" target="_blank">商品ページへ</a>
									</div>
								</div>
							</div>
							<?php } ?>
							<script>
							<!--
							jQuery(function($){
								$('.slick-item').slick({
							        accessibility: true,
							        arrows: true,
							        dots: true,
							        infinite: true,
							        speed: 400,
							        slidesToShow: 3,
							        slidesToScroll: 1,
							        centerMode: true,
							        centerPadding: '0px',
							        //variableWidth: true,
							        cssEase: 'ease-out',
							        autoplay: true,
							        autoplaySpeed: 6000,
							        lazyLoad: 'progressive', // ondemand OR progressive
							        responsive: [
							            {
							                breakpoint: 640,
							                settings: {
							                    dots: true,
							                    arrows: false,
							                    centerMode: true,
							                    slidesToShow: 1
							                }
							            }
							        ]
							    });
							});
							-->
							</script>
						</div>
					</div>
				</section>
				
				<section class="entry-section access">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">アクセス<span class="category-color">ACCESS</span></h2>
						</header>
						<div class="section-content">
							<div class="row row-height">
								<div class="col-pc-12 col-sp-12">
									<div class="gpsearch">
										<div id="gpsearch-map"></div>
										<div class="gpsearch-marker"></div>
									</div>
									<script>
										jQuery(function($){
											gpSearch_display(<?php echo $content['lan']; ?>,<?php echo $content['lot']; ?>);
										});
									</script>
								</div>
								<div class="col-pc-9 col-sp-12">
									<p><bold>住所</bold>〒<?php echo $content['zip_code']; ?>&nbsp;<?php echo $dataClass->prefArray($content['pref_code']); ?><?php echo $content['address']; ?>&nbsp;<?php echo $content['building']; ?></p>
								</div>
								<div class="col-pc-3 col-sp-12">
									<a href="#" class="button" target="_blank">地図アプリで確認</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="entry-section">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">お知らせ<span class="category-color">NEWS</span></h2>
						</header>
						<div class="entry-content">
							<div class="entry-news">
								<ul>
									<li>
										<span class="news-title">休講に関するお知らせ</span>
										<p class="news-content">本日12月20日12:00～の【アストロンヨガフロー】は担当の薬師丸先生の体調不良により、休講させていただくことになりました。<br>何卒宜しくお願い致します。</p>
									</li>
									<li>
										<span class="news-title">休講に関するお知らせ</span>
										<p class="news-content">本日12月20日12:00～の【アストロンヨガフロー】は担当の薬師丸先生の体調不良により、休講させていただくことになりました。<br>何卒宜しくお願い致します。</p>
									</li>
									<li>
										<span class="news-title">休講に関するお知らせ</span>
										<p class="news-content">本日12月20日12:00～の【アストロンヨガフロー】は担当の薬師丸先生の体調不良により、休講させていただくことになりました。<br>何卒宜しくお願い致します。</p>
									</li>
									<li>
										<span class="news-title">休講に関するお知らせ</span>
										<p class="news-content">本日12月20日12:00～の【アストロンヨガフロー】は担当の薬師丸先生の体調不良により、休講させていただくことになりました。<br>何卒宜しくお願い致します。</p>
									</li>
									<li>
										<span class="news-title">休講に関するお知らせ</span>
										<p class="news-content">本日12月20日12:00～の【アストロンヨガフロー】は担当の薬師丸先生の体調不良により、休講させていただくことになりました。<br>何卒宜しくお願い致します。</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				
				<section class="entry-section job">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">関連情報<span class="category-color">RELATED</span></h2>
						</header>
						<div class="section-content">
							<div class="row row-height">
							<?php
								$max = 2;
								$i = 0;
								$blockClass = 'col-pc-4 col-sp-12';
								foreach ($dataClass->getData() as $key => $value) :
									if($value['post_type'] == 'job' && $i < $max && $value['author'] == 'OHANAsmile inc.') :
										include(get_template_directory().'/template-parts/content-block.php');
										$i++;
									endif;
								endforeach;
							?>
							<?php
								$max = 1;
								$i = 0;
								$blockClass = 'col-pc-4 col-sp-12';
								foreach ($dataClass->getData() as $key => $value) :
									if($value['post_type'] == 'event' && $i < $max) :
										include(get_template_directory().'/template-parts/content-block.php');
										$i++;
									endif;
								endforeach;
							?>
							</div>
						</div>
						<footer class="section-footer">

						</footer>
					</div>
				</section>
				
				<section class="entry-section company">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">企業情報<span class="category-color">company</span></h2>
						</header>
						<div class="section-content">
							<div class="row">
								<div class="col-pc-2 col-pc-offset-2 col-sp-6 col-sp-offset-3">
									<img src="<?php echo get_template_directory_uri().'/images/company/company-logo-01.png' ?>" class="suck">
								</div>
								<div class="col-pc-8 col-sp-12">
									<table class="company-table">
										<tbody>
											<tr>
												<th>企業名</th>
												<td>株式会社 オハナスマイル OHANAsmile inc.</td>
											</tr>
											<tr>
												<th>設立</th>
												<td>2008年</td>
											</tr>
											<tr>
												<th>役員</th>
												<td>代表取締役：酒造博明<br>取締役：内堀隆</td>
											</tr>
											<tr>
												<th>従業員</th>
												<td>30人</td>
											</tr>
											<tr>
												<th>事業内容</th>
												<td>・インターネットメディア事業<br>・インターネット広告代理事業<br>・インターネットショッピングサイト運営管理事業</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<footer class="section-footer">

						</footer>
					</div>
				</section>
			</article>
		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php include(get_template_directory().'/template-parts/content-add.php'); ?>

<?php
//get_sidebar();
get_footer();
