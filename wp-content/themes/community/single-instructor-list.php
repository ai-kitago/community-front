<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package community
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article <?php post_class('instructor'); ?>>
		<?php
		if ( have_posts() ) : ?>

				<header class="page-header">
	
				</header><!-- .page-header -->
				<form action="list/" method="get">
				<?php
					$panelClass->getSearch('sort','style');
				?>
				</form>
				<section class="front-section instructor">
					<div class="wrapper">
						<header class="section-header">
							<h1 class="section-title">インストラクター一覧<span class="category-color">instructor</span></h1>
						</header>
						<div class="row row-height mb-pc-30">
						<?php
							$max = 6;
							$i = 0;
							$blockClass = 'col-pc-2 col-sp-6';
							foreach ($dataClass->getData() as $key => $value) :
								if($value['post_type'] == 'instructor' && $i < $max) :
									include(get_template_directory().'/template-parts/content-instructor-block.php');
									//get_template_part( 'template-parts/content', 'instructor-block' );
									$i++;
								endif;
							endforeach;
						?>
						<?php
							$max = 6;
							$i = 0;
							$blockClass = 'col-pc-2 col-sp-6';
							foreach ($dataClass->getData() as $key => $value) :
								if($value['post_type'] == 'instructor' && $i < $max) :
									include(get_template_directory().'/template-parts/content-instructor-block.php');
									//get_template_part( 'template-parts/content', 'instructor-block' );
									$i++;
								endif;
							endforeach;
						?>
						<?php
							$max = 6;
							$i = 0;
							$blockClass = 'col-pc-2 col-sp-6';
							foreach ($dataClass->getData() as $key => $value) :
								if($value['post_type'] == 'instructor' && $i < $max) :
									include(get_template_directory().'/template-parts/content-instructor-block.php');
									//get_template_part( 'template-parts/content', 'instructor-block' );
									$i++;
								endif;
							endforeach;
						?>
						<?php
							$max = 6;
							$i = 0;
							$blockClass = 'col-pc-2 col-sp-6';
							foreach ($dataClass->getData() as $key => $value) :
								if($value['post_type'] == 'instructor' && $i < $max) :
									include(get_template_directory().'/template-parts/content-instructor-block.php');
									//get_template_part( 'template-parts/content', 'instructor-block' );
									$i++;
								endif;
							endforeach;
						?>
						<?php include(get_template_directory().'/inc/include-pagination.php'); ?>
						</div>
					</div>
				</section>
			
		<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
			</article>
		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php include(get_template_directory().'/template-parts/content-add.php'); ?>

<?php
//get_sidebar();
get_footer();
