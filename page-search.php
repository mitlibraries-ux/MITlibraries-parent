<?php
/**
 * Template Name: Seach Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */


$pageRoot = getRoot($post);
$section = get_post($pageRoot);
$isRoot = $section->ID == $post->ID;



get_header(); ?>

		<div id="stage" class="inner column3 tertiaryPage" role="main">

<?php get_template_part('inc/search'); ?>

			<div id="breadcrumb" class="inner hidden-phone" role="navigation" aria-label="breadcrumbs">
				<?php wsf_breadcrumbs(" &raquo; ", ""); ?>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>

			<div class="title-page">
				<?php if ($isRoot): ?>
				<h1><?php echo $section->post_title; ?></h1>
				<?php else: ?>
				<h1><a href="<?php echo get_permalink($section->ID) ?>"><?php echo $section->post_title; ?></a></h1>
				<?php endif; ?>
			</div>

			<div class="content-main flex-container">
				<?php get_template_part( 'content', 'pagefull' ); ?>
			</div>
		</div>
		<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
