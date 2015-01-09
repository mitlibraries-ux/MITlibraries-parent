//
// Hours
//

$(document).on('click', '.hours-locations .show-more', function(){
	var all = $(this).parent();
	var hiddenLocs = $(all).children('.hidden-mobile');
	$(this).addClass('inactive').trigger('more-locs');
});

$(document).on('more-locs', function(){
	$('.hours-locations .show-more').hide(100);
	$('.hours-locations .hidden-mobile').removeClass('hidden-mobile').removeClass('inactive-mobile');
});

//
// Location Images
//
$(function(){
	$('.img-loc').css('background-image', 'url(/wp-content/themes/libraries/images/locations-sprite-74.png)').trigger('image-ready');
});