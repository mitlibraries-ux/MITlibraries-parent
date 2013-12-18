<?php
/**
 * Template Name: Self-Title
 *
 * Unline other pages in the Libraries theme,
 * this page template renders the page title
 * from the post, rather than from the parent
 * if the page is a child page.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
 
$pageRoot = getRoot($post);
$section = get_post($pageRoot);
$isRoot = $section->ID == $post->ID;


get_header(); ?>

		<?php get_template_part('inc/breadcrumbs', 'noChild'); ?>

		<?php while ( have_posts() ) : the_post(); ?>
		
		<div id="stage" class="stage inner group" role="main">
	
				<h1 class="pageTitle"><?php the_title(); ?></h1>
			
			<div id="content" class="allContent group">

				<?php get_template_part( 'inc/content', 'noTitle' ); ?>
				
			</div>
		
		</div>
		
		<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>