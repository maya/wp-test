<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Minnow
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'minnow' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

<div class="grid">
  <div class=" col-1-2">
		<div class="site-branding">
 		
			<?php if ( function_exists( 'jetpack_the_site_logo' ) ) : ?>
				<?php jetpack_the_site_logo(); ?>
			<?php endif; ?>
			
			<!-- SITE TITLE REMOVED
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      
      
    <a class="blog-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img alt="Traveling Spoon" src="http://localhost/wordpresstest/wp-content/uploads/2015/02/logo-white.png">
    </a>
    --->
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
  </div>
   
		<?php if ( has_nav_menu ( 'social' ) ) : ?>
			<?php wp_nav_menu( array( 'theme_location' => 'social', 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'container_class' => 'social-links', ) ); ?>
		<?php endif; ?>


 <!-- BEGIN CUSTOM HEADER WIDGET AREA -->
 <div class="col-1-2">
    <?php if ( is_active_sidebar( 'header_1' ) ) : ?>
    	<div id="header-widget" class="header-widget widget-area" role="complementary">
    		<?php dynamic_sidebar( 'header_1' ); ?>
    	</div><!-- #primary-sidebar -->
    <?php endif; ?>
 <!-- END CUSTOM HEADER WIDGET AREA -->

		<?php if ( has_nav_menu ( 'primary' ) || is_active_sidebar( 'sidebar-1' ) ) : ?>
			<button class="menu-toggle" title="<?php esc_attr_e( 'Sidebar', 'minnow' ); ?>"><span class="screen-reader-text"><?php _e( 'Sidebar', 'minnow' ); ?></span></button>
		<?php endif; ?>
		<div class="slide-menu">
			<?php if ( has_nav_menu ( 'primary' ) ) : ?>
				<h2 class="widget-title"><?php _e( 'Menu', 'minnow' ); ?></h2>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'sidebar-1' ) ) {
				get_sidebar();
			} ?>
		</div>
		</div>
</div>

     <h2 class="blog-tagline">Travel off the eaten path</h2>
     <p class="blog-title">Traveling Spoon Blog</p>
   
	</header><!-- #masthead -->

	<div id="content" class="site-content">
