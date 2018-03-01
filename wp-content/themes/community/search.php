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
			
			<article id="post-<?php the_ID(); ?>" <?php post_class('search'); ?>>
				<header class="page-header"></header>
				<form action="/?s=" method="get">
				<div class="search-control">
					<div class="wrapper">
						<div class="row">
							<div class="field-group">
								<label>カテゴリ</label>
								<select class="input-field pref-select">
									<option>すべて</option>
									<option>スタジオ</option>
									<option>インストラクター</option>
									<option>イベント</option>
									<option>ショップ</option>
									<option>仕事</option>
									<option>企業</option>
								</select>
							</div>
				            <div class="field-group">
								<label>並び順</label>
								<select class="input-field date-select">
									<option>新着順</option>
									<option>更新順</option>
									<option>人気順</option>
								</select>
							</div>
							<div class="field-group">
								<label>キーワード</label>
								<input type="text" class="input-field" value="<?php echo get_search_query() ?>" placeholder="キーワード">
							</div>
							<div class="field-button">
								<label>&nbsp;</label>
								<input type="submit" class="button button-primary button-block float-right" value="検索">
							</div>
						</div>
					</div>
				</div>
				</form>
				<section class="front-section">
					<div class="wrapper">
						<header class="section-header">
							<h2 class="section-title"><span><?php printf( esc_html__( 'キーワード： %s', 'community' ),  get_search_query() ); ?></span>検索結果<span class="category-color">SEARCH</span></h2>
						</header>
						<div class="section-content">

							<div class="row">
							<?php
								$max = 10;
								$i = 0;
								$plan = "paid";
								$blockClass = 'col-pc-12 col-sp-12';
								foreach ($dataClass->getData() as $key => $value) :
									if($i < $max) :
										include(get_template_directory().'/template-parts/content-search.php');
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
							$max = 8;
							$i = 0;
							$blockClass = 'col-pc-3 col-sp-12';
							foreach ($dataClass->getData() as $key => $value) :
								if($value['post_type'] != 'instractor' && $i < $max) :
									include(get_template_directory().'/template-parts/content-block.php');
									$i++;
								endif;
							endforeach;
						?>
						</div>
						<footer class="section-footer">
							<div class="row">
								
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
