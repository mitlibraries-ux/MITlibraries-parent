<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
global $isRoot;
?>

		<div class="content-page">
		
			<?php if (has_post_thumbnail()): ?>
			<div class="featuredImage">
				<?php echo the_post_thumbnail(700, 300); ?>
			
			</div>	
			<?php endif; ?>
			
			
			<div class="entry-content">
				<?php if (!$isRoot): ?>
				<h2><?php the_title(); ?></h2>
				<?php endif; ?>
				<?php the_content(); ?>
				
			</div>
			<footer class="entry-meta">
				<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
			
		</div>