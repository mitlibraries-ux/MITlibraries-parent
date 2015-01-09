<?php
/**
 * Template Name: RSS Page
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
 
$pageRoot = getRoot($post);
$section = get_post($pageRoot);
$isRoot = $section->ID == $post->ID;


get_header(); ?>

		<?php get_template_part('inc/breadcrumbs'); ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<?php
			$rssLink = get_field('rss_link');
			$rssScript = get_field('rss_script');
		?>
		
		<div id="stage" class="stage inner border-box group" role="main">
	
				<div class="title-page">
					<h1 class="h-inline"><?php the_title(); ?></h1>
					<a class="rss-link" alt="View RSS feed for this page" href="<?php echo $rssLink; ?>">
						<svg viewbox="0 0 100 100" class="icon-rss" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve"><circle class="rss-piece rss-icon--circle" cx="12" cy="75.5" r="12"/><path class="rss-piece rss-icon--arc-1" d="M58 87.5H41c0-22.644-18.356-41-41-41l0 0v-17C32.033 29.5 58 55.5 58 87.5z"/><path class="rss-piece rss-icon--arc-2" d="M70 87.5c0-38.66-31.34-70-70-70V0c48.324 0 87.5 39.2 87.5 87.5H70z"/></svg>
					</a>
				</div>
			
			<div id="content" class="content-all has-sidebar group">
				
				<div class="entry-content content-main">
					
					<div class="rss-feed">
						<?php echo '<script src="'.$rssScript.'" type="text/javascript"></script>'; ?>
					</div>
				</div>

				<?php get_sidebar(); ?>
				
			</div>
		
		</div>
		
		<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>