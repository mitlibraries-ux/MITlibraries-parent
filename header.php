<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till div#breadcrumb
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!-- <meta name="format-detection" content="telephone=no"> -->
<!--<meta name="viewport" content="width=device-width" />-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<link href="<?php bloginfo('template_directory') ?>/libs/bootstrap/css/bootstrap.css" rel="stylesheet" media="all">
<link href="<?php bloginfo('template_directory') ?>/libs/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="all">
<link href="<?php bloginfo('template_directory') ?>/libs/fontawesome/css/font-awesome.css" rel="stylesheet" media="all">
<link href="/wp-content/themes/libraries/libs/fontawesome-MITLibraries/style.css" rel="stylesheet" media="all">
<link href="<?php bloginfo('template_directory') ?>/libs/datepicker/styles/glDatePicker.default.css" rel="stylesheet" media="all">
<link href="<?php bloginfo('template_directory') ?>/libs/lightbox/css/lightbox.css" rel="stylesheet" media="all">
<link href="<?php bloginfo('template_directory') ?>/css/main.css" rel="stylesheet" media="all">
<link href="<?php bloginfo('template_directory') ?>/css/menu.css" rel="stylesheet" media="all">
<link href="<?php bloginfo('template_directory') ?>/css/responsive.css" rel="stylesheet" media="all">
<?php
		//$askUrl = get_post_meta($post->ID, "ask_us_override", 1);
		$askUrl = "";
		if ($askUrl == "") $askUrl = "/ask";
?>
	<script>
		todayDate="";
	</script>
</head>

<body <?php body_class(); ?>>
	<div id="container">
		<header class="row group">
			
			<?php
				global $blog_id;
				$current_blog_id = $blog_id;
				// switch to the main site to get all header content, unless MOH site.
				if ($blog_id != 21) {
					switch_to_blog(1);
				}
			?>

			<div id="logo">
				<?php 
					if ($blog_id != 21) {
						echo get_bloginfo( 'name', 'display' );
					}
					else {
						echo "MIT Libraries";
					}
				?>
			</div>

			<nav id="site-navigation" class="span12 main-navigation" role="navigation">
				<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
				<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
				<?php 
					wp_nav_menu(
						array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' )
					);
				?>	
			</nav><!-- #site-navigation -->

			<div id="toolbox">
				<a class="yourAccount" href="/barton-account">Your Account</a>
				<div id="asktell">
					<img class="hidden-phone" src="<?php bloginfo('template_directory') ?>/images/ask-tell.png" alt="" usemap="#asktell"/>
					<img class="visible-phone" src="<?php bloginfo('template_directory') ?>/images/ask-tell-mobile.png" alt="" usemap="#asktellmobile"/>
					<map name="asktell">
						<area shape="poly" coords="0,2,80,3,65,24,1,26" href="<?php echo $askUrl ?>" alt="Ask Us" title="Ask Us"   />
						<area shape="poly" coords="150,0,150,23,71,22,84,0" href="/suggestions" alt="Tell Us" title="Tell Us"   />
					</map>
					<map name="asktellmobile">
						<area shape="poly" coords="0,2,80,3,65,24,1,26" href="<?php echo $askUrl ?>" alt="Ask Us" title="Ask Us"   />
						<area shape="poly" coords="150,0,150,23,71,22,84,0" href="/suggestions" alt="Tell Us" title="Tell Us"   />
					</map>
				</div>
			</div>

			<?php
				//switch back to blog being viewed, unless MOH site
				if ($blog_id != 21) {
					switch_to_blog($current_blog_id);
				}
			?>
			
		</header>
		
		<?php 
			$pageRoot = getRoot($post);
			$section = get_post($pageRoot);
		?>