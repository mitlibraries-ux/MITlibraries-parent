$("#hourCalendar").glDatePicker({
	showAlways: true,
	selectedDate: todayDate,
	
	prevArrow: '<i class="icon-arrow-left"></i>',
	nextArrow: '<i class="icon-arrow-right"></i>',
	dowNames: "SMTWTFS",
	dowOffset: 1,
	onClick: function(target, cell, date, date2) {
		var newDate = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
		
		var path = window.location.pathname;
		var newUrl = path+"?d="+newDate;

		window.location = newUrl;
	}
	
});