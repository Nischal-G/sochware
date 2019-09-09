
var google;
function init() {
    var myLatlng = new google.maps.LatLng(27.6790045,85.3477621);
    var mapOptions = {
        zoom: 16,
        center: myLatlng,
        scrollwheel: false,
    };
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    
    var addresses = ['New York'];

     new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: 'lib/images/loc3.png'
        });
}
google.maps.event.addDomListener(window, 'load', init);