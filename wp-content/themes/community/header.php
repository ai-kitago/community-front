<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package community
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>

<body <?php body_class('drawer drawer--right'); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="wrapper">
			<div class="site-branding">
				<?php the_custom_logo(); ?>
			</div>
			<!-- .site-branding -->
	
			<nav id="site-navigation" class="header-nav hidden-sp">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'header-menu',
					'menu_id'        => 'header-menu',
				) );
			?>
			</nav><!-- #site-navigation -->
			<div class="header-icon-nav">
				<button type="button" class="button button-search button-icon icon-search"></button>
				<button type="button" class="drawer-toggle drawer-hamburger">
					<span class="sr-only">toggle navigation</span>
					<span class="drawer-hamburger-icon"></span>
				</button>
			</div>
		</div>
	</header><!-- #masthead -->
	<div class="header-search">
		<div class="search-form">
			<form action="/search/" method="get">
				<input type="text" class="field-search" name="s" placeholder="キーワード">
				<span>Enterを押して検索</span>
			</form>
		</div>
	</div>
	<div class="overlay-search"></div>
	
	<nav class="drawer-nav" role="navigation">
		<ul class="drawer-menu">
			<li><a class="drawer-brand" href="#">Brand</a></li>
			<li><a class="drawer-menu-item" href="#">Nav1</a></li>
			<li><a class="drawer-menu-item" href="#">Nav2</a></li>
		</ul>
	</nav>

	<div id="content" class="site-content">
