<?php
/**
 * Template Name: Get It
 *
 * The Get It template page.
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

		<?php while ( have_posts() ) : the_post();?>
		
			<?php

				$altTitle1 = get_field('alt_search_1_title');
				$altSearch1 = get_field('alt_search_1');
				$moreTitle1 = get_field('more_options_1_title');
				$moreOptions1 = get_field('more_options_1');
				$altTitle2 = get_field('alt_search_2_title');
				$altSearch2 = get_field('alt_search_2');
				$moreTitle2 = get_field('more_options_2_title');
				$moreOptions2 = get_field('more_options_2');
				$altTitle3 = get_field('alt_search_3_title');
				$altSearch3 = get_field('alt_search_3');
				$moreTitle3 = get_field('more_options_3_title');
				$moreOptions3 = get_field('more_options_3');

			?>
		<div id="stage" class="inner column1 row">

			<div class="title-page flex-container">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="content-main">

				<div class="postContent"><?php echo the_content(); ?></div>
				<div class="flex-container group">
				
					<div class="flex-item first">
						<h3><?php echo $altTitle1; ?></h3>
						<div class="altSearch1"><?php echo $altSearch1; ?></div>
						<h4 class="moreTitle1"><?php echo $moreTitle1; ?></h4>
						<div class="moreOptions1"><?php echo $moreOptions1; ?></div>
					</div>
					
					<div class="flex-item second">
						<h3><?php echo $altTitle2; ?></h3>
						<div class="altSearch2"><?php echo $altSearch2; ?></div>
						<h4 class="moreTitle2"><?php echo $moreTitle2; ?></h4>
						<div class="moreOptions2"><?php echo $moreOptions2; ?></div>
					</div>
					
					<div class="flex-item third">
						<h3><?php echo $altTitle3; ?></h3>
						<div class="altSearch3"><?php echo $altSearch3; ?></div>
						<h4 class="moreTitle3"><?php echo $moreTitle3; ?></h4>
						<div class="moreOptions3"><?php echo $moreOptions3; ?></div>
					</div>
					
				</div>

			</div>
		
		</div>
		
		<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>