<nav id="site-navigation" class="span12 main-navigation" role="navigation">
	<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
	<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
	<?php 

		global $blog_id;
		$current_blog_id = $blog_id;

		//switch to the main blog which will have an id of 1
		switch_to_blog(1);

		//output the WordPress navigation menu
		wp_nav_menu(
			array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' )
		);

		//switch back to the current blog being viewed
		switch_to_blog($current_blog_id); 

	// wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) );

	?>	
</nav><!-- #site-navigation -->