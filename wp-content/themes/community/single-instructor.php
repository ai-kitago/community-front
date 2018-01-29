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
			<article id="post-<?php the_ID(); ?>" <?php post_class('instructor'); ?>>
				<header class="single-header">
					<div class="wrapper">
						
					</div>
				</header>
				<section class="entry-section">
					<div class="wrapper">
						<header class="entry-header">
							<div class="instructor-table">
								<div class="instructor-cell single-avatar">
									<img src="<?php echo get_template_directory_uri().'/images/instructor/single/instructor-avatar-image-01.jpg'; ?>" class="suck">
								</div>
								<div class="instructor-cell">
									<span class="category-name category-color">INSTRUCTOR</span>
									<h1 class="entry-title">西浦 莉紗</h1>
									<p class="entry-subname">Risa Nishiura</p>
									<div class="social-icon">
										<ul>
											<li><a href="#" rel="nofollow" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											<li><a href="#" rel="nofollow" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" rel="nofollow" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" rel="nofollow" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</header>
					</div>
				</section>
				<section class="entry-section">
					<div class="wrapper">
						<div class="entry-content">
							<div class="row">
								<div class="col-pc-6 col-sp-12">
									<p class="entry-profile">はじめまして！ヨガインストラクターの西浦です。

現在、スポーツクラブメガロスの９店舗にてYOGAのレッスンを担当しています。

個人では、８０歳以上を対象としたシニアヨガ、ハタヨガ、パワーヨガ、
またＫＩＤＳを対象をしたＨＩＰＨＯＰレッスン、
高齢者・主婦・若い方など誰でも出来るヨガとＨＩＰＨＯＰをＭＩＸさせたレッスンなどをしたり
ダイエットセミナーや運動セミナーの体作りアシスタントや、オーガニック飲食店とのコラボ企画のヨガ講師、ヨガチャリティーイベントを開催したりと様々な事をしています。

出張ヨガやパーソナルヨガもしているので興味があるが一歩踏み出せない。。　
という方、是非ご連絡ください☆

ヨガインストラクター養成コースも実施予定です！

幸せサイクルを生み出し、ストレスフリーな社会を作るため、
今日も沢山の人にヨガを届けに行きます♪</p>
								</div>
								<div class="col-pc-6 col-sp-12">
									<div class="slick-profile">
										<ul>
											<li>
												<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" data-lazy="<?php echo get_template_directory_uri().'/images/instructor/single/instructor-profile-image-01.jpg'; ?>" class="suck">
											</li>
											<li>
												<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" data-lazy="<?php echo get_template_directory_uri().'/images/instructor/single/instructor-profile-image-01.jpg'; ?>" class="suck">
											</li>
										</ul>
									</div>
									<div class="row">
										<div class="col-pc-12">
											<h3 class="content-title">活動エリア</h3>
											<div class="area-tag">
												<a href="#" class="tag">東京都</a>
												<a href="#" class="tag">神奈川県</a>
												<a href="#" class="tag">埼玉県</a>
											</div>
											<h3 class="content-title">指導スタイル</h3>
											<div class="stayle-tag">
												<a href="#" class="tag">アクロヨガ</a>
												<a href="#" class="tag">アイアンガーヨガ</a>
												<a href="#" class="tag">ハタヨガ</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="entry-section studio">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">インタビュー<span class="category-color">INTERVIEW</span></h2>
						</header>
						<section>
							<dl class="interview-dl">
								<dt>ヨガを始めたきっかけは？</dt>
								<dd>ダンスの専門学校に行き、卒業後ダンサーとして活動し始めた時期にヨガに出会い、
その日から私に必要なのはダンスではなくてヨガだ！！！
と思い、はじめました。

ヨガの事を知れば知るほど好きになり
今はヨガのインストラクターが私の天職だと思っています。</dd>
								<dt>ヨガを始めて何が変わりましたか？</dt>
								<dd>完璧が全てではなく、出来なくても良いと思えるようになりました。</dd>
								<dt>あなたにとってヨガとは？</dt>
								<dd>ＬＩＦＥ　ＳＴＹＬＥ☆</dd>
								<dt>日々のレッスンで心がけていることは？</dt>
								<dd>気持ちを込めて、その時間をそのメンバーで過ごせることを大切にしたいと思っています。</dd>
								<dt>これからヨガを始める方へ一言。</dt>
								<dd>完成ポーズをとるのが目的ではないので、
まずは、出来る！出来ない！へのこだわりをなくてしみましょう。

そのままの自分を感じてみるのです♪</dd>
							</dl>
						</section>
					</div>
				</section>
				<section class="entry-section license">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">指導資格<span class="category-color">LICENSE</span></h2>
						</header>
						<section class="license-list">
							<div class="row">
								<?php include(get_template_directory().'/template-parts/content-license-block.php'); ?>
							</div>
						</section>
					</div>
				</section>
				<section class="entry-section studio">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">所属スタジオ<span class="category-color">STUDIO</span></h2>
						</header>
						<section>
							<div class="row row-height mb-pc-30">
							<?php
								$max = 3;
								$i = 0;
								$blockClass = 'col-pc-4';
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
				<section class="entry-section event">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">参加イベント<span class="category-color">event</span></h2>
						</header>
						<section>
							<div class="row row-height mb-pc-30">
							<?php
								$max = 3;
								$i = 0;
								$blockClass = 'col-pc-4';
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
			</article>
		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php include(get_template_directory().'/template-parts/content-add.php'); ?>

<?php
//get_sidebar();
get_footer();
