(function($){

var Core = {
	ondomready: function(){
		Core.linkExpandable();
		Core.linkTabs();
		Core.nullAlt();
		$(window).resize(function() {
			Core.handleResize();
		});
		Core.handleResize();
	},
	
	handleResize: function() {
		Core.fixMobileSizes();
	},
	
	fixMobileSizes: function() {

		$(".mobileToday").each(function() {
			console.log($(this).html());
			var par = $(this).parent();
			console.log(par.height());
			$(this).height(par.height()+5);
		});	
		
		$(".hrList tbody tr").each(function() {
			var maxHeight = 0;
			$(this).find("td:not(.name)").each(function() {
				var td = $(this);
				maxHeight = Math.max(td.height(), maxHeight);
			});

			$(this).find("td:not(.name)").each(function() {
				$(this).height(maxHeight);
			});
		});
	},	
	
	linkTabs: function() {
		$(".tabnav h2 a").click(function(e) {
			e.preventDefault();
			var par = $(this).parent().parent();
			var container = par.parent().parent();
			
			container.find("li.active").toggleClass("active", false);
			par.toggleClass("active", true);
			
			var id = $(this).attr("href");
			
			var tar = $(id);
			
			var contentPar = tar.parent().parent();
			contentPar.find(".tab.active").toggleClass("active", false);
			
			tar.toggleClass("active", true);
		});
		// Check if there are tabs
		if($('.tabnav').length) {
			// Store a var
			var tabnav = $('.tabnav');
			// Check if URL has hash
			if(window.location.hash) {
			  var hash = window.location.hash;
			  // Remove all active classes from tabnav
			  $('> li', tabnav).removeClass('active');
			  // Add active class to tab that contains the hash
			  $('h2 a[href="'+hash+'"]', tabnav).parent().parent().addClass('active');
			  // Get the top offset of the active tab
			 	var activePos = $('li.active', tabnav).offset().top;
			 	// ...and scroll down to it
			 	$(window).scrollTop(activePos);
			}
		}
	},
	
	linkExpandable: function() {
	
		// Based on Jack Moore's accordion: http://www.jacklmoore.com/notes/jquery-accordion-tutorial/

		$(".expandable h3").click(function(e){
			e.preventDefault();
			$(this).closest("section").find(".content").not(":animated").slideToggle();
			$(this).closest("section").toggleClass("active");
			//var $clickLink = $(this).closest("section").find("a").attr("id");
			//window.location.hash = $clickLink;
		});

		$(".expandable h3 > a").each(function(){
			var $title = $(this).html().replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');
			var $link = $(this);
			$(this).attr("id", $title);

			if(window.location.hash.substring(1) == $title) {
				$($link).closest("h3").click();
				console.log("the hash is: " + $title);
			}
		});
		
	},
	
	nullAlt: function() {
		$("img[alt='null'], img[alt='Null'], img[alt='NULL']").attr("alt", "");
	}
	
}

window.Core = Core;

$(document).ready(function(){Core.ondomready()});

})(jQuery);
