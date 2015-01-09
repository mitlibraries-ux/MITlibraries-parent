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

		<div id="stage" role="main">
			<div class="title-page flex-container">
				<h1><?php the_title(); ?></h1>
				<div class="extraInfo">
					<a href="/hours/">See all library hours <i class="icon-arrow-right"></i></a>
				</div>
			</div>
			
			<div class="content-main flex-container">
				<div class="content-page col-1">
					<?php the_content(); ?>
					<ul class="list--study-spaces">
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
							$post = $temp;
							

						?>
							<li class="flex-container study-space">
								<div class="image-study-space" style="background-image: url(<?php echo $studyImage; ?>);"></div>
								<div class="content--study-space">
									<h3><a href="<?php echo $pageLink; ?>"><?php echo the_title() ?></a></h3>
									<div class="description">
										<?php echo $description; ?>
									</div>
									<?php if ($reserveUrl != ""): ?>
											<a class="reserve hidden-phone" href="<?php echo $reserveUrl; ?>"><?php echo $reserveText; ?></a>
									<?php endif; ?>
									<?php if ($study24 == 1): ?>
										<span> | </span><a class="space247 hidden-phone" href="<?php echo $gStudy24Url; ?>" alt="This location contains one or more study spaces available 24 hours a day, seven days a week. Click the link for more info." title="Study 24/7">Study 24/7</a>
									<?php endif; ?>
									
									<div class="info--study-space flex-container">
										<div class="col-1">
										
											<h4><?php echo $subject ?></h4>
											<div class="sub">
												<?php if ($phone != ""): ?>
												<?php echo $phone ?><br/>
												<?php endif; ?>
												Show on map: <a href="/locations/#!<?php echo $slug; ?>"><?php echo $building ?></a><br/>
												<?php if (get_the_title() !== 'Information Intersection at Stata Center'): ?>
													<span class="hours">Open today<br/>
													<span data-location-hours="<?php the_title(); ?>"></span></span>
												<?php
													endif;
													if ($reserveUrl != ""):
												?>
												<a class="mobileReserve visible-phone" href="<?php echo $reserveUrl; ?>"><?php echo $reserveText; ?></a>
												<?php endif; ?>
											</div>
										</div>

										<?php if ($individual != ""): ?>
										<div class="col-2">
											<h4>Total seats</h4>
											<?php echo $individual; ?>
										</div>
										<?php endif; ?>
										
										<?php if ($spaces != ""): ?>
										<div class="col-3">
											<h4>Group spaces</h4>
											<?php echo $spaces; ?>
										</div>
										<?php endif; ?>
									</div>
								</div>
							</li>
						<?php endwhile; // end of the loop. ?>					
					</ul>
					
				</div>
				<div class="col-2">
					<?php get_sidebar(); ?>
				</div>
			</div><!-- end div.content-main -->		
		</div>
		


<?php get_footer(); ?>