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
			
			<article id="post-<?php the_ID(); ?>" <?php post_class('studio'); ?>>
				<header class="page-header"></header>
				<form action="/studio/list/" method="get">
				<?php
					$panelClass->getSearch('city','sort');
				?>
				</form>
				<section class="front-section studio">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title"><span class="city"><?php single_term_title(); ?></span>ヨガスタジオ・教室を探す<span class="category-color">STUDIO SEARCH</span></h2>
						</header>
						<div class="section-content">
							<div class="acc">
								<button class="acc-toggle">絞り込み</button>
								<div class="acc-content" style="display: none;">
									<form>
										<div class="refine-checkbox">
											<label class="panel-label">スタイル</label>
											<div class="cntr checkbox">
											    <label for="cbx-style-01">
												    <input id="cbx-style-01" class="checkbox-input" type="checkbox" value="style-01">
													<span class="checkbox-parts">ホットヨガ</span>
												</label>
											</div>
											<div class="cntr checkbox">
											    <label for="cbx-style-02">
												    <input id="cbx-style-02" class="checkbox-input" type="checkbox" value="style-02">
													<span class="checkbox-parts">アシュタンガヨガ</span>
												</label>
											</div>
											<div class="cntr checkbox">
											    <label for="cbx-style-03">
												    <input id="cbx-style-03" class="checkbox-input" type="checkbox" value="style-03">
													<span class="checkbox-parts">ハタヨガ</span>
												</label>
											</div>
											<div class="cntr checkbox">
											    <label for="cbx-style-04">
												    <input id="cbx-style-04" class="checkbox-input" type="checkbox" value="style-04">
													<span class="checkbox-parts">シヴァナンダヨガ</span>
												</label>
											</div>
											<div class="cntr checkbox">
											    <label for="cbx-style-05">
												    <input id="cbx-style-05" class="checkbox-input" type="checkbox" value="style-05">
													<span class="checkbox-parts">パワーヨガ</span>
												</label>
											</div>
											<div class="cntr checkbox">
											    <label for="cbx-style-06">
												    <input id="cbx-style-06" class="checkbox-input" type="checkbox" value="style-06">
													<span class="checkbox-parts">ヨギックアーツ</span>
												</label>
											</div>
											<div class="cntr checkbox">
											    <label for="cbx-style-07">
												    <input id="cbx-style-07" class="checkbox-input" type="checkbox" value="style-07">
													<span class="checkbox-parts">イシュタヨガ</span>
												</label>
											</div>

											<label class="panel-label">条件検索</label>
											<div class="cntr checkbox">
											    <label for="cbx-option-01">
												    <input id="cbx-option-01" class="checkbox-input" type="checkbox" value="option-01">
													<span class="checkbox-parts">ホットヨガ</span>
												</label>
											</div>
											<div class="cntr checkbox">
											    <label for="cbx-option-02">
												    <input id="cbx-option-02" class="checkbox-input" type="checkbox" value="option-02">
													<span class="checkbox-parts">岩盤ヨガ</span>
												</label>
											</div>
											<div class="cntr checkbox">
											    <label for="cbx-option-03">
												    <input id="cbx-option-03" class="checkbox-input" type="checkbox" value="option-03">
													<span class="checkbox-parts">常温ヨガ</span>
												</label>
											</div>
											<div class="cntr checkbox">
											    <label for="cbx-option-04">
												    <input id="cbx-option-04" class="checkbox-input" type="checkbox" value="option-04">
													<span class="checkbox-parts">女性限定</span>
												</label>
											</div>
											
											<div>
												<div class="col-pc-2 col-pc-offset-5 col-sp-12">
													<input type="submit" class="button button-block" value="絞り込み">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="row">
							<?php
								$max = 4;
								$i = 0;
								$plan = "paid";
								$blockClass = 'col-pc-12 col-sp-12';
								foreach ($dataClass->getData() as $key => $value) :
									if($value['post_type'] == 'studio' && $i < $max) :
										include(get_template_directory().'/template-parts/content-list.php');
										$i++;
									endif;
								endforeach;
								$max = 4;
								$i = 0;
								$plan = "free";
								//$blockClass = 'col-pc-3';
								foreach ($dataClass->getData() as $key => $value) :
									if($value['post_type'] == 'studio' && $i < $max) :
										include(get_template_directory().'/template-parts/content-list.php');
										$i++;
									endif;
								endforeach;
								$max = 2;
								$i = 0;
								$plan = "free";
								//$blockClass = 'col-pc-3';
								foreach ($dataClass->getData() as $key => $value) :
									if($value['post_type'] == 'studio' && $i < $max) :
										include(get_template_directory().'/template-parts/content-list.php');
										$i++;
									endif;
								endforeach;
							?>
							</div>
							<?php include(get_template_directory().'/inc/include-pagination.php'); ?>
						</div>
					</div>
				</section>
				<section class="front-section">
					<div class="wrapper">
						<h3 class="latest-title"><span>LATEST ENTRIES</span></h3>
						<div class="row row-height mb-pc-30">
						<?php
							$max = 4;
							$i = 0;
							$blockClass = 'col-pc-3 col-sp-12';
							foreach ($dataClass->getData() as $key => $value) :
								if($value['post_type'] == 'studio' && $i < $max) :
									include(get_template_directory().'/template-parts/content-block.php');
									$i++;
								endif;
							endforeach;
							$max = 4;
							$i = 0;
							//$blockClass = 'col-pc-3';
							foreach ($dataClass->getData() as $key => $value) :
								if($value['post_type'] == 'studio' && $i < $max) :
									include(get_template_directory().'/template-parts/content-block.php');
									$i++;
								endif;
							endforeach;
						?>
						</div>
						<footer class="section-footer">
							<div class="row">
								<div class="col-pc-4 col-pc-offset-4 col-sp-12">
									<a href="<?php echo get_permalink( get_page_by_path('studio')->ID ); ?>" class="button button-footer">新着ヨガスタジオ<small class="category-color">LATEST ENTRIES</small></a>
								</div>
							</div>
						</footer>
					</div>
				</section>
			</article>
			
			<?php
			/*
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			*/
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
