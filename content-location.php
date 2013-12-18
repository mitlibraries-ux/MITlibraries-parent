<?php
	global $gStudy24Url;
	
	$mapPage = "/locations/#!";
	
	$locationId = get_the_ID();
	$slug = $post->post_name;
	
	$locationName = strtolower(get_the_title());
	$locationName = str_replace('&', '', $locationName);
	$locationName = preg_replace("/[^a-z0-9_\s-]/", "", $locationName);
	$locationName = preg_replace("/[\s-]+/", " ", $locationName);
	$locationName = preg_replace("/[\s_]/", "-", $locationName);

	$subject = cf("subject");
	$phone = cf("phone");
	$building = cf("building");
	$spaces = cf("group_spaces");
	//$equipment = cf("equipment");
	$arexpert = get_field("expert");
	
	$title1 = cf("tab_1_title");
	$subtitle1 = cf("tab_1_subtitle");
	$content1left = get_field("tab_1_content_left");
	$content1 = get_field("tab_1_content");

	$title2 = cf("tab_2_title");
	$subtitle2 = cf("tab_2_subtitle");
	$content2left = get_field("tab_2_content_left");
	$content2 = get_field("tab_2_content");
	
	$content2wide = 0;
	if ($content2 == "") $content2wide = 1;
	
	$content1wide = 0;
	if ($content1 == "") $content1wide = 1;
	
	$study24 = get_field("study_24");

	$temp = $post;
	$hasHours = hasHours($locationId, date("Y-m-d"));
	$hoursToday = getHoursToday($locationId);
	$isOpen = getOpen($locationId);
	$post = $temp;
	
	
	$reserveText = get_field("reserve_text");
	if ($reserveText == "") {
		$reserveText = "Reserve Group Study Space";
	}
	$reserveUrl = get_field("reserve_url");
	
	
	
	$expertAskUrl = get_field("expert_ask_url");
	if ($expertAskUrl == "") $expertAskUrl = "http://libraries.mit.edu/ask";
	
	
	$numMain = 6;
	$arMain = array();
	
	for($i=1;$i<=$numMain;$i++) {
		$img = get_field("main_image".$i, $locationId);
		if ($img != "")
			$arMain[] = $img;
	}
	
	$numSub = 8;
	$arSub = array();
	$subs = 0;
	for($i=1;$i<=$numSub;$i++) {
		$img = get_field("sub_image".$i, $locationId);
		if ($img != "") {
			$subs++;
			$arSub[] = $img;
		}
	}
	
	$strLocation = "";
	if ($subs <= 0) {
		$strLocation = "noThumbs";
	}
	
	$alert = trim(get_field("alert"));
?>
		
<div id="stage" class="inner row group" role="main">

	<div class="title libraryTitle span12 dark">

		<div class="libraryContent">
			<h1><span class="libraryName"><?php the_title(); ?></span><span class="librarySubject"><?php echo $subject ?></h1>
			<div class="sub">
				<?php echo $phone ?><br/>
				show on map: <a href="<?php echo $mapPage.$slug; ?>"><?php echo $building ?> <i class="icon-arrow-right"></i></a>
			</div>
		</div>
		
		<div class="todayHours">
			<?php if ($hasHours): ?>
			Today's hours:<br/>
			<b><?php echo $hoursToday; ?></b></br>
			<a href="/hours/#<?php echo $locationName; ?>">See all hours <i class="icon-arrow-right"></i></a>
			<?php endif; ?>
		</div>					

		<?php if ($study24 == 1): ?>
			<a class="space247" href="<?php echo $gStudy24Url; ?>" alt="This location contains one or more study spaces available 24 hours a day, seven days a week. Click the link for more info." title="Study 24/7">Study 24/7</a>
		<?php endif; ?>
		
		<?php 

			include(locate_template('inc/alert.php'));

			if ($showAlert == 0 && $alert != "") {
				echo '<div class="libraryAlert">'.$alert.'</div>';
			}

		 ?>
		
		
		<div class="librarySlideshow">

			<div class="slideshow">
				<?php
					$val = $arMain[array_rand($arMain)];
				?>
				<?php if ($val != ""): ?>
				<img src="<?php echo $val; ?>" data-thumb="<?php echo $val; ?>" alt="<?php the_title(); ?>" />
				<?php endif; ?>
			</div>

		</div>

	</div><!-- end div.libraryTitle -->
	
	<div id="content" class="allContent locationContent group <?php echo $strLocation; ?>">
		<div id="mainContent" class="mainContent span9">
			<!--
			<?php if ($study24 == 1): ?>
				<a class="space247" href="<?php echo $gStudy24Url; ?>">Study 24/7</a>
			<?php endif; ?>
			-->
			<?php if ($title1 != "" || $title2 != ""): ?>
				<?php $noTab = "";  ?>
			<ul class="tabnav">
				<?php if ($title1 != ""): ?>
				<li class="active"><h2><a href="#tab1"><?php echo $title1 ?><div><?php echo $subtitle1 ?></div></a></h2></li>
				<?php endif; ?>
				<?php if ($title2 != ""): ?>
				<li><h2><a href="#tab2"><?php echo $title2 ?><div><?php echo $subtitle2 ?></div></a></h2></li>
				<?php endif; ?>
			</ul>
			<?php else: ?>
				<?php $noTab = " noTab";  ?>
			<?php endif; ?>

			<div class="tabcontent group <?php echo $noTab ?>">

				<div class="tab active flexContainer group" id="tab1">

						<div class="flexItem first group <?php if($content1wide): ?>span7 wideColumn<?php else: ?>span4<?php endif; ?>">
						
							<?php
								if ($arexpert) {
									$expertIndex = array_rand($arexpert);
									$expert = $arexpert[$expertIndex];
									
									
									$name = $expert->post_title;
									$bio = $expert->post_excerpt;
									//$url = $expert->guid;
									$url = get_post_meta($expert->ID, "expert_url", 1);
									
									if (has_post_thumbnail($expert->ID)) {
										$thumb = get_the_post_thumbnail($expert->ID, array(108,108));
									} else {
										$thumb = "";
									}
									
							?>
							<div class="profile group">
								<?php if ($thumb != ""): 
									echo $thumb;
								endif; ?>
								<div class="profileContent">
									<h3 class="profileTitle"><span class="intro">Featured expert:</span><span class="name"><?php echo $name; ?></span><span class="bio"><?php echo $bio; ?></span></h3>
									<div class="links">
										<a class="primary" href="<?php echo $url; ?>" target="_blank">How can I help? <i class="icon-arrow-right"></i></a>
										<a href="http://libguides.mit.edu/content.php?pid=110460&sid=1651114" target="_blank">See all our experts <i class="icon-arrow-right"></i></a>
									</div>

								</div>

							</div>

							<?php
								}
									echo $content1left;
								?>

						</div>

						<div class="flexItem second span3">
							<?php echo $content1 ?>
						</div>

				</div>
				<?php if ($title2 != ""): ?>
				
				<div class="tab tab2 flexContainer group" id="tab2">

						<div class="flexItem first <?php if($content2wide): ?>span8 wideColumn<?php else: ?>span2<?php endif; ?>">
						<?php echo $content2left ?>
						
						<?php if ($reserveUrl != ""): ?>
									<a class="reserve hidden-phone" href="<?php echo $reserveUrl; ?>"><?php echo $reserveText; ?></a>
						<?php endif; ?>

						
						</div>

						<div class="flexItem second span6">
							<?php echo $content2 ?>
						</div>

				</div>

				<?php endif; ?>

			</div><!-- end div.tabcontent -->

		</div>

		<?php get_sidebar(); ?>

</div><!-- end div#stage -->