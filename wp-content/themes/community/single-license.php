<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package community
 */
//$post = $dataClass->getData(get_the_ID());
$term = get_the_terms( get_the_ID(), 'tax_type' );
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article id="post-<?php the_ID(); ?>">
				<header class="single-header">
					<div class="wrapper">
						
					</div>
				</header>
				<section class="entry-section license">
					<div class="wrapper">
						<header class="entry-header">
							<span class="category-name category-color align-center">LICENSE</span>
							<h1 class="entry-title"><?php the_title(); ?><span class="entry-teacher">&nbsp;中島 正明</span></h1>
							<p class="entry-company-name"><?php echo $term[0]->name; ?></p>
							<p class="entry-description">ヨガジェネレーションの一流講師陣から学ぶ、充実のプログラム、RYT200ヨガ指導者養成講座</p>
						</header>
					</div>
				</section>

				<section class="entry-section instructor">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">インストラクター<span class="category-color">instructor</span></h2>
						</header>
						<div class="section-content">
							<h4 class="license-date"><span>2017年9月</span></h4>
							<div class="row row-height slick-instructor">
							<?php
								$max = 8;
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
							<h4 class=""><span>2017年4月</span></h4>
							<div class="row row-height slick-instructor">
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
							<h4 class=""><span>2016年10月</span></h4>
							<div class="row row-height slick-instructor">
							<?php
								$max = 10;
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
							<h4 class=""><span>2016年4月</span></h4>
							<div class="row row-height slick-instructor">
							<?php
								$max = 7;
								$i = 0;
								$blockClass = 'col-pc-2 col-sp-6';
								//$array = asort($dataClass->getData());
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
							<h2 class="section-title">認定スタジオ<span class="category-color">studio</span></h2>
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
