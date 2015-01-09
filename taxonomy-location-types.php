<?php
/**
 * This is the template that displays all location types.
 */
 
$pageRoot = getRoot($post);
$section = get_post($pageRoot);


get_header(); ?>

		<div id="breadcrumb" class="inner" role="navigation" aria-label="breadcrumbs">
			<a href="#">Libraries Home</a>
			&raquo; <?php the_title(); ?>
		</div>

		<div id="stage" class="inner" role="main">
			<div class="title">
				<h2>Locations</h2>
				<div class="extraInfo">
					<a href="#"><i class="icon-arrow-right"></i> See all library Hours</a>
					<a class="btn btn-warning btnShow" href="#">Show Map</a>
				</div>
			</div>
			
			<div class="preContent" id="locationsHome">
				<ul class="locationMainList">
						<?php while ( have_posts() ) : the_post(); ?>
						<?php 
							$subject = cf("subject");
							$phone = cf("phone");
							$building = cf("building");
							$spaces = cf("group_spaces");
							$equipment = cf("equipment");
							$expert = cf("expert");
							
							$title1 = cf("tab_1_title");
							$subtitle1 = cf("tab_1_subtitle");
							$content1 = cf("tab_1_content");
							
							$title2 = cf("tab_2_title");
							$subtitle2 = cf("tab_2_subtitle");
							$content2 = cf("tab_2_content");						
						?>
							<li>
								<div class="hours">Open today 10am - 6pm</div>
								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?><i class="icon-arrow-right"></i></a></h3>
								<div class="sub"><?php echo $subject ?></div>
								<?php echo $phone ?> <a class="map" href="#">Map: <?php echo $building ?> <i class="icon-arrow-right"></i></a>
							</li>	
						
						<?php endwhile; // end of the loop. ?>					
			
			
				</ul>
			</div>
			
			<div id="content">
				<div id="mainContent">
					<h2>More Locations</h2>
					<ul class="locationList">
						<?php while ( have_posts() ) : the_post(); ?>
						<?php 
							$subject = cf("subject");
							$phone = cf("phone");
							$building = cf("building");
							$spaces = cf("group_spaces");
							$equipment = cf("equipment");
							$expert = cf("expert");
							
							$title1 = cf("tab_1_title");
							$subtitle1 = cf("tab_1_subtitle");
							$content1 = cf("tab_1_content");
							
							$title2 = cf("tab_2_title");
							$subtitle2 = cf("tab_2_subtitle");
							$content2 = cf("tab_2_content");						
						?>
							<li>
								<h3><a href="#"><?php echo the_title() ?><i class="icon-arrow-right"></i></a></h3>
								<?= $phone ?><br/>
								Open today 9am-5pm by appointment only<br/>
								<a href="#">Map: <?= $building ?> <i class="icon-arrow-right"></i></a>
							</li>
						
						<?php endwhile; // end of the loop. ?>					
					</ul>
					
				</div>
				
				<div id="sidebarContent">
					<a href="#" class="widgetButton"><img src="<?php bloginfo('template_directory') ?>/images/btn-study-space.png" alt="Find a Study Space" /></a>
					<div class="sidebarWidgets">
						<div class="widget">
							<h3>In the libraries</h3>
							<ul>
								<li><a href="#">Where to scan, copy &amp; print</a></li>
								<li><a href="#">Equipment available</a></li>
								<li><a href="#">Student jobs</a></li>
								<li><a href="#">Nearby food</a></li>
							</ul>
						</div>
						<div class="widget">
							<h3><a href="#">Campus Map <i class="icon-arrow-right"></i></a></h3>
							<ul class="checklist">
								<li>Bike racks</li>
								<li>Accessible entrances &amp; ramps</li>
								<li>Public transportation</li>
								<li>Parking</li>
							</ul>
						</div>
					</div>
				</div>		

				
			</div>		
		


<?php get_footer(); ?>