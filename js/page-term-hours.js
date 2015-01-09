// Whoa! Heads up--this was built in a hurry. Lots to clean up.

// Today
var today, d, m, yyyy;
today = new Date();
d = today.getDate();
m = today.getMonth() + 1;
yyyy = today.getFullYear();
today = m + "/" + d + "/" + yyyy;

// Dates from today

// var date = moment().format('MMM D').toLowerCase()
// 		date2 = moment().add(1, 'days').format('MMM D').toLowerCase(),
// 		date3 = moment().add(2, 'days').format('MMM D').toLowerCase(),
// 		date4 = moment().add(3, 'days').format('MMM D').toLowerCase(),
// 		date5 = moment().add(4, 'days').format('MMM D').toLowerCase(),
// 		date6 = moment().add(5, 'days').format('MMM D').toLowerCase(),
// 		date7 = moment().add(6, 'days').format('MMM D').toLowerCase();

// Day of week
var day = moment().format('dddd').toLowerCase(); // to match JSON
		// day2 = moment().add(1, 'days').format('dddd').toLowerCase(),
		// day3 = moment().add(2, 'days').format('dddd').toLowerCase(),
		// day4 = moment().add(3, 'days').format('dddd').toLowerCase(),
		// day5 = moment().add(4, 'days').format('dddd').toLowerCase(),
		// day6 = moment().add(5, 'days').format('dddd').toLowerCase(),
		// day7 = moment().add(6, 'days').format('dddd').toLowerCase(),
		// date = moment().format('MMM D'),
		// date2 = moment().add(1, 'days').format('MMM D').toLowerCase(),
		// date3 = moment().add(2, 'days').format('MMM D').toLowerCase(),
		// date4 = moment().add(3, 'days').format('MMM D').toLowerCase(),
		// date5 = moment().add(4, 'days').format('MMM D').toLowerCase(),
		// date6 = moment().add(5, 'days').format('MMM D').toLowerCase(),
		// date7 = moment().add(6, 'days').format('MMM D').toLowerCase();

var addDay = moment().add('days', 1).format('M/DD/YYYY');

$.ajax({
		cache: false,
		url: "/wp-content/themes/libraries/term-hours.json",
		dataType: "json"
	})
	.done(function(json) {
		// Append select element
		$('.entry-content .jump-links').append('<div>Term name: <select id="hours-terms-select" /></div>');
		// Append an empty table for the seven day view
		// $('.entry-content').append(
		// 	'<h2>Hours this week</h2>' +
		// 	'<table>' +
		// 		'<tbody class="table-7-days">' +
		// 			'<tr>' +
		// 				'<th>Location</th>' +
		// 				'<th>' + day + '<br />' + date + '</th>' +
		// 				'<th>' + day2 + '<br />' + date2 + '</th>' +
		// 				'<th>' + day3 + '<br />' + date3 + '</th>' +
		// 				'<th>' + day4 + '<br />' + date4 + '</th>' +
		// 				'<th>' + day5 + '<br />' + date5 + '</th>' +
		// 				'<th>' + day6 + '<br />' + date6 + '</th>' +
		// 				'<th>' + day7 + '<br />' + date7 + '</th>' +
		// 			'</tr>' +
		// 		'</tbody>' +
		// 	'</table>'
		// );
		// The terms
		var terms = json.terms,
		// Active term
				theTerm,
				termName;
		function term_dates() {
			for (var i = 0; i < terms.length; i++) {
				// Term name 
				termName = terms[i].termName;
				// Append term names to select element
				$('#hours-terms-select').append('<option value="'+termName+'">'+termName+'</option>');
			}
		}

		term_dates();

		function hours_terms() {
			for (var i = 0; i < terms.length; i++) {
				// Term name 
				termName = terms[i].termName;
				// Check each term for start/end dates
				var termStart = terms[i].termStart;
				var termEnd = terms[i].termEnd;
				// Check the range (using Moment.js w/ Twix plugin)
				var termActive = moment.twix(termStart, termEnd, {parseStrict: true}).isCurrent();
				// Set the active term
				if (termActive === true) {
					theTerm = terms[i];
				}
			};
		}

		hours_terms();

		$('#hours-terms-select').change(function(){
			// Remove any hours data that has been loaded
			$('.ajax-loaded').remove();
			// Get the active term from the selected option
			termActive = $('option:selected', this).val();
			// Set the term based on that
			theTerm = _.findWhere(terms, {termName:termActive});
			// Build new term views
			build_term_views();
		});

		function build_term_views(){
			// Active term locations
			var locations = theTerm.locations;

			for (var i = 0; i < locations.length; i++) {
				// Empty exceptions arr for each location
				var exceptionsArr = [];
				// Find the first exception that matches today's date
				var exceptions = _.findWhere(locations[i].exceptions, {"date" : today});
				// Set the open/closed hours if there is an exception...
				if (exceptions != undefined) {
					var todayOpen = '<%= '+'"'+exceptions.open+'"'+' %>';
					var todayClosed = '<%= '+'"'+exceptions.closed+'"'+' %>';
				}
				// or else use today's default hours
				else {
					var todayOpen = '<%= '+day+'.open %>';
					var todayClosed = '<%= '+day+'.closed %>';
				}
				// The template for today's hours
				var dayCompiled = _.template(
					'<tr class="ajax-loaded">' +
						'<td>' +
							'<%= locationName %>' +
						'</td>' +
						'<td>' +
							todayOpen +
						'</td>' +
						'<td>' +
							todayClosed +
						'</td>' +
					'</tr>'
				);

				// 7 day template
				// var check_closed;
				// var sevenDaysCompiled = _.template(
				// 			'<tr class="ajax-loaded">' +
				// 				'<td>' +
				// 					'<%= locationName %>' +
				// 				'</td>' +
				// 				'<td class"day-name">' +
				// 					'<span class="open">' +
				// 						'<%= ' + day + '.open %> - ' +
				// 					'</span>' +
				// 					'<span class="closed">' +
				// 						'<%= ' + day + '.closed %>' +
				// 					'</span>' +
				// 				'</td>' +
				// 				'<td class="day-name">' +
				// 					'<span class="open">' +
				// 						'<%= ' + day2 + '.open %> - ' +
				// 					'</span>' +
				// 					'<span class="closed">' +
				// 						'<%= ' + day2 + '.closed %>' +
				// 					'</span>' +
				// 				'</td>' +
				// 				'<td class="day-name">' +
				// 					'<span class="open">' +
				// 						'<%= ' + day3 + '.open %> - ' +
				// 					'</span>' +
				// 					'<span class="closed">' +
				// 						'<%= ' + day3 + '.closed %>' +
				// 					'</span>' +
				// 				'</td>' +
				// 				'<td class="day-name">' +
				// 					'<span class="open">' +
				// 						'<%= ' + day4 + '.open %> - ' +
				// 					'</span>' +
				// 					'<span class="closed">' +
				// 						'<%= ' + day4 + '.closed %>' +
				// 					'</span>' +
				// 				'</td>' +
				// 				'<td class="day-name">' +
				// 					'<span class="open">' +
				// 						'<%= ' + day5 + '.open %> - ' +
				// 					'</span>' +
				// 					'<span class="closed">' +
				// 						'<%= ' + day5 + '.closed %>' +
				// 					'</span>' +
				// 				'</td>' +
				// 				'<td class="day-name">' +
				// 					'<span class="open">' +
				// 						'<%= ' + day6 + '.open %> - ' +
				// 					'</span>' +
				// 					'<span class="closed">' +
				// 						'<%= ' + day6 + '.closed %>' +
				// 					'</span>' +
				// 				'</td>' +
				// 				'<td class="day-name">' +
				// 					'<span class="open">' +
				// 						'<%= ' + day7 + '.open %> - ' +
				// 					'</span>' +
				// 					'<span class="closed">' +
				// 						'<%= ' + day7 + '.closed %>' +
				// 					'</span>' +
				// 				'</td>' +
				// 			'</tr>'
				// );

				// var sevenDaysTemplate = sevenDaysCompiled(locations[i]);
				// // Append the 7 day template
				// $('.entry-content .table-7-days').append(sevenDaysTemplate);

				// Create some IDs for a jump menu
				var locId = locations[i].locationName.substr(0, locations[i].locationName.indexOf(' ')).toLowerCase();
				console.log(locId);

				// Location default Mon-Sun hours template
				var weekCompiled = _.template(
					'<h2 id="hours-week-' + locId + '" class="name-location ajax-loaded">' +
						'<%= locationName %> Monday - Sunday' +
					'</h2>' +
					'<table class="ajax-loaded">' +
						'<tbody class="table-mon-sun">' +
							'<tr>' +
								'<th>Day</th>' +
								'<th>Open</th>' +
								'<th>Closed</th>' +
							'</tr>' +
							'<tr>' +
								'<td>' +
									'Monday' +
								'</td>' +
								'<td>' +
									'<%= monday.open %>' +
								'</td>' +
								'<td>' +
									'<%= monday.closed %>' +
								'</td>' +
							'</tr>' +
							'<tr>' +
								'<td>' +
									'Tuesday' +
								'</td>' +
								'<td>' +
									'<%= tuesday.open %>' +
								'</td>' +
								'<td>' +
									'<%= tuesday.closed %>' +
								'</td>' +
							'</tr>' +
							'<tr>' +
								'<td>' +
									'Wednesday' +
								'</td>' +
								'<td>' +
									'<%= wednesday.open %>' +
								'</td>' +
								'<td>' +
									'<%= wednesday.closed %>' +
								'</td>' +
							'</tr>' +
							'<tr>' +
								'<td>' +
									'Thursday' +
								'</td>' +
								'<td>' +
									'<%= thursday.open %>' +
								'</td>' +
								'<td>' +
									'<%= thursday.closed %>' +
								'</td>' +
							'</tr>' +
							'<tr>' +
								'<td>' +
									'Friday' +
								'</td>' +
								'<td>' +
									'<%= friday.open %>' +
								'</td>' +
								'<td>' +
									'<%= friday.closed %>' +
								'</td>' +
							'</tr>' +
							'<tr>' +
								'<td>' +
									'Saturday' +
								'</td>' +
								'<td>' +
									'<%= saturday.open %>' +
								'</td>' +
								'<td>' +
									'<%= saturday.closed %>' +
								'</td>' +
							'</tr>' +
							'<tr>' +
								'<td>' +
									'Sunday' +
								'</td>' +
								'<td>' +
									'<%= sunday.open %>' +
								'</td>' +
								'<td>' +
									'<%= sunday.closed %>' +
								'</td>' +
							'</tr>' +
						'</tbody>'+
					'</table>'
				);
				// Location exception template
				var locationsCompiled = _.template(
					'<h2 id="hours-exceptions-' + locId + '" class="name-location ajax-loaded">' +
						'<%= locationName %> exceptions' +
					'</h2>' +
					'<table class="ajax-loaded">' +
						'<tbody class="table-exceptions">' +
							'<tr>' +
								'<th>Date</th>' +
								'<th>Open</th>' +
								'<th>Closed</th>' +
							'</tr>' +
						'</tbody>'+
					'</table>'
				);

				var weekTemplate = weekCompiled(locations[i]);
				// Append the Mon-Sun hours template
				$('.entry-content').append(weekTemplate);
				var locationTemplate = locationsCompiled(locations[i]);
				// Append the location exception template
				$('.entry-content').append(locationTemplate);
				
				// Exceptions per location
				var exceptionsPer = locations[i].exceptions;
				if (typeof exceptionsPer !== 'undefined') { // Make sure there are exceptions
					for (var ii = 0; ii < exceptionsPer.length; ii++) {
						// Template for each exception
						var exceptionsCompiled = _.template(
							'<tr class="ajax-loaded">' +
								'<td>' +
									'<%= date %>' +
								'</td>' +
								'<td>' +
									'<%= open %>' +
								'</td>' +
								'<td>' +
									'<%= closed %>' +
								'</td>' +
							'</tr>'
						);
						var exceptionsTemplate = exceptionsCompiled(locations[i].exceptions[ii]);
						// Append each exception to the most recently create location exception list
						$('.table-exceptions:last').append(exceptionsTemplate);
					};
				}
				
				// Set today's hours for each location
				var dayTemplate = dayCompiled(locations[i]);
				$('#table-today').append(dayTemplate);

			};

			// Append term start and end times
			$('#date-term-begin').append('<div class="ajax-loaded" />').text(theTerm.termStart);
			$('#date-term-end').append('<div class="ajax-loaded" />').text(theTerm.termEnd).trigger('hours-loaded');
		}

		build_term_views();
	});

// Append a jump nav

// $(document).on('hours-loaded', function(){
// 	$('<nav id="nav-hours" class="nav-page--dynamic" />').appendTo('.content-main');
// 	$('.content-page').css('width', '67%');
// 	$('.entry-content h2').each(function(){
// 		var jumpLink = $(this).attr('id');
// 		var jumpText = $(this).text();
// 		$('#nav-hours')
// 			.append('<a href="#' + jumpLink + '">' + jumpText + '</a>');
// 	});
// 	var navHeight = $('#nav-hours').outerHeight() + 530;
// 	console.log(navHeight);
// 	$('#nav-hours').css('margin-bottom', navHeight);
// });