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
			<article id="post-<?php the_ID(); ?>" <?php post_class('job'); ?>>
				<header class="single-header">
					<div class="wrapper">
						<div class="single-logo">
							<a href="#"><img src="<?php echo get_template_directory_uri().'/images/job/logo-job-image-01.jpg'; ?>" class="suck"></a>
						</div>
					</div>
					<style>
						.single-header {
							background-image: url("<?php echo get_template_directory_uri().'/images/job/top-job-image-01.jpg'; ?>");
						}
					</style>
				</header>

				<section class="entry-section">
					<div class="wrapper">
						<header class="entry-header">
							<span class="category-name category-color align-center">JOB</span>
							<h1 class="entry-title"><?php the_title(); ?></h1>
							<p class="entry-company-name"><?php echo 'LOHAS International, Inc.'; ?></p>
							<p class="entry-description"><?php echo 'ホットヨガスタジオLAVAが手掛けるヨガインストラクター大募集!'; ?></p>
							<div class="entry-tel"><a href="tel:03-6825-6007">03-6825-6007</a></div>
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
							<h2 class="section-title">応募要項<span class="category-color">ABOUT</span></h2>
						</header>
						<div class="entry-content">
							<div class="row">
								<div class="col-pc-8 col-pc-offset-2 col-sp-12">
									<p>『ホットヨガスタジオLAVA』は、全国270店舗以上を展開している世界トップクラスのホットヨガスタジオです。 

私たちのテーマは『好きを仕事に』! 

*充実の研修からスタート* 
自社でヨガスクールを経営する高いノウハウで実践的にヨガを体得。 
経験がなくても自信を持ってお客様の前に立てる迄に成長できます! 

着実に成長を遂げているLAVAでは、一緒に成長できるヨガインストラクターを募集中。 

「ホットヨガを通して一人でも多くのお客様を幸せにすること」 
これがLAVAの信念です 

私たちと一緒に新たな一歩を踏み出しませんか? </p>
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
							<h2 class="section-title">仕事内容<span class="category-color">DESCRIPTION</span></h2>
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
								<div class="col-pc-8 col-pc-offset-2 col-sp-12">
									<table class="table-job">
										<tbody>
											<tr>
												<th>勤務地</th>
												<td>オハナスマイルヨガスタジオ 祐天寺店</td>
											</tr>
											<tr>
												<th>募集職種</th>
												<td>インストラクター</td>
											</tr>
											<tr>
												<th>雇用形態</th>
												<td>業務委託</td>
											</tr>
											<tr>
												<th>給与</th>
												<td>月給30万～</td>
											</tr>
											<tr>
												<th>仕事内容</th>
												<td>ヨガスタジオの受付</td>
											</tr>
											<tr>
												<th>必須スキル</th>
												<td>全米ヨガアライアンス RYT200講座修了
												生徒さんとのコミュニケーション
												Microsoft Excel
												Microsoft Word</td>
											</tr>
											<tr>
												<th>歓迎スキル</th>
												<td>英語でメールのやりとりができる方
												ライティング経験のある方
												企画し生み出しプロデュースの経験がある方
												Office、WordPress、Photoshop、IllustratorなどのPCスキルをお持ちの方
												几帳面で、整理整頓、スケジュール管理が好きな方</td>
											</tr>
											<tr>
												<th>休日／休暇</th>
												<td>週休2日制
												週5日出勤（土日勤務、シフト制）</td>
											</tr>
											<tr>
												<th>勤務時間</th>
												<td>1日8時間程度</td>
											</tr>
											<tr>
												<th>待遇</th>
												<td>各種社会保険完備、交通費支給、社販割引、ヨガ無料受講制度度</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<footer class="entry-footer">
							<div class="row">
								
							</div>
						</footer>
					</div>
				</section>
				
				<section class="entry-section">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">選考プロセス<span class="category-color">PROCESS</span></h2>
						</header>
						<div class="entry-content">
							<div class="entry-process">
								<ul>
									<li>
										<span class="process-title">エントリー</span>
										<p class="process-content">WEBエントリーを受け付けております。<br><a href="#" target="_blank">エントリーフォーム</a>よりエントリーしてください。</p>
									</li>
									<li>
										<span class="process-title">書類選考</span>
										<p class="process-content">エントリー内容から人事担当が選考します。</p>
									</li>
									<li>
										<span class="process-title">一次面接</span>
										<p class="process-content">日程を調整し、弊社で担当マネージャーとの面接を行っていただきます。</p>
									</li>
									<li>
										<span class="process-title">二次面接</span>
										<p class="process-content">上層部との面接を行っていただきます。</p>
									</li>
									<li>
										<span class="process-title">内定</span>
										<p class="process-content">メールまたはお電話にて結果を報告させていただきます。</p>
									</li>
								</ul>
							</div>
						</div>
						<footer class="entry-footer">
							<div class="row">
								
							</div>
						</footer>
					</div>
				</section>
				
				<section class="entry-section">
					<div class="wrapper">
						<form>
							<header class="section-header">
								<h2 class="section-title">応募フォーム<span class="category-color">ENTRY</span></h2>
							</header>
							<div class="section-content">
							
								<table class="table-entry">
									<tbody>
										<tr>
											<th>氏名</th>
											<td><input type="text" class="input-field last-name" placeholder="姓"><input type="text" class="input-field first-name" placeholder="名"></td>
										</tr>
										<tr>
											<th>メールアドレス</th>
											<td><input type="email" class="input-field"></td>
										</tr>
										<tr>
											<th>生年月日</th>
											<td><input type="text" class="input-field entry-year">年<input type="text" class="input-field entry-month">月<input type="text" class="input-field entry-day">日</td>
										</tr>
										<tr>
											<th>性別<span class=""></span></th>
											<td>
												<input type="checkbox" id="female" class="sexGroup" name="sex">
												<label class="checkbox-field" for="female">女性</label>
												<input type="checkbox" id="male" class="sexGroup" name="sex">
												<label class="checkbox-field" for="male">男性</label>
											</td>
										</tr>
										<tr>
											<th>電話番号</th>
											<td><input type="tel" class="input-field"></td>
										</tr>
										<tr>
											<th>質問・要望</th>
											<td><textarea class="input-field resize-vertical"></textarea></td>
										</tr>
										<tr>
											<th>履歴書</th>
											<td><input type="file"></td>
										</tr>
										<tr>
											<th>職務経歴書</th>
											<td><input type="file"></td>
										</tr>
									</tbody>
								</table>
							</div>
							<footer class="section-footer">
								<div class="row">
									<div class="col-pc-4 col-pc-offset-4 col-sp-12">
										<button class="button button-footer button-block">応募する<small class="category-color">ENTRY</small></button>
									</div>
								</div>
							</footer>
						</form>
					</div>
				</section>
				
				<section class="entry-section company">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">企業情報<span class="category-color">COMPANY</span></h2>
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
							<div class="row">
								<div class="col-pc-4 col-pc-offset-4 col-sp-12">
									<a href="#" class="button button-footer">詳しい情報<small class="category-color">WEB SITE</small></a>
								</div>
							</div>
						</footer>
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
				
				
			</article>
		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php include(get_template_directory().'/template-parts/content-add.php'); ?>

<?php
//get_sidebar();
get_footer();
