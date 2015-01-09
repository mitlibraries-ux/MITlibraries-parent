(function($) {
$(document).ready(function(){
    $("#hourNav").sticky({
    	topSpacing: 0,
    	className: 'isSticky',
    	getWidthFrom:'.content-page'
    	});
});
})(jQuery);