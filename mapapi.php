<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDu8dLl8wqtItcAycf5jifLAmsRewpwvps">
</script>
<script type="text/javascript">
function initialize() {
  var myLatlng = new google.maps.LatLng(19.0822507, 72.8812041);
  var mapOptions = {
    zoom: 11,
    center: myLatlng,
    disableDefaultUI: true,
    styles: [{
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 17
                }]
        }, {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 20
                }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 17
                }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 29
                }, {
                    "weight": 0.2
                }]
        }, {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 18
                }]
        }, {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 16
                }]
        }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 21
                }]
        }, {
            "elementType": "labels.text.stroke",
            "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#000000"
                }, {
                    "lightness": 16
                }]
        }, {
            "elementType": "labels.text.fill",
             "stylers": [{
                    "saturation": 36
                }, {
                    "color": "#000000"
                }, {
                    "lightness": 40
                }]
        }, {
            "elementType": "labels.icon",
            "stylers": [{
                    "visibility": "off"
                }]
        }, {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 19
                }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 20
                }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 17
                }, {
                    "weight": 1.2
                }]
        }]
    
  } 
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Mumbai'
      
  });
  var infowindow = new google.maps.InfoWindow({
      content: 'I Live in this awsome City!!'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>