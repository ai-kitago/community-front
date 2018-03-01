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

			<article id="post-<?php the_ID(); ?>">
				<header class="page-header"></header>
				<section class="front-section">
					<div class="wrapper">
						<header class="section-header">
							<h1 class="section-title">新規登録<span class="category-color">SIGN UP</span></h1>
						</header>
						<div id="tabs" class="tabs">
							<ul class="tabs-ul ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header" role="tablist">
								<li class="tabs-li"><a href="#private">プライベート登録</a></li>
								<li class="tabs-li"><a href="#company">ビジネス登録</a></li>
							</ul>
							<div id="private" class="tab-content signup-box">
								<form action="./register/" method="post">
								<div class="row row-height">
									<div class="col-pc-12">
										<div class="form-signup">
											<div class="row">
												<div class="col-pc-12">
													<label>ソーシャルで登録</label>
												</div>
												<div class="col-pc-4 mb-pc-10">
													<button class="button button-facebook button-block"><i class="fa fa-facebook"></i>Facebook</button>
												</div>
												<div class="col-pc-4 mb-pc-10">
													<button class="button button-google button-block"><i class="fa fa-google"></i>Google</button>
												</div>
												<div class="col-pc-4 mb-pc-10">
													<button class="button button-twitter button-block"><i class="fa fa-twitter"></i>Twitter</button>
												</div>
												<div class="ln_solid"><span>または</span></div>
											</div>
											<div class="row">
												<div class="col-pc-12 col-sp-12 mb-pc-30">
													<label>メールアドレス</label>
													<input type="text" class="input-field">
												</div>
												
												<div class="col-pc-6 col-pc-offset-3 col-sp-12 mb-pc-20">
													<input class="button button-block" type="submit" value="次へ">
												</div>
												<div class="col-pc-6 col-pc-offset-3 col-sp-12">
													<a href="<?php echo get_permalink( get_page_by_path('login')->ID ); ?>" class="button button-border button-block">ログイン</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								</form>
							</div>
							<div id="company" class="tab-content signup-box">
								<form action="./business/" method="post">
								<div class="row row-height">
									<div class="col-pc-12">
										<div class="form-signup">
											<div class="row">
												<div class="col-pc-12 col-sp-12 mb-pc-10">
													<label>メールアドレス</label>
													<input type="text" class="input-field">
												</div>
												<div class="col-pc-6 col-pc-offset-3 col-sp-12 mb-pc-20">
													<input class="button button-block" type="submit" value="次へ">
												</div>
												<div class="col-pc-6 col-pc-offset-3 col-sp-12">
													<a href="<?php echo get_permalink( get_page_by_path('login')->ID ); ?>" class="button button-border button-block">ログイン</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								</form>
							</div>
						</div>
					</div>
				</section>
			</article>
			
		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php include(get_template_directory().'/template-parts/content-add.php'); ?>

<?php
//get_sidebar();
get_footer();
