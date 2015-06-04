<?php 
/**
 * Template Name: Home Page - News Built Directly
 *
 */
	get_header('home');

	get_template_part('inc/search');
?>

	<div class="content-main flex-container">
		<div class="col-1 flex-item">
			<div class="hours-locations">
				<h2><a href="/hours">Hours &amp; locations</a></h2>
				<div class="location">
					<a href="/barker" aria-hidden="true" class="img-loc barker"></a>
					<div class="wrap-loc-info">
						<h3><a class="name-location" href="/barker">Barker Library</a></h3><div class="hours"><span data-location-hours="Barker Library"></span> today,</div> <a href="/study/24x7/" class="special">24/7 Study</a><div class="location-info"><a href="/locations/#!barker-library" class="map-location">10-500</a><a href="tel:617-253-0968" class="phone"><span class="number">617-253-0968</span></a></div>
					</div>
				</div>
				<div class="location">
					<a href="/dewey" aria-hidden="true" class="img-loc dewey"></a>
					<div class="wrap-loc-info">
						<h3><a class="name-location" href="/dewey">Dewey Library</a></h3><div class="hours"><span data-location-hours="Dewey Library"></span> today,</div> <a href="/study/24x7/" class="special">24/7 Study</a><div class="location-info"><a href="/locations/#!dewey-library" class="map-location">E53-100</a><a href="tel:617-253-5676" class="phone"><span class="number">617-253-5676</span></a></div>
					</div>
				</div>
				<div class="location">
					<a href="/hayden" aria-hidden="true" class="img-loc hayden"></a>
					<div class="wrap-loc-info">
						<h3><a class="name-location" href="/hayden">Hayden Library</a></h3><div class="hours"><span data-location-hours="Hayden Library"></span> today,</div> <a href="/study/24x7/" class="special">24/7 Study</a><div class="location-info"><a href="/locations/#!hayden-library" class="map-location">14S-100</a><a href="tel:617-253-5671" class="phone"><span class="number">617-253-5671</span></a></div>
					</div>
				</div>
				<a href="#0" class="show-more hidden-non-mobile">
					<svg class="icon-arrow-down" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="16.3" height="9.4" viewBox="2.7 8.3 16.3 9.4" enable-background="new 2.7 8.3 16.3 9.4" xml:space="preserve"><path d="M18.982 9.538l-8.159 8.159L2.665 9.538l1.284-1.283 6.875 6.875 6.875-6.875L18.982 9.538z"/></svg>Show 3 More
				</a>
				<div class="location hidden-mobile inactive-mobile">
					<a href="/archives" aria-hidden="true"  class="img-loc archives"></a>
					<div class="wrap-loc-info">
						<h3><a class="name-location" href="/archives">Institute Archives &amp; Special Collections</a></h3><div class="hours"><span data-location-hours="Institute Archives & Special Collections"></span> today</div><div class="location-info"><a href="/locations/#!institute-archives-special-collections" class="map-location">14N-118</a><a href="tel:617-253-5136" class="phone"><span class="number">617-253-5136</span></a></div>
					</div>
				</div>
				<div class="location hidden-mobile inactive-mobile">
					<a href="/music" aria-hidden="true"  class="img-loc lewis"></a>
					<div class="wrap-loc-info">
						<h3><a class="name-location" href="/music">Lewis Music Library</a></h3><div class="hours"><span data-location-hours="Lewis Music Library"></span> today</div><div class="location-info"><a href="/locations/#!lewis-music-library" class="map-location">14E-109</a><a href="tel:617-253-5689" class="phone"><span class="number">617-253-5689</span></a></div>
					</div>
				</div>
				<div class="location hidden-mobile inactive-mobile">
					<a href="/rotch" aria-hidden="true"  class="img-loc rotch"></a>
					<div class="wrap-loc-info">
						<h3><a class="name-location" href="/rotch">Rotch Library</a></h3><div class="hours"><span data-location-hours="Rotch Library"></span> today</div><div class="location-info"><a href="/locations/#!rotch-library" class="map-location">7-238</a><a href="tel:617-258-5592" class="phone"><span class="number">617-258-5592</span></a></div>
					</div>
				</div>
				<a href="/hours" class="button-primary--green full add-margin link-hours">All hours &amp; locations</a>
				<div class="extra">
					<a href="/map" class="button-tertiary link-map more"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve"><path d="M16 2.922v12.695c0 0.211-0.117 0.336-0.273 0.336 -0.055 0-0.117-0.016-0.18-0.039l-4.344-2.109c-0.125-0.055-0.281-0.086-0.438-0.086 -0.172 0-0.336 0.031-0.461 0.094l-4.109 2.086C6.062 15.969 5.883 16 5.711 16c-0.156 0-0.305-0.023-0.422-0.07l-4.828-2.141C0.203 13.68 0 13.359 0 13.078V0.383c0-0.219 0.117-0.344 0.289-0.344 0.055 0 0.109 0.008 0.172 0.031l4.828 2.141c0.117 0.047 0.266 0.078 0.422 0.078 0.172 0 0.352-0.039 0.484-0.102l4.109-2.086C10.43 0.039 10.594 0 10.766 0c0.156 0 0.312 0.031 0.438 0.086l4.344 2.109C15.797 2.312 16 2.641 16 2.922zM5.5 14.805V3.484L1 1.523v11.32L5.5 14.805zM10.5 12.508V1.242L6 3.492v11.266L10.5 12.508zM15 3.133l-4-1.906v11.289l4 1.898V3.133z"/></svg> View map</a>
					<a href="/study" class="button-tertiary link-study more"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="14" height="16" viewBox="0 0 14 16" enable-background="new 0 0 14.001 16" xml:space="preserve"><path d="M13.8 10.2C14.2 10.6 14 11 13.4 11H6c-1.1 0-2-0.9-2-2H1v6.5C1 15.8 0.8 16 0.5 16S0 15.8 0 15.5v-15C0 0.2 0.2 0 0.5 0S1 0.2 1 0.5V1h5.5c1.1 0 2 0.9 2 2h4.9c0.6 0 0.8 0.4 0.4 0.8l-1.9 2.4c-0.3 0.4-0.3 1.2 0 1.6L13.8 10.2zM7.5 8V3c0-0.6-0.4-1-1-1H1v6H7.5zM12.4 10L11.2 8.4c-0.6-0.8-0.6-2 0-2.8L12.4 4H9.5h-1v5H5c0 0.6 0.4 1 1 1H12.4z"/></svg> Find a study space</a>
					<p>Quiet, group, and 24/7 study spaces available</p>
				</div><!-- end div.extra -->
			</div><!-- end div.hours-locations -->
		</div><!-- end div.col-1 -->
		<div class="col-2 flex-item">
			<div id="home-posts-news" class="posts--preview news-events">
				<h2><a href="/news">News &amp; events</a></h2>
                <h3 class="hidden-text">News &amp; events</h3><!-- per accesibility review for screen readers -->
				<div class="flex-container">

		<?php
			// This calls the news routines that are found in /lib/news.php
			LoadNews();
		?>

				</div>
				<a href="/news" class="button-primary--orange link-news">All news &amp; events</a>
			</div><!-- end div.news-events -->
			<div class="guides-experts">
				<h2><a href="/experts">Research guides &amp; experts</a></h2>
                <h3 class="hidden-text" style="margin-top: -1.5em; padding: 0;">Research guides</h3><!-- per accesibility review for screen readers -->
				<p class="caption">Specialized guides for every research interest.</p>
				<p class="caption">Not sure where to start? <a href="/ask" class="link-ask no-underline"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="16" height="16" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve"><path d="M16 5v2c0 2.8-2.2 5-5 5h-1l-5 4v-4c-2.7 0-5-2.2-5-5V5c0-2.7 2.3-5 5-5h6C13.8 0 16 2.3 16 5zM15 5c0-2.2-1.8-4-4-4H5C2.8 1 1 2.8 1 5v2c0 2.2 1.8 4 4 4h1v1 1.9l3.4-2.7L9.6 11H10h1c2.2 0 4-1.8 4-4V5zM13 4.8C13 4.9 12.9 5 12.8 5h-9.5C3.1 5 3 4.9 3 4.8S3.1 4.5 3.3 4.5h9.5C12.9 4.5 13 4.6 13 4.8zM13 7.3c0 0.1-0.1 0.3-0.2 0.3h-9.5C3.1 7.5 3 7.4 3 7.3S3.1 7 3.3 7h9.5C12.9 7 13 7.1 13 7.3z"/></svg> Ask Us</a></p>
				<div id="guide-list-home" class="guide-list">
				</div>
				<div class="experts-group flex-container">
                	<h3 class="hidden-text">Research experts</h3><!-- per accesibility review for screen readers -->
					<div class="expert">
					</div>
					<div class="expert">
					</div>
					<div class="expert">
					</div>
					<div class="expert">
					</div>
				</div>
				<a href="/experts" class="button-primary--magenta view-experts">All <span class="count">32</span> experts</a>
			</div><!-- end div.guides-experts -->
		</div><!-- end div.col-2 -->
	</div><!-- end div.content-main -->

<?php 
	get_footer();
?>
