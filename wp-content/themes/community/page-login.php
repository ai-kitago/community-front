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

			<article id="post-<?php the_ID(); ?>" <?php post_class('instructor'); ?>>
				<header class="page-header">
					<form action="https://community-admin-yogageneration.c9users.io/" method="post">
						<div class="login-box">
							<div class="row row-height">
								<div class="col-pc-12">
									<div class="form-login">
										<div class="row">
											<div class="col-pc-12 mb-pc-10">
												<label>メールアドレス</label>
												<input type="text" class="input-field">
											</div>
											<div class="col-pc-12 mb-pc-10">
												<label>パスワード</label>
												<input type="password" class="input-field">
											</div>
											<div class="col-pc-12 mb-pc-10">
												<div class="cntr checkbox">
												    <label for="cbx-login">
													    <input id="cbx-login" class="checkbox-input" type="checkbox" value="login">
														<span class="checkbox-parts">ログイン状態を保持する</span>
													</label>
												</div>
											</div>
											<div class="col-pc-6 col-pc-offset-3 mb-pc-10">
												<input class="button button-block" type="submit" value="ログイン">
											</div>
											<div class="col-pc-12 mb-pc-10">
												<a href="<?php echo get_permalink( get_page_by_path('forget')->ID ); ?>" class="lost">※パスワードを忘れた方はこちら</a>
											</div>
										</div>
										<div class="row">
											<div class="ln_solid"></div>
											<div class="col-pc-12">
												<label>ソーシャルログイン</label>
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
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</header>
			</article>
			
		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php include(get_template_directory().'/template-parts/content-add.php'); ?>

<?php
//get_sidebar();
get_footer();
