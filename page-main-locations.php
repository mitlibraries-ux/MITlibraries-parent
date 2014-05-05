<?php
/**
 * Template Name: Location Listing Template
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

$showMap = ($_GET["v"] != "") && ($_GET["v"] == "map") ? 1 : 0;



get_header(); ?>
	<script>
		var showMap = <?php echo $showMap; ?>;
	</script>	

		<div id="breadcrumb" class="inner" role="navigation" aria-label="breadcrumbs">
			<a href="/">Libraries home</a>
			&raquo; <?php showBreadTitle(); ?>
		</div>

		<div id="stage" class="inner thinSidebar row" role="main">
			<div class="title span12">
				<h1>Locations</h1>
				<div class="extraInfo">
					<a id="hoursLink" class="inlineLink" href="/hours/"><i class="icon-arrow-right"></i> See all library hours</a>
					<a id="showMap" class="hidden-phone btn btn-warning btnShow" href="#">Show map</a>
				</div>
			</div>
			
			<div class="preContent span12" id="locationsHome">
				<div id="mapMarkers" class="meta">
						<?php
							
							$args = array(
								'post_type' => 'location',
								'posts_per_page' => -1,
								'orderby' => 'menu_order',
								'order' => 'ASC'
							);							
							$libraryList = new WP_Query( $args );
						?>
						<?php while ( $libraryList->have_posts() ) : $libraryList->the_post(); ?>
						<?php 
							$locationId = get_the_ID();
							$slug = $post->post_name;
							
							$building = cf("building");
							
							$numMain = 3;
							$arMain = array();
							
							$mapImage = get_field("map_image");
							
							
							for($i=1;$i<=$numMain;$i++) {
								$img = get_field("main_image".$i, $locationId);
								if ($img != "")
									$arMain[] = $img;
							}
							$val = $arMain[array_rand($arMain)];							
							//$val = $arMain[0];							
							
							if ($mapImage != "") {
								// user override image;
								$val = $mapImage;
							}
							
							$location = get_field("building_location");
								$coords = explode(",", $location['coordinates']);
								$lat = $coords[0];
								$lng = $coords[1];
								$address = $location['address'];
							
							$name = html_entity_decode(get_the_title());
							
							$displayPage = get_field("display_page");
							$pageID = $displayPage->ID;
							$pageLink = get_permalink($pageID);
							
							$directionsUrl = "http://maps.google.com/maps?";
							$directionsUrl .= "daddr=".$lat.",".$lng;
							//$directionsUrl .= "daddr=".urlencode($address);
							
							if ($lat != "" && $lng != ""):
						?>				
						<div class="location">
							<div class="id"><?php echo $locationId; ?></div>
							<div class="slug"><?php echo $slug; ?></div>
							<div class="name"><?php echo $name; ?></div>
							<div class="lat"><?php echo $lat; ?></div>
							<div class="lng"><?php echo $lng; ?></div>
							<div class="address"><?php echo $address; ?></div>
							<div class="description">
								<div class="infoContent">
									<?php if ($val != ""): ?>
									<div class="infoImage" style="background-image: url(<?php echo $val; ?>); background-repeat: no-repeat;"></div>
									<?php endif; ?>
									<div class="content">
										<h3><a href="<?php echo $pageLink ?>"><?php echo $name; ?></a> <i class="icon-arrow-right"></i></h3>
										<span class="building"><?php echo $building; ?></span><br/>
										<span class="directions"><a href="<?php echo $directionsUrl; ?>" target="_blank" >Find on Google maps</a> <i class="icon-arrow-right"></i></span>
									</div>
									<br clear="all" />
								</div>
							</div>
						</div>
						<?php endif; ?>
						<?php endwhile; ?>
				</div>
				<div id="map">
				
				</div>
				<ul class="locationMainList dark">
						<?php
							
							$args = array(
								'post_type' => 'location',
								'meta_key' => 'primary_location',
								'meta_value' => 1,
								'posts_per_page' => -1,
								'orderby' => 'menu_order',
								'order' => 'ASC'
							);							
							$libraryList = new WP_Query( $args );
						?>
						<?php while ( $libraryList->have_posts() ) : $libraryList->the_post(); ?>
						<?php 
							$locationId = get_the_ID();
							$slug = $post->post_name;
							
							$subject = cf("subject");
							$phone = cf("phone");
							$building = cf("building");
							$spaces = cf("group_spaces");
							$equipment = cf("equipment");
							$expert = cf("expert");
							
							$study24 = get_field("study_24");

							$displayPage = get_field("display_page");
							$pageID = $displayPage->ID;
							$pageLink = get_permalink($pageID);
							
							$temp = $post;
							$hasHours = hasHours($locationId, date("Y-m-d"));
							$post = $temp;
							
							
						?>
							<li>
								<!--
								Main locations listing
								-->
							
							
							
								<?php if ($hasHours): ?>
								<div class="hours">Today&rsquo;s hours: <span data-location-hours="<?php the_title; ?>"></span></div>
								<?php else: ?>
								<div class="hours">TBA</div>
								<?php endif; ?>
								<h2><a href="<?php echo $pageLink ?>" class="locationLink"><?php the_title(); ?></a></h2>
								<div class="sub"><?php echo $subject ?></div>
								<?php if ($phone != ""): ?>
								<?php echo $phone ?>
								<?php endif; ?><a class="map" data-target="<?php echo $locationId; ?>" href="#!<?php echo $slug; ?>">Map: <?php echo $building ?></a>
								<?php if ($study24 == 1): ?>
									<a class="space247" href="<?php echo $gStudy24Url; ?>" alt="This location contains one or more study spaces available 24 hours a day, seven days a week. Click the link for more info." title="Study 24/7">Study 24/7</a>
								<?php endif; ?>

							</li>	
						
						<?php endwhile; // end of the loop. ?>					
			
			
				</ul>
			</div>
			
			<div id="content" class="">
				<div id="mainContent" class="span9">
					<h2 class="bigHead">More Locations</h2>
					<ul class="locationList row light">
					<?php
						$args = array(
							'post_type' => 'location',
							'meta_key' => 'primary_location',
							'meta_compare' => '!=',
							'meta_value' => 1,
							'posts_per_page' => -1,
							'orderby' => 'menu_order',
							'order' => 'ASC'
							
						);							
						$subList = new WP_Query( $args );
					?>					
					<?php while ( $subList->have_posts() ) : $subList->the_post(); ?>
					<?php 
						$locationId = get_the_ID();
						$slug = $post->post_name;
						
						$subject = cf("subject");
						$phone = cf("phone");
						$building = cf("building");
						$spaces = cf("group_spaces");
						$equipment = cf("equipment");
						$expert = cf("expert");
						
						$noHours = cf("no_hours");
						
						$temp = $post;
						$hasHours = hasHours($locationId, date("Y-m-d"));
						$post = $temp;
						
						$displayPage = get_field("display_page");
						$pageID = $displayPage->ID;
						$pageLink = get_permalink($pageID);
					?>
						<li class="span3">
							<h3><a href="<?php echo $pageLink; ?>"><?php echo the_title() ?></a> <i class="icon-arrow-right"></i></h3>
							<?php if ($phone != ""): ?>
							<?php echo $phone ?><br/>
							<?php endif; ?>
							
							<?php if ($noHours): ?>
								<!-- Will never have hours -->
							<?php else: ?>
								<?php if ($hasHours): ?>
								Todays hours: <br/><span data-location-hours="<?php echo the_title(); ?>"></span><br/>
								<?php else: ?>
								TBA<br/>
								<?php endif; ?>
							<?php endif; ?>
							
							<a class="map" data-target="<?php echo $locationId; ?>" href="#!<?php echo $slug; ?>">Map: <?php echo $building ?></a> <i class="icon-arrow-right"></i>
						</li>
					
					<?php endwhile; // end of the loop. ?>					
					</ul>
					
				</div>

				<div id="sidebarContent" class="span3">
					<div class="findStudySpace">
						<h3><a href="/study/" class="widgetButton">Find a study space</a></h3>
					</div>
				</div>
				<?php get_sidebar(); ?>			
		</div>		
	</div>


<?php get_footer(); ?>