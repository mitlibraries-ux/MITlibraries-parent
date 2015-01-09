function oldIESearch() {
	// Old IE class
	var oldIE = $('html').hasClass('lte-ie9');
	// Check for old IE
	if (oldIE) {
		// Remove ul#resources and div.selected
		$('#resources, .wrap-select--resources .selected').remove();
		// Append a select menu
		$('.wrap-select--resources').append('<select id="resources-select"></select');
		// New select menu options
		$('#resources-select')
			.append('<option value="option-1">Articles, e-books, &amp; more</option>')
			.append('<option value="option-2">E-Journals &amp; databases</option>')
			.append('<option value="option-3">Books &amp; more at MIT</option>')
			.append('<option value="option-4">Books &amp; more worldwide</option>')
			.append('<option value="option-5">Course Reserves</option>')
			.append('<option value="option-6">Site Search</option>');
		$('#resources-select').change(function(){
			// Hide all forms on option change
			$('#search-main form').removeClass('input-submit active');
			// Hide all inputs on option change
			$('#search-main input').removeClass('active');
			// Get the selected val...
			var selectedVal = $('#resources-select option:selected').val();
			// ...and show the corresponding form
			$('#search-main input.'+selectedVal).parent().addClass('active input-submit');
			// ...and active input
			$('#search-main input.'+selectedVal).addClass('active');
			// Repeat for keyword selects
			$('.keywords').parent().removeClass('active');
			$('.keywords').removeClass('active');
			$('#search-main .keywords.'+selectedVal).addClass('active');
			$('#search-main .keywords.'+selectedVal).parent().addClass('active');
			// Trigger option-change (better to use callback function?)
			//$(this).trigger('option-change');
			// Advanced search
			var searchSelected = $('#resources li.active').attr('data-target');
			$('#search-main a.search-advanced').removeClass('active');
			$('#search-main a.search-advanced.'+searchSelected).addClass('active');
		});
	}
	else {
		return;
	}
}
// Run
$(function(){
	oldIESearch();
});