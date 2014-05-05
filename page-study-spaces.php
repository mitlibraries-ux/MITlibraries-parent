<?php
/**
 * Template Name: Study Spaces Template
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


get_header(); ?>

		<div id="breadcrumb" class="inner" role="navigation" aria-label="breadcrumbs">
			<a href="/">Libraries home</a>
			&raquo; <?php showBreadTitle(); ?>
		</div>

		<div id="stage" class="inner thinSidebar row" role="main">
			<div class="title span12">
				<h1><?php the_title(); ?></h1>
				<div class="extraInfo">
					<a href="/hours/"><i class="icon-arrow-right"></i> See all library hours</a>
				</div>
			</div>
			
			<div id="content">
				<div id="mainContent" class="span9">
					<?php the_content(); ?>
					<hr/>
					<ul class="studyList">
						<?php
							$args = array(
								'post_type' => 'location',
								'meta_key' => 'study_location',
								'meta_compare' => '==',
								'meta_value' => 1,
								'posts_per_page' => -1,
								'orderby' => 'menu_order',
								'order' => 'ASC'
								
							);							
							$subList = new WP_Query( $args );
							
							$odd = " odd";
						?>					
						<?php while ( $subList->have_posts() ) : $subList->the_post(); ?>
						<?php 
							$locationId = get_the_ID();
							$slug = $post->post_name;
							
							$subject = get_field("subject");
							$phone = get_field("phone");
							$building = get_field("building");
							$spaces = get_field("group_spaces");
							$individual = get_field("individual_spaces");
							
							$equipment = get_field("equipment");
							$expert = get_field("expert");
							
							$title1 = get_field("tab_1_title");
							$subtitle1 = get_field("tab_1_subtitle");
							$content1 = get_field("tab_1_content");
							
							$title2 = get_field("tab_2_title");
							$subtitle2 = get_field("tab_2_subtitle");
							$content2 = get_field("tab_2_content");	

							$studyImage = get_field("study_space_image");
							
							$study24 = get_field("study_24");
							$reserveText = get_field("reserve_text");
							if ($reserveText == "") {
								$reserveText = "Reserve Group Study Space";
							}
							$reserveUrl = get_field("reserve_url");


							
							$displayPage = get_field("display_page");
							$pageID = $displayPage->ID;
							$pageLink = get_permalink($pageID);
							
							$description = get_the_content();
							
							$temp = $post;
							$hoursToday = getHoursToday($locationId);
							$post = $temp;
							

						?>
							<li class="<?php echo $odd; ?>" style="background-image: url(<?php echo $studyImage; ?>);">
								<div class="content">
									<h3><a href="<?php echo $pageLink; ?>"><?php echo the_title() ?></a> <i class="icon-arrow-right"></i></h3>
									<div class="description">
										<?php echo $description; ?>
									</div>
									<?php if ($study24 == 1): ?>
										<a class="space247 hidden-phone" href="<?php echo $gStudy24Url; ?>" alt="This location contains one or more study spaces available 24 hours a day, seven days a week. Click the link for more info." title="Study 24/7">Study 24/7</a>
									<?php endif; ?>
										<?php if ($reserveUrl != ""): ?>
												<a class="reserve hidden-phone" href="<?php echo $reserveUrl; ?>"><?php echo $reserveText; ?></a>
										<?php endif; ?>
									
									
									<div class="info">
										<div class="infoCol first">
										<?php if ($study24 == 1): ?>
											<a class="space247 visible-phone" href="<?php echo $gStudy24Url; ?>" alt="This location contains one or more study spaces available 24 hours a day, seven days a week. Click the link for more info." title="Study 24/7">Study 24/7</a>
										<?php endif; ?>
										
											<h4><?php echo $subject ?></h4>
											<div class="sub">
												<?php if ($phone != ""): ?>
												<?php echo $phone ?><br/>
												<?php endif; ?>
												Show on map: <a href="/locations/#!<?php echo $slug; ?>"><?php echo $building ?></a><br/>
												<?php if ($hoursToday != "" && strtolower($hoursToday) != "tba" && strtolower($hoursToday) != "closed"): ?>
												<span class="hours">Open today<br/>
												<span data-location-hours="<?php echo the_title(); ?>"></span></span>
												<?php endif; ?>
												<?php if ($reserveUrl != ""): ?>
												<a class="mobileReserve visible-phone" href="<?php echo $reserveUrl; ?>"><?php echo $reserveText; ?></a>
												<?php endif; ?>
											</div>
										</div>

										<?php if ($individual != ""): ?>
										<div class="infoCol hidden-phone">
											<h4>Total seats</h4>
											<?php echo $individual; ?>
										</div>
										<?php endif; ?>
										
										<?php if ($spaces != ""): ?>
										<div class="infoCol hidden-phone">
											<h4>Group spaces</h4>
											<?php echo $spaces; ?>
										</div>
										<?php endif; ?>
										
										<br clear="all" />
									</div>
									<br clear="all" />
								</div>
							</li>
						<?php 
							if ($odd == "") {
								$odd = " odd";
							} else {
								$odd = "";
							}
						?>
						<?php endwhile; // end of the loop. ?>					
					</ul>
					
				</div>
				<?php get_sidebar(); ?>
				
			</div>		
		</div>
		


<?php get_footer(); ?>