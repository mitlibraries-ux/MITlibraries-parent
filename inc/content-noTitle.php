<?php
/**
 * The template used for displaying page content in page-SelfTitle.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
global $isRoot;
?>

<div id="mainContent" class="mainContent">

	<?php if (has_post_thumbnail()): ?>

		<div class="featuredImage">
			<?php echo the_post_thumbnail(700, 300); ?>
		</div>

	<?php endif; ?>
	<div class="content-main flex-container">
		<div class="col-1">
	<div class="entry-content">

		<?php the_content(); ?>

	</div>
		</div>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
		<div class="col-2">
		<?php get_sidebar( 'sidebar-1' ); ?>
<?php } ?>
 


		</div>