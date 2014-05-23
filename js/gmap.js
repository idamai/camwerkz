var gMap;
var gMarker;

$(document).ready(function(){
	google.maps.event.addDomListener(window, 'load', initMapsView);
});

function initMapsView() {
	var mapOptions = {
		center : new google.maps.LatLng(1.304395,103.797647),
		draggable : true,
		zoomControl : true,
		scrollwheel : true	,
		disableDoubleClickZoom : true,
		zoom : 16,
		disableDefaultUI : false,
		mapTypeId : google.maps.MapTypeId.ROADMAP
	};
	gMap = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	gMarker = new google.maps.Marker({
		map : gMap,
		animation : google.maps.Animation.DROP,
		position : new google.maps.LatLng(1.304395,103.797647)
	});
}