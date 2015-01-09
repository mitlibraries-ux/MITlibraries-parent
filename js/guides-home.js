// Loads a random guide set from guide-list.html
$(function(){
	var	guideNum = Math.ceil(Math.random()*6),
			randGuide = '/wp-content/themes/libraries/guide-list.html '+'.guide-list-'+guideNum;
	$('#guide-list-home').load(randGuide);
});