<?php
/**
 * Template Name: Custom Admin Views
 *
 * This page displays some custom admin
 * views, and is only accessible when
 * logged into WP.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */


$pageRoot = getRoot($post);
$section = get_post($pageRoot);
$isRoot = $section->ID == $post->ID;


 
get_header(); ?>

	<?php

	$template_page_args = array(
	    'meta_key' => '_wp_page_template',
	    'meta_value' => 'page-full.php',
	    'depth' => -1,
      'hierarchical' => 0
	);

	$template_pages = get_pages($template_page_args);
	
	$template_query_args = array (
		'meta_key' => '_wp_page_template',
		'meta_value' => 'page-full.php'
	);
	
	$template_queries = get_pages($template_query_args);

	?>

	<?php

		if(!current_user_can('manage_options')) {
			include( get_query_template( '404' ) );
			exit();
		}

		else {
			?>
			<h1>Admin Views</h1>
			<h2>Template Pages List</h2>
			<ul>
				<?php
				foreach ( $template_pages as $template_page ) {
				    echo '<li><a href="' . get_permalink( $template_page->ID ) . '">' . $template_page->post_title  . '</a></li>';
				}
				?>
			</ul>
			<h2>Blog IDs</h2>
			<ul>
			<?php
				for ($i = 1; $i <= 30; $i++) {
    			$blog_details = get_blog_details($i);
    			if ($blog_details == '') {
    				echo '<li>There is no blog '.$i.'</li>';
    			}
    			else {
    				echo '<li>Blog '.$blog_details->blog_id.' is called '.$blog_details->blogname.'.</li>';
    			}
				}
			?>
			</ul>
			

		<?php } ?>

	<?php get_footer(); ?>