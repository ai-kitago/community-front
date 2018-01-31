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
					
				</header>
				<form action="list/" method="get">
				<?php $panelClass->getSearch('city','sort'); ?>
				</form>
				<section class="front-section studio">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title"><span class="city"><?php single_term_title(); ?></span>ヨガスタジオ・教室を探す<span class="category-color">STUDIO SEARCH</span></h2>
						</header>
						<div class="section-content">
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
								//$blockClass = 'col-pc-3';
								foreach ($dataClass->getData() as $key => $value) :
									if($value['post_type'] == 'studio' && $i < $max) :
										include(get_template_directory().'/template-parts/content-list.php');
										$i++;
									endif;
								endforeach;
								$max = 2;
								$i = 0;
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
