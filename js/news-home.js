//
// News
//

$(function(){
	// Use WP API, don't cache requests
        // old url: '/news/wp-json/posts',
        // new url: '/posts-front.json',
	$.ajax({
		cache: false,
		url: '/posts-front.json',
		dataType: "json"
	})
	.done(function(json){
		// Empty posts Arr
		var postsArr = [];
		for (var i = 0; i < json.length; i++) {
			// Each post
			var post = json[i];
			// Get the username for each post
			var user = post.author.username;
			if (user === 'mit-admin') {
				// Create an array of posts from a single user
				postsArr.push(post);
			}
		}

		// Template; 2 posts
		for (var i = 0; i < 2; i++) {
			//var featuredImage = postsArr[i].featured_image;
			var postTitle = postsArr[i].meta.homepage_post_title,
					postCat = postsArr[i].meta.is_event,
					featuredImage = postsArr[i].featured_image,
					featuredImageSrc,
					eventIcon = '<svg class="icon-calendar" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="14" height="15" viewBox="0 0 14 15" enable-background="new 0 0 14 15" xml:space="preserve"><path d="M0 4V3c0-0.6 0.4-1 1-1h1V1c0-0.6 0.4-1 1-1 0.6 0 1 0.4 1 1v1h6V1c0-0.6 0.4-1 1-1 0.6 0 1 0.4 1 1v1h1c0.6 0 1 0.4 1 1v1H0zM14 5v9c0 0.6-0.4 1-1 1H1c-0.6 0-1-0.4-1-1V5H14zM4 7H2v2h2V7zM4 11H2v2h2V11zM8 7H6v2h2V7zM8 11H6v2h2V11zM12 7h-2v2h2V7zM12 11h-2v2h2V11z"/></svg>',
					eventDate = postsArr[i].meta.event_date,
					eventStart = postsArr[i].meta.event_start_time,
					eventEnd = postsArr[i].meta.event_end_time;
			// Check for post title
			function checkTitle() {
				if (postTitle.length !== 0) {
					return postTitle;
				}
				else {
					postTitle = postsArr[i].title;
					return postTitle;
				}
			};
			// Check if image
			function checkImage() {
				if (featuredImage !== null) { 
					return '<div class="image" style="background-image: url(\'' +
									featuredImage.source +
									'\');" />';
				}
				else {
					// How to prevent returning an empty string?
					return '';
				}
			};
			// Check if event
			function checkEvent() {
				if (postCat) {
					return 'Event';
				}
				else {
					return 'News';
				}
			};
			// Event date
			function buildEvent() {
				var year, month, day;
				if (postCat && typeof eventDate !== 'undefined') {
					// Substrings from PHP date string
					year = eventDate.substr(0, 4);
					month = eventDate.substr(4, 2);
					day = eventDate.substr(6, 2);
					// Format w/ moment.js
					eventDate = moment(year+'-'+month+'-'+day).format('dddd, MMMM D');
					return eventIcon + '<span class="date-event">' + eventDate + '</span>';
				}
				else {
					return '';
				}
			};
			// Event start and end times
			function eventTimes() {
				if (typeof eventStart !== 'undefined' && typeof eventEnd !== 'undefined') {
					return ' <span class="time-event">' + eventStart + ' - ' + eventEnd +'</span>';
				}
				else {
					return '';
				}
			};
			var newsPostsCompiled = _.template(
				'<a class="post--full-bleed no-underline flex-container" href="<%= link %>">' +
					'<div class="excerpt-news">' +
						'<div class="category-post">' +
							checkEvent() +
						'</div>' +
						'<h3 class="title-post">' +
							checkTitle() +
						'</h3>' +
						buildEvent() +
						eventTimes() +
					'</div>' +
					checkImage() +
				'</a>'
			);

			var newsPostsTemplate = newsPostsCompiled(postsArr[i]);
			$('#home-posts-news > .flex-container').append(newsPostsTemplate).trigger('news-loaded');
		};

	});
	
});
// Remove HTML "loading" element
$(document).on('news-loaded', function(){
	$('.spinner').remove();
});
