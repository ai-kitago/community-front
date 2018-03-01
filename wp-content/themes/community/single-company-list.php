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
			
			<article id="post-<?php the_ID(); ?>" <?php post_class('company'); ?>>
				<header class="page-header"></header>
				<form action="/company/list/" method="get">
				<?php
					$panelClass->getSearch('city','sort');
				?>
				</form>
				<section class="front-section company">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title"><?php the_title(); ?><span class="category-color">COMPANY SEARCH</span></h2>
						</header>
						<div class="section-content">
							<div class="row">
							<?php
								$max = 6;
								$i = 0;
								$plan = "paid";
								$blockClass = 'col-pc-4 col-sp-12';
								foreach ($dataClass->getData() as $key => $value) :
									if($value['post_type'] == 'company' && $i < $max) :
										include(get_template_directory().'/template-parts/content-company-block.php');
										$i++;
									endif;
								endforeach;
								$max = 6;
								$i = 0;
								$plan = "paid";
								//$blockClass = 'col-pc-3';
								foreach ($dataClass->getData() as $key => $value) :
									if($value['post_type'] == 'company' && $i < $max) :
										include(get_template_directory().'/template-parts/content-company-block.php');
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
						<h3 class="latest-title"><span>PICK UP ENTRIES</span></h3>
						<div class="row row-height mb-pc-30">
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
						<footer class="section-footer">
							<div class="row">
								<div class="col-pc-4 col-pc-offset-4 col-sp-12">
									<a href="<?php echo get_permalink( get_page_by_path('company/list/')->ID ); ?>" class="button button-footer">ピックアップ企業<small class="category-color">PICK UP</small></a>
								</div>
							</div>
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
