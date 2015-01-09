$(function(){
	var map;
	var arMarkers = new Array();
	var focusMarker;
	var lastMarker = "";
	var mapIconBase = '/wp-content/themes/libraries/images/';
	function buildMap() {
		$(".map").click(function(e) {
			
			var id = $(this).attr("data-target");
			
			for(i=0;i<arMarkers.length;i++) {
				var marker = arMarkers[i];
				
				if (marker.id == id) {
					focusMarker = marker;
					map.panTo(marker.getPosition());
					google.maps.event.trigger(marker, "click");
					
				}
			}
			
			$("html, body").animate({scrollTop: 0}, 500);
				
		});
		
		var hash = location.hash.substr(2);
		if (hash != "") {
			if (hash == "map") {
				$("#showMap").click();
			} else {
				$("a[href='#!"+hash+"']").click();
			}
		}
		
	}
	
	function buildMarkers() {
		$("#mapMarkers .location").each(function() {
			var name = $(this).find(".name").html();
			name = name.replace("&amp;", "&");
			var lat = parseFloat($(this).find(".lat").html());
			var lng = parseFloat($(this).find(".lng").html());
			var description = $(this).find(".description").html();
			var id = $(this).find(".id").html();
			
			var latlng = new google.maps.LatLng(lat, lng);
			//var latlng = new google.maps.LatLng(42.358330, -71.093173)
			
			var infowindow = new google.maps.InfoWindow({
				
			});
			
			var infoBox = new InfoBox({
				content: description,
				disableAutoPan: false,
				maxWidth: 280,
				pixelOffset: new google.maps.Size(-140,-181),
				boxStyle: {
					//background: 'url(http://mitlibraries.seangw.com/wp-content/themes/libraries/images/infobox.png)',
					opacity: 1,
					
					//width: "280px",
					//height: "180px",
				},
				closeBoxURL: mapIconBase + "close-sfw.gif",
				closeBoxMargin: "4px 4px 4px 4px",
				infoBoxClearance: new google.maps.Size(1,1),
				isHidden: false,
				pane: "floatPane",
				enableEventPropagation: false
			});
			
			var activeMarker = new google.maps.MarkerImage(mapIconBase + 'map-marker-active.png');

			var defaultMarker = new google.maps.MarkerImage(mapIconBase + 'map-marker-default.png');
			
			
			var marker = new google.maps.Marker({
				position: latlng,
				map: map,
				icon: defaultMarker,
				html: description,
				id: id,
				title: name
			});
			
			google.maps.event.addListener(marker, "click", function () {
				for (var i=0; i<arMarkers.length; i++) {
					arMarkers[i].setIcon(defaultMarker);
					}
					this.setIcon(activeMarker);
			});
			
			google.maps.event.addListener(marker, 'click', function() {
				//infowindow.setContent(this.html);
				//infowindow.open(map,marker);
				
				if (lastMarker != "")
					lastMarker.close();
				lastMarker = infoBox;
				infoBox.open(map, marker);
				
			});
			
			google.maps.event.addListener(map, 'click', function() {
				if(infoBox) {
					infoBox.close();
					marker.setIcon(defaultMarker);
				}					
			});
			
			google.maps.event.addListener(infoBox, "closeclick", function() {
				marker.setIcon(defaultMarker);
			});
			
			arMarkers.push(marker);
		});
	}

	function initMap() {
		var canvas = document.getElementById('map');
		var opts = {
			center: new google.maps.LatLng(42.35978069999999, -71.09360909999998),
			zoom: 15,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(canvas, opts);
		
		buildMarkers();
		
		google.maps.event.addListener(map, 'idle', function() { // remove .gm-style added by GMAPs API
    		jQuery('.gm-style').removeClass('gm-style');
		});
		
	}

	initMap();
	buildMap();

});