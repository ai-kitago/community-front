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
			<article id="post-<?php the_ID(); ?>" <?php post_class('company'); ?>>
				<header class="single-header">
					<div class="wrapper">
						<div class="single-logo">
							<a href="#"><img src="<?php echo get_template_directory_uri().'/images/company/logo-company-image-01.jpg'; ?>" class="suck"></a>
						</div>
					</div>
					<style>
						.single-header {
							background-image: url("<?php echo get_template_directory_uri().'/images/company/top-company-image-01.jpg'; ?>");
						}
					</style>
				</header>
				<section class="entry-section">
					<div class="wrapper">
						<header class="entry-header">
							<span class="category-name category-color align-center">COMPANY</span>
							<h1 class="entry-title"><?php the_title(); ?></h1>
							<p class="entry-company-name"><?php echo 'OHANAsmile Inc.'; ?></p>
							<p class="entry-description"><?php echo '株式会社オハナスマイルは東京都目黒区祐天寺にあるWebメディア事業を中心にショッピングサイト運営管理事業、企画・コンサルティング事業をおこなう会社です。ヨガジェネレーション、東京ヨガウェア2.0、オハナスマイルヨガスタジオ、ヨガアカデミー大阪を運営しています。'; ?></p>
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
				
				<section class="entry-section company">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">企業情報<span class="category-color">company</span></h2>
						</header>
						<div class="section-content">
							<div class="row">
								<div class="col-pc-8 col-pc-offset-2 col-sp-12">
									<table class="company-table" style="margin:auto;">
										<tbody>
											<tr>
												<th>企業名</th>
												<td>株式会社オハナスマイル</td>
											</tr>
											<tr>
												<th></th>
												<td>OHANAsmile Inc.</td>
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
							<div class="row">

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
				
				<section class="entry-section studio">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">関連スタジオ<span class="category-color">STUDIO</span></h2>
						</header>
						<section>
							<div class="row row-height mb-pc-30">
							<?php
								$max = 4;
								$i = 0;
								$blockClass = 'col-pc-3';
								foreach ($dataClass->getData() as $key => $value) :
									if($value['post_type'] == 'studio' && $i < $max) :
										include(get_template_directory().'/template-parts/content-block.php');
										$i++;
									endif;
								endforeach;
							?>
							</div>
							
						</section>
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
				
				<section class="entry-section studio">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">関連イベント<span class="category-color">EVENT</span></h2>
						</header>
						<section>
							<div class="row row-height mb-pc-30">
							<?php
								$max = 4;
								$i = 0;
								$blockClass = 'col-pc-3';
								foreach ($dataClass->getData() as $key => $value) :
									if($value['post_type'] == 'event' && $i < $max) :
										include(get_template_directory().'/template-parts/content-block.php');
										$i++;
									endif;
								endforeach;
							?>
							</div>
							
						</section>
					</div>
				</section>
				
				<section class="entry-section shop">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">関連ショップ<span class="category-color">SHOP</span></h2>
						</header>
						<section>
							<div class="row row-height mb-pc-30">
							<?php
								$max = 1;
								$i = 0;
								$blockClass = 'col-pc-4';
								foreach ($dataClass->getData() as $key => $value) :
									if($value['post_type'] == 'shop' && $i < $max) :
										include(get_template_directory().'/template-parts/content-block.php');
										$i++;
									endif;
								endforeach;
							?>
							</div>
							
						</section>
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
