<!-- News and events section -->
<div class="section">

	<h2><a href="/news">News &amp; events</a></h2>
		
	<?php
		$newsTitle = get_field("news_title");
		$newsVideo = get_field("home_news_video");
		$newsVideoURL = get_field("home_news_video_url");
		$newsVideoTitle = get_field("home_news_video_title");
		$newsPhoto = get_field("news_photo");
		$newsUrl = get_field("news_photo_url");
		
		$newsFeedCount = get_field("news_feed_number");
		
		$numNews = 3;
		
		$arNews = array();

		
		for($i=1;$i<=$numNews;$i++) {
			$nTitle = get_field("news_".$i);
			$nUrl = get_field("news_".$i."_url");
			
			if ($nTitle != "" && $nUrl != "") {
				$arNews[] = array(
					"title" => $nTitle,
					"url" => $nUrl
				);
			}
		}
	?>

	<div class="blockimage">

		<?php if ($newsVideo != ""): ?>
			<div class="homepageVideo"><?php echo $newsVideo; ?></div>
		<?php else: ?>

			<?php if ($newsPhoto != ""): ?>

			<?php if ($newsUrl != ""): ?>
				<a href="<?php echo $newsUrl; ?>">
			<?php endif; ?>

			<img src="<?php echo $newsPhoto; ?>"  alt="<?php echo $newsTitle; ?>">

			<?php if ($newsUrl != ""): ?>
					</a>
			<?php endif; ?>

			<?php else: ?>
			<!-- default news photo -->
			<a href="/news/finals-survival-libraries/10129/"><img src="/images/features/cookies-with-canines.jpg"  alt="students petting a dog"</a>

			<?php endif; ?>

		<?php endif; ?>

	</div> <!-- end blockimage -->
	
	<?php if ($newsVideoURL != ""): ?>
		<p><a href="<?php echo $newsVideoURL; ?>"><?php echo $newsVideoTitle; ?></a></p>
	<?php else: ?>

		<?php if ($newsTitle != "" && $newsUrl != ""): ?>
	
			<p><a href="<?php echo $newsUrl; ?>"><?php echo $newsTitle; ?></a></p>
			<?php else: ?>
			<!-- default news link -->
			<p><a href="/news/finals-survival-libraries/10129/">Finals week survival kit from the MIT Libraries</a></p>
		
		<?php endif; ?>		

	<?php endif; ?>		

	<ul class="linklist">
		<!-- custom links -->
		<?php
			foreach($arNews as $news):
				$nTitle = $news["title"];
				$nUrl = $news["url"];
				
				echo "<li><a href='$nUrl'>$nTitle</a></li>";
			
			endforeach;
		?>

		<!-- Auto links -->
		<?php
			if ($newsFeedCount > 0):
				if ($newsBlog) switch_to_blog($newsBlog);
					$args = array(
					'post_type' => 'post',
					'posts_per_page' => $newsFeedCount
					);
			
			$news = new WP_Query( $args );
			
			while($news->have_posts()):
				$news->the_post();
		?>

		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

		<?php
			endwhile;

			if ($newsBlog) restore_current_blog();
			endif; // news feed count
		?>

		<li><a href="/news/">More news</a> | <a href="/calendar">Calendar of events</a></li>

	</ul> <!-- end .linklist -->
	
</div> <!-- end .section -->