$(function() {
	$('#nav-main .link-primary > a').click(function(){
		var linkHref = $(this).attr('href');
		var linkText = $(this).text();
		var linkInfo = 'mega-nav_top_' + linkText + '_' + linkHref;
		TrackEvent('link', 'click', linkInfo, 1);
	});
	$('#nav-main .links-sub a').click(function(){
		var linkHref = $(this).attr('href');
		var linkText = $(this).text();
		var linkInfo = 'mega-nav_sub_' + linkText + '_' + linkHref;
		TrackEvent('link', 'click', linkInfo, 1);
	});
	function TrackEvent(Category,Action,Label, Value){
		_gaq.push(['_trackEvent', Category, Action, Label, Value]);
	}
});

