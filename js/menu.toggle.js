$(function(){
	$('#menu--toggle').click(function(){
		$(this).toggleClass('active');
		$(this).next().toggleClass('active');
		console.log('clicked');
		if ($(this).hasClass('active')) {
			$(this).text('Hide Menu');
		}
		else {
			$(this).text('View Menu');
		}
	});
});