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
			<article id="post-<?php the_ID(); ?>" <?php post_class('event'); ?>>
				<header class="single-header">
					<div class="wrapper">
						<div class="single-logo">
							<a href="#"><img src="<?php echo get_template_directory_uri().'/images/event/event-logo-01.jpg'; ?>" class="suck"></a>
						</div>
					</div>
					<style>
						.single-header {
							background-image: url("<?php echo get_template_directory_uri().'/images/event/event-top-01.jpg'; ?>");
						}
					</style>
				</header>
				<section class="entry-section">
					<div class="wrapper">
						<header class="entry-header">
							<span class="category-name category-color align-center">YOGA EVENT</span>
							<h1 class="entry-title"><?php the_title(); ?></h1>
							<p class="entry-company-name"><?php echo 'dusk inc.'; ?></p>
							<p class="entry-description"><?php echo 'True Nature TOKYOは東京タワーの麓で行われる夜のパークヨガ！さらに音楽やアートを楽しみながら想いをひとつに！'; ?></p>
							<div class="social-icon">
								<ul>
									<li><a href="#" rel="nofollow" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></li>
									<li><a href="#" rel="nofollow" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" rel="nofollow" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#" rel="nofollow" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
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
										<a class="venobox" data-gall="gallery01" href="<?php echo get_template_directory_uri(); ?>/images/event/main/event-main-01.jpg">
											<img src="<?php echo get_template_directory_uri(); ?>/images/event/thumbnail/event-thumbnail-01.jpg" class="suck">
										</a>
									</li>
									<li class="gallery-li">
										<a class="venobox" data-gall="gallery01" href="<?php echo get_template_directory_uri(); ?>/images/event/main/event-main-02.jpg">
											<img src="<?php echo get_template_directory_uri(); ?>/images/event/thumbnail/event-thumbnail-02.jpg" class="suck">
										</a>
									</li>
								</ul>
							</div>
							<div class="row">
								<div class="col-pc-6 col-sp-12">
									<table class="detail-table">
										<tbody>
											<tr>
												<th>開催日程</th>
												<td>2018年2月18日（土）</td>
											</tr>
											<tr>
												<th>費用</th>
												<td>5,000円（税込）</td>
											</tr>
											<tr>
												<th>参加対象</th>
												<td>ヨガインストラクター2年以上またはRYT200講座修了</td>
											</tr>
											<tr>
												<th>持ち物</th>
												<td>ヨガマット、筆記用具</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-pc-6 col-sp-12">
									<table class="detail-table">
										<tbody>
											<tr>
												<th>イベント内容</th>
												<td>「Life in Peace」平和な生活や人生。平和だからこそヨガや音楽、アートも楽しめる。
本当に当たり前でこんなに普通な事に思えても、叶わない国や地域もあるのが現実。
DUSKは何か特別な活動でも平和を叫び訴えるイベントでもありませんが、
平和を感じ、願い、そして少し感謝するというテーマがあります。</td>
											</tr>
											<tr>
												<th>イベントタグ</th>
												<td>
													<span class="tag">ハタヨガ</span><span class="tag">アーユルヴェーダ</span><span class="tag">常温ヨガ</span><span class="tag">シヴァナンダヨガ</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<footer class="entry-footer">
							<div class="row">
								<div class="col-pc-4 col-pc-offset-4 col-sp-12">
									<a href="#" class="button button-footer">詳しい情報<small class="category-color">WEB SITE</small></a>
								</div>
							</div>
						</footer>
					</div>
				</section>
				
				<section class="entry-section">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">プログラム<span class="category-color">PROGRAM</span></h2>
						</header>
						<div class="section-content">
							<table class="table-program">
								<tbody>
									<tr>
										<th>10:00～11:00</th>
										<td>ヨガクラスヨガクラスヨガクラスヨガクラス
										ヨガクラスヨガクラスヨガクラスヨガクラス
										ヨガクラスヨガクラスヨガクラスヨガクラス</td>
									</tr>
									<tr>
										<th>12:00～13:00</th>
										<td>ヨガクラスヨガクラスヨガクラスヨガクラス</td>
									</tr>
									<tr>
										<th>13:00～14:00</th>
										<td>ヨガクラスヨガクラスヨガクラスヨガクラス
										ヨガクラスヨガクラスヨガクラスヨガクラス</td>
									</tr>
									<tr>
										<th>15:00～16:00</th>
										<td>ヨガクラスヨガクラスヨガクラスヨガクラス
										ヨガクラスヨガクラスヨガクラスヨガクラス
										ヨガクラスヨガクラスヨガクラスヨガクラス
										ヨガクラスヨガクラスヨガクラスヨガクラス</td>
									</tr>
								</tbody>
							</table>
						</div>
						<footer class="section-footer">

						</footer>
					</div>
				</section>
				
				<section class="entry-section instructor">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">関連インストラクター<span class="category-color">instructor</span></h2>
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
												<td>株式会社 DUSK dusk inc.</td>
											</tr>
											<tr>
												<th>設立</th>
												<td>2017年</td>
											</tr>
											<tr>
												<th>役員</th>
												<td>代表取締役：藤原<br>取締役：野村</td>
											</tr>
											<tr>
												<th>従業員</th>
												<td>8人</td>
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
