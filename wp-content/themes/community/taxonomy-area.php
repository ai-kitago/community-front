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
				<header class="tax-header">
					<div class="wrapper">
						<div class="row row-height mb-pc-20">
							<div class="col-pc-6 col-sp-12">
								<div class="header-box">
									<h1 class="tax-title">【<?php single_cat_title(); ?>版】&nbsp;ヨガスタジオ・教室検索</h1>
									<?php //$panelClass->getPanel(); ?>
								</div>
							</div>
							<div class="col-pc-6 col-sp-12">
								<div class="slick-tax">
									<ul>
										<?php for($i=1;$i <= 4;$i++) : ?>
										<li>
											<a href="#">
												<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" data-lazy="<?php echo get_template_directory_uri(); ?>/images/studio/top/studio-top-image-<?php echo sprintf('%02d',$i); ?>.jpg">
											</a>
										</li>
										<?php endfor; ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</header>
				<section class="front-section studio">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title">ヨガスタジオ・教室を探す<span class="category-color">STUDIO SEARCH</span></h2>
						</header>
						<div class="section-content">
							<div class="row">
								<div class="col-pc-12 col-sp-12">
									<div id="tabs" class="tabs">
										<ul class="tabs-ul">
											<li class="tabs-li"><a href="#area">エリアで検索</a></li>
											<li class="tabs-li"><a href="#line">路線・駅で検索</a></li>
										</ul>
										<div id="area" class="tab-content">
										<?php $pref_id = get_field('pref_id'); ?>
											<form action="/studio/area/kanto/tokyo/city/" method="get">
												<div class="city-box">
												<?php foreach ($dataClass->getCity($pref_id) as $key => $value) : ?>
													<div class="cntr checkbox">
														<label for="cbx-area-<?php echo $key; ?>">
															<input id="cbx-area-<?php echo $key; ?>" class="checkbox-input" type="checkbox" value="<?php echo $value[3]; ?>">
															<span class="checkbox-parts"><?php echo $value[1]; ?></span>
														</label>
													</div>
												<?php endforeach; ?>
												</div>
												<div class="row">
													<div class="col-pc-4 col-pc-offset-4 col-sp-12">
														<button class="button button-block">絞り込む</button>
													</div>
												</div>
											</form>
										</div>
										<div id="line" class="tab-content">
											<form action="/studio/area/kanto/tokyo/">
												<div class="line-box">
													<ul class="accordion line-ul">
													<?php
														foreach ($dataClass->getPrefline($pref_id) as $key => $value) :
															$prefline_id = $value[1];
															$line = $dataClass->getLine($prefline_id);
															echo '<li class="line-li">';
															echo '<h3>'.$line[1].'</h3>';
															echo '<div>';
															echo '<div class="line-content">';
															foreach($dataClass->getStation($value) as $stationKey => $stationValue) :
													?>
														<div class="cntr checkbox">
															<label for="cbx-line-<?php echo $prefline_id; ?>-<?php echo $stationValue[1]; ?>">
																<input id="cbx-line-<?php echo $prefline_id; ?>-<?php echo $stationValue[1]; ?>" class="checkbox-input" type="checkbox">
																<span class="checkbox-parts"><?php echo $stationValue[2]; ?></span>
															</label>
														</div>
													
													<?php
															endforeach;
															echo '</div>';
															echo '</div>';
															echo '</li>';
														endforeach;
													?>
													</ul>
												</div>
												<div class="row">
													<div class="col-pc-4 col-pc-offset-4 col-sp-12">
														<button class="button button-block">絞り込む</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-pc-12 col-sp-12">
									<?php $panelClass->getPanel(); ?>
								</div>
							</div>
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
