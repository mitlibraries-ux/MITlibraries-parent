$(document).ready(function() {
	InitAnalytics();
});

function InitAnalytics(){

	// Check for old IE
	if($('html').hasClass('lte-ie9')) {
		// Store initial tab state
		var startOption = $('#resources-select option:selected');
		TrackEvent('Discovery','Initial Tab',startOption,1);
		
		// Loading a different tab
		$('#resources-select').change(function(){
			var optTarget = $('#resources-select option:selected').val();
			switch (optTarget) {
				case 'option-1':
					optTarget = 'Articles, e-books, & more';
					intValue = 1;
					break;
				case 'option-2':
					optTarget = 'E-journals & databases';
					intValue = 2;
					break;
				case 'option-3':
					optTarget = 'Books & more at MIT';
					intValue = 3;
					break;
				case 'option-4':
					optTarget = 'Books & more worldwide';
					intValue = 4;
					break;
				case 'option-5':
					optTarget = 'Course reserves';
					intValue = 5;
					break;
				case 'option-6':
					optTarget = 'Site search';
					intValue = 6;
					break;
				default:
					optTarget = 'Unknown option';
					intValue = 7;
					break;
			}
			TrackEvent('Discovery','Tab',optTarget,intValue);
		});
	}
	// All other browsers
	else {
		var startOption = $('#resources li').attr('data-target');
		TrackEvent('Discovery','Initial Tab',startOption,1);

		// Loading a different tab
		// Using custom event from search.js
		$('#resources').on('option-change', function(){
			var optTarget = $('#resources li.active').attr('data-target');
			switch (optTarget) {
				case 'bartonplus':
					optTarget = 'Articles, e-books, & more';
					intValue = 1;
					break;
				case 'vera':
					optTarget = 'E-journals & databases';
					intValue = 2;
					break;
				case 'barton':
					optTarget = 'Books & more at MIT';
					intValue = 3;
					break;
				case 'worldcat':
					optTarget = 'Books & more worldwide';
					intValue = 4;
					break;
				case 'course-reserves':
					optTarget = 'Course reserves';
					intValue = 5;
					break;
				case 'site-search':
					optTarget = 'Site search';
					intValue = 6;
					break;
				default:
					optTarget = 'Unknown option';
					intValue = 7;
					break;
			}
			TrackEvent('Discovery','Tab',optTarget,intValue);
		});
	}

	// Submitting a search form
	$('#search-main form').on('submit', function(e) {
		var thisForm, strSearchString, intValue, strOption, strAltSearchString, strSearchType, strArticles;
		intValue = -1;
		thisForm = $(this).attr('id');
		switch (thisForm) {

			case 'bartonplus':
				intValue = 100; // fallback value - shouldn't be needed
				strSearchString = $('#search-main input.active').val();
				strSearchType = $('#search-main select.active option:selected').val();
				switch (strSearchType) {
					case 'TI ':
						// Title search
						intValue = 106;
						strSearchString = 'a2_'+strSearchString;
						break;
					case 'AU ':
						// Author search
						intValue = 115;
						strSearchString = 'a3_'+strSearchString;
						break;
					default:
						// Keyword search (default)
						intValue = 101;
						strSearchString = 'a1_'+strSearchString;
						break;
				}
				break;

			case 'vera':
				strSearchString = $('#search-main input.active').val();
				intValue = 200; // fallback value - shouldn't be needed
				strSearchType = $('#search-main form.active input[name="param_textSearchType_value"]:checked').val();
				switch(strSearchType) {
					case 'contains':
						intValue = 201;
						strSearchString = 'b1_ '+strSearchString;
						break;
					case 'startsWith':
						intValue = 208;
						strSearchString = 'b2_ '+strSearchString;
						break;
					case 'exactMatch':
						intValue = 216;
						strSearchString = 'b3_ '+strSearchString;
						break;
					default:
						intValue = 200;
						break;
				}
				break;

			case 'barton':
				strSearchString = $('#search-main input.active').val();
				intValue = 300; // fallback value - shouldn't be needed
				strSearchType = $('#search-main form.active input[name="code"]:checked').val();
				switch(strSearchType) {
					case 'scan_TTL':
						intValue = 310;
						strSearchString = 'c2_ '+strSearchString;
						break;
					case 'scan_AUT':
						intValue = 320;
						strSearchString = 'c3_ '+strSearchString;
						break;
					case 'scan_CND':
						intValue = 331;
						strSearchString = 'c4_ '+strSearchString;
						break;
					default:
						intValue = 301;
						strSearchString = 'c1_ '+strSearchString;
						break;
				}
				break;

			case 'worldcat':
				strSearchString = $('#search-main input.active').val();
				intValue = 300; // fallback value - shouldn't be needed
				strSearchType = $('#search-main select.active option:selected').val();
				switch(strSearchType) {
					case 'author':
						intValue = 353;
						strSearchString = 'c6_ '+strSearchString;
						break;
					case 'title':
						intValue = 363;
						strSearchString = 'c7_ '+strSearchString;
						break;
					// Keyword
					default:
						intValue = 343;
						strSearchString = 'c5_'+strSearchString;
						break;
				}
				break;

			case 'course-reserves':
				strSearchString = $('#search-main input.active').val();
				intValue = 400; // fallback value - shouldn't be needed
				strSearchType = $('#search-main form.active input[name="code"]:checked').val();
				switch(strSearchType){
					case 'find_WIN':
						intValue = 414;
						strSearchString = 'd2_ '+strSearchString;
						break;
					case 'find_WOU':
						intValue = 428;
						strSearchString = 'd3_ '+strSearchString;
						break;
					default:
						intValue = 401;
						strSearchString = 'd1_ '+strSearchString;
						break;
				}
				break;

			case 'site-search':
				strSearchString = $('#search-main input.active').val();
				intValue = 501;
				strSearchString = 'f1_'+strSearchString;
				break;

		}
		TrackEvent('Discovery', 'Search', strSearchString, intValue);
		// return false;
	});
}

function TrackEvent(Category,Action,Label,Value){
	_gaq.push(['_trackEvent', Category, Action, Label, Value]);
	// alert('Click tracked: C'+Category+' _ A'+Action+' _ L'+Label+' _ V'+Value);
}

function showSubmitted(formname){
	// Used only for debugging - not in production
	$("form#"+formname+" :input").each(function(index, elm){
		alert(index+' | '+elm.name+' | '+elm.value);
	});	
}
