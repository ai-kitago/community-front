<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package community
 */
$post = $dataClass->getData(get_the_ID());
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article id="post-<?php the_ID(); ?>" <?php post_class('studio'); ?>>
				<header class="single-header">
					<div class="wrapper">
						<div class="single-logo">
							<a href="#"><img src="<?php echo get_template_directory_uri().'/images/studio/studio-logo-image-01.jpg'; ?>" class="suck"></a>
						</div>
					</div>
					<style>
						.single-header {
							background-image: url("<?php echo get_template_directory_uri().'/images/studio/studio-top-image-01.jpg'; ?>");
						}
					</style>
				</header>
				<section class="entry-section">
					<div class="wrapper">
						<header class="entry-header">
							<span class="category-name category-color align-center">YOGA STUDIO</span>
							<h1 class="entry-title"><?php echo $post['title']; ?><span class="entry-shopname">&nbsp;<?php echo $post['shop_name']; ?></span></h1>
							<p class="entry-company-name"><?php echo $post['company']; ?></p>
							<p class="entry-description"><?php echo $post['description']; ?></p>
							<div class="entry-tel"><a href="tel:03-6825-6007">03-6825-6007</a></div>
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
												<th>入会金</th>
												<td>5,000円</td>
											</tr>
											<tr>
												<th>システム</th>
												<td>単発利用：3,200円 / 1回<br>レギュラークラス：2,800円 / 1回</td>
											</tr>
											<tr>
												<th>クラス内容</th>
												<td>
													<span class="tag">ハタヨガ</span><span class="tag">アーユルヴェーダ</span><span class="tag">常温ヨガ</span><span class="tag">シヴァナンダヨガ</span>
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
							<div class="row">
								<div class="col-pc-4 col-pc-offset-4 col-sp-12">
									<label class="button button-footer" for="modal-trigger">カレンダーを確認<small class="category-color">CLASS SCHEDULE</small></label>
								</div>
							</div>
							<?php include(get_template_directory().'/template-parts/modal-calendar.php'); ?>
						</footer>
					</div>
				</section>
				<section class="entry-section instructor">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">所属インストラクター<span class="category-color">instructor</span></h2>
						</header>
						<div class="section-content">
							<div class="row row-height">
							<?php
								$max = 6;
								$i = 0;
								$blockClass = 'col-pc-2 col-sp-6';
								foreach ($dataClass->getData() as $key => $value) :
									if($value['post_type'] == 'instructor' && $i < $max) :
										include(get_template_directory().'/template-parts/content-instructor-block.php');
										$i++;
									endif;
								endforeach;
							?>
							</div>
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
											gpSearch_display(<?php echo $post['lan']; ?>,<?php echo $post['lot']; ?>);
										});
									</script>
								</div>
								<div class="col-pc-9 col-sp-12">
									<p><bold>住所</bold>〒<?php echo $post['zip_code']; ?>&nbsp;<?php echo $dataClass->prefArray($post['pref_code']); ?><?php echo $post['address']; ?>&nbsp;<?php echo $post['building']; ?></p>
								</div>
								<div class="col-pc-3 col-sp-12">
									<a href="#" class="button" target="_blank">地図アプリで確認</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="entry-section job">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">求人<span class="category-color">JOB</span></h2>
						</header>
						<div class="section-content">
							<div class="row row-height">
							<?php
								$max = 3;
								$i = 0;
								$blockClass = 'col-pc-4 col-sp-12';
								foreach ($dataClass->getData() as $key => $value) :
									if($value['post_type'] == 'job' && $i < $max && $value['author'] == 'OHANAsmile inc.') :
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
				<section class="entry-section">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">クーポン<span class="category-color">COUPON</span></h2>
						</header>
						<div class="entry-content">
							<div class="entry-coupon">
								<div class="row row-height">
								<?php
									$coupon = array(
										array(
											'title'=>'入会金事務手数料無料、当日入会で体験千円が無料！',
											'content'=>'入会金、事務手数料が無料となります。

また、OHANAsmileが初めての方は、￥1,000円でご体験いただくことができ、さらに、当日中のご入会で体験利用料は全額キャッシュバックとなります。

毎月の会費はクレジットカードでの自動支払いが可能で、しかも、￥4,800／4回、￥7,800／8回でヨガマットレンタル無料の良心価格。

この機会をお見逃しなく！'
										),
										array(
											'title'=>'いまだけ！初回体験レッスンが500円！',
											'content'=>'初回体験レッスン1,080円（税込）が
今だけ500円！！
レンタルマット無料！！
♪:*:･･:*:･♪･:*:･･:*:･♪･:*:･･:*:･♪

新しいことを始めてみたい・・・
まずは「体験」してみませんか？
体験後の入会でお得なプランあります！

ドゥミ入会者の6割以上は運動経験のない方☆
安心して参加できる！'
										),
										array(
											'title'=>'当日入会で入会金半額 体験料キャッシュバック',
											'content'=>'各クラス先着２名様までの丁寧な指導(要予約)

日本経済新聞に大きく紹介された人気のヨガ教室。
体験の段階から、各自の心身の状態を把握するため入念なカウンセリングを行います。身体が固くてポーズがでできない人も、腰痛で十分な動きができない人も、膝の痛みで正座や足を曲げることができない人も、自分のできる態勢で痛みを気にすることなく、安心して受講していただけます。フィットネスクラブの施設を利用して心地良い空間で心身を調える本格的なヨガの教室です。
(フィットネスクラブの会員にならなくてもOK)

体験日当日に入会受講の手続きをしていただくと、入会金￥5,400が半額になるチャンス！更に体験料もキャッシュバック。是非この機会に体験してください'
										),
									);
									foreach($coupon as $key => $val) :
										include (get_template_directory().'/template-parts/content-coupon.php');
									endforeach;
								?>
								</div>
							</div>
						</div>
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
