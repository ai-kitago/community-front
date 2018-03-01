<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package community
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<header class="front-header">
				<div class="wrapper">
					<div class="front-top">
						<div class="front-box">
							<h1 class="front-title">あなたのヨガに出会える<br>新しいスタイルを探す</h1>
							<p class="front-description">スタジオ・イベント・求人検索サイト</p>
							<a href="#" class="button button-transparent">登録してはじめる</a>
						</div>
					</div>
				</div>
			</header>
			<style>
				.front-header {
					background-image: url("<?php header_image(); ?>");
				}
			</style>
			<section class="front-section studio">
				<div class="wrapper">
					<header class="section-header">
						<h2 class="section-title">ヨガスタジオ・教室を探す<span class="category-color">STUDIO SEARCH</span></h2>
					</header>
					<div class="section-content">
						<div class="row">
							<div class="col-pc-6 col-sp-12">
								<h3 class="latest-title"><span>LATEST ENTRIES</span></h3>
								<div class="row row-height">
								<?php
									$max = 4;
									$i = 0;
									$blockClass = 'col-pc-6 col-sp-12';
									foreach ($dataClass->getData() as $key => $value) :
										if($value['post_type'] == 'studio' && $i < $max) :
											include(get_template_directory().'/template-parts/content-block.php');
											$i++;
										endif;
									endforeach;
								?>
								</div>
							</div>
							<div class="col-pc-6 col-sp-12">
								<?php $mapClass->getMap(); ?>
							</div>
						</div>
					</div>
					<footer class="section-footer">
						<div class="row">
							<div class="col-pc-4 col-pc-offset-4 col-sp-12">
								<a href="<?php echo get_permalink( get_page_by_path('studio')->ID ); ?>" class="button button-footer">ヨガスタジオを探す<small class="category-color">ALL STUDIO</small></a>
							</div>
						</div>
					</footer>
				</div>
			</section>

			<section class="front-section event">
				<div class="wrapper">
					<header class="section-header">
						<h2 class="section-title">イベントを探す<span class="category-color">EVENT SEARCH</span></h2>
					</header>
					<div class="section-content">
						<h3 class="latest-title"><span>LATEST ENTRIES</span></h3>
						<div class="row row-height">
						<?php
							$max = 4;
							$i = 0;
							$blockClass = 'col-pc-3 col-sp-12';
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
						<div class="row">
							<div class="col-pc-4 col-pc-offset-4 col-sp-12">
								<a href="<?php echo get_permalink( get_page_by_path('event')->ID ); ?>" class="button button-footer">イベントを探す<small class="category-color">ALL EVENT</small></a>
							</div>
						</div>
					</footer>
				</div>
			</section>

			<section class="front-section instructor">
				<div class="wrapper">
					<header class="section-header">
						<h2 class="section-title">インストラクターを探す<span class="category-color">INSTRUCTOR SEARCH</span></h2>
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
					<footer class="section-footer">
						<div class="row">
							<div class="col-pc-4 col-pc-offset-4 col-sp-12">
								<a href="<?php echo get_permalink( get_page_by_path('instructor')->ID ); ?>" class="button button-footer">インストラクターを探す<small class="category-color">ALL INSTRUCTOR</small></a>
							</div>
						</div>
					</footer>
				</div>
			</section>
			
			<section class="front-section shop">
				<div class="wrapper">
					<header class="section-header">
						<h2 class="section-title">ショップを探す<span class="category-color">SHOP SEARCH</span></h2>
					</header>
					<div class="section-content">
						<h3 class="latest-title"><span>LATEST ENTRIES</span></h3>
						<div class="row row-height">
						<?php
							$max = 4;
							$i = 0;
							$blockClass = 'col-pc-3 col-sp-12';
							foreach ($dataClass->getData() as $key => $value) :
								if($value['post_type'] == 'shop' && $i < $max) :
									include(get_template_directory().'/template-parts/content-block.php');
									$i++;
								endif;
							endforeach;
						?>
						</div>
					</div>
					<footer class="section-footer">
						<div class="row">
							<div class="col-pc-4 col-pc-offset-4 col-sp-12">
								<a href="<?php echo get_permalink( get_page_by_path('shop')->ID ); ?>" class="button button-footer">ショップを探す<small class="category-color">ALL EVENT</small></a>
							</div>
						</div>
					</footer>
				</div>
			</section>

			<section class="front-section job">
				<div class="wrapper">
					<header class="section-header">
						<h2 class="section-title">仕事を探す<span class="category-color">JOB SEARCH</span></h2>
					</header>
					<div class="section-content">
						<h3 class="latest-title"><span>LATEST ENTRIES</span></h3>
						<div class="row row-height">
						<?php
							$max = 4;
							$i = 0;
							$blockClass = 'col-pc-3 col-sp-12';
							foreach ($dataClass->getData() as $key => $value) :
								if($value['post_type'] == 'job' && $i < $max) :
									include(get_template_directory().'/template-parts/content-block.php');
									$i++;
								endif;
							endforeach;
						?>
						</div>
					</div>
					<footer class="section-footer">
						<div class="row">
							<div class="col-pc-4 col-pc-offset-4 col-sp-12">
								<a href="<?php echo get_permalink( get_page_by_path('job')->ID ); ?>" class="button button-footer">仕事を探す<small class="category-color">ALL JOB</small></a>
							</div>
						</div>
					</footer>
				</div>
			</section>

			<section class="front-section company">
				<div class="wrapper">
					<header class="section-header">
						<h2 class="section-title">企業から探す<span class="category-color">COMPANY SEARCH</span></h2>
					</header>
					<div class="section-content">
						<div class="row">
						<?php
							$max = 6;
							$i = 0;
							$blockClass = 'col-pc-2 col-sp-4';
							foreach ($dataClass->getData() as $key => $value) :
								if($value['post_type'] == 'company' && $i < $max) :
									include(get_template_directory().'/template-parts/content-logo-block.php');
									$i++;
								endif;
							endforeach;
						?>
						</div>
					</div>
					<footer class="section-footer">
						<div class="row">
							<div class="col-pc-4 col-pc-offset-4 col-sp-12">
								<a href="<?php echo get_permalink( get_page_by_path('company')->ID ); ?>" class="button button-footer">企業から探す<small class="category-color">ALL COMPANY</small></a>
							</div>
						</div>
					</footer>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php include(get_template_directory().'/template-parts/content-add.php'); ?>

<?php
//get_sidebar();
get_footer();
