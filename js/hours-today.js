// Build today's hours on individual location pages
$(function buildLocHours(){
	var locSelector = $('[data-location-hours]'),
			apptOnlyLoc = ['Document Services', 'Library Storage Annex'],
			apptOnly,
			day,
			addDay;
	// If the selector exists
	if (locSelector.length) {
		// Today
		var today, d, m, yyyy;
		today = new Date();
		d = today.getDate();
		m = today.getMonth() + 1;
		yyyy = today.getFullYear();
		today = m + "/" + d + "/" + yyyy;

		// Day of week
		day = moment().format('dddd').toLowerCase(); // to match JSON
		// Add a day
		addDay = moment().add(1, 'days').format('M/DD/YYYY');

		$.ajax({
				cache: false,
				url: "/wp-content/themes/libraries/term-hours.json",
				dataType: "json"
			})
			.done(function(json) {
				// The terms
				var terms = json.terms,
						theTerm,
						locations;

				for (var i = 0; i < terms.length; i++) {
							// Check each term for start/end dates
					var termStart = terms[i].termStart,
							termEnd = terms[i].termEnd,
							// Check the range (using Moment.js w/ Twix plugin)
							termActive = moment.twix(termStart, termEnd, {parseStrict: true}).isCurrent();
					// Set the active term
					if (termActive === true) {
						theTerm = terms[i];
					}
				};
				// Active term locations
				locations = theTerm.locations;
				// Each location
				locSelector.each(function(){

					var location = $(this).data('location-hours'),
							// Location hours
							locationHrs = _.findWhere(theTerm.locations, {"locationName" : location}),
							// Empty exceptions arr for each location
							exceptionsArr = [],
							// Find the first exception that matches today's date
							exceptions = _.findWhere(locationHrs.exceptions, {"date" : today}),
							todayOpen,
							todayClosed,
							hoursTodayCompiled,
							hoursTodayTemplate;
					// Set the open/closed hours if there is an exception...
					if (exceptions != undefined) {
						todayOpen = '<%= '+'"'+exceptions.open+'"'+' %>';
						todayClosed = '<%= '+'"'+exceptions.closed+'"'+' %>';
					}
					// or else use today's default hours
					else {
						todayOpen = '<%= '+day+'.open %>';
						todayClosed = '<%= '+day+'.closed %>';
					}

					// The template for today's hours
					hoursTodayCompiled = _.template(
							todayOpen + '-' + todayClosed
					);

					hoursTodayTemplate = hoursTodayCompiled(locationHrs);

					// TODO: Clean this up!
					if (hoursTodayTemplate !== 'closed-closed') {
						$(this).append(hoursTodayTemplate.replace(/:00/g,"").replace(/12am/g,"midnight"));
					}
					else {
						$(this).append('Closed');
					}

					if ($('body.home').length) {
						$(this).append(' today');
					}

					if ($('body.home').length && $('+ .special', this).length) {
						$(this).append(',');
					}

					// If location hours are "by appoinment only"
					if (apptOnlyLoc.indexOf(location) !== -1) {
						locSelector.append(' (by appointment only)');
					}

				});
				
			})
			.fail(function(textStatus, error) {
				// Show link to /hours if Ajax request fails
				locSelector.each(function(){
					$(this).append('<a href="/hours">View Hours</a>');
				});
			});
		}
});