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
							<h1 class="section-title">パスワード忘れ<span class="category-color">PASSWORD FORGET</span></h1>
						</header>
						<div id="private" class="tab-content forget-box">
							<form action="./register/" method="post">
								<div class="form-forget">
									<div class="row">
										<div class="col-pc-12 col-sp-12 mb-pc-30">
											<label>メールアドレス</label>
											<input type="text" class="input-field">
										</div>
										<div class="col-pc-6 col-pc-offset-3 col-sp-12">
											<input class="button button-block" type="submit" value="送信">
										</div>
									</div>
								</div>
							</form>
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
