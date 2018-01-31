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
				<header class="page-header">
					<div class="slick-header">
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
				</header>
				<section class="front-section studio">
					<form action="/studio/list/" method="get">
					<div class="wrapper">
						<header class="section-header">
							<h1 class="section-title">ヨガスタジオ・教室を探す<span class="category-color">STUDIO SEARCH</span></h1>
						</header>
						<div class="section-content">
							<div class="row">
								<div class="col-pc-6 col-sp-12">
									<?php $mapClass->getMap(); ?>
								</div>
								<div class="col-pc-6 col-sp-12">
									<?php $panelClass->getPanel(); ?>
								</div>
								<div class="col-pc-4 col-pc-offset-4 col-sp-12">
									<button class="button button-block button-panel">検索する<small class="category-color">SEARCH</small></button>
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
							$blockClass = 'col-pc-3';
							foreach ($dataClass->getData() as $key => $value) :
								if($value['post_type'] == 'studio' && $i < $max) :
									include(get_template_directory().'/template-parts/content-block.php');
									$i++;
								endif;
							endforeach;
							$max = 4;
							$i = 0;
							$blockClass = 'col-pc-3';
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
	
	<?php include(get_template_directory().'/template-parts/content-add.php'); ?>

<?php
//get_sidebar();
get_footer();
