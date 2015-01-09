<?php

	// Query the locations
	$args = array(
						'post_type' => 'location',
						'posts_per_page' => 6,
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'no_found_rows' => true,
						'update_post_term_cache' => false,
						'update_post_meta_cache' => false
					);

	$locationsQuery = new WP_Query($args);

	while ($locationsQuery->have_posts()) {
			$locationsQuery->the_post();
			echo '<div class="location"><h3>' . get_the_title() . '</h3></div>';
	}

?>