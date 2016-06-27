function initMap() {

console.log(google);

//create an array of styles
var styles = {
  scrollwheel: false,
  draggable: false,
  disableDefaultUI: true,
  zoom: 10,
  center: new google.maps.LatLng(34.0736,-118.4004), // Beverly Hills
  styles: [{
    featureType:"landscape",
    stylers:[{saturation:-20},{hue:'#890000'},{lightness:20},{visibility:"simplified"},{gamma: 0.5},{weight: 0.5}]},{
    featureType:"poi",stylers:[{saturation:-100},{hue:'#fffff'},{lightness:31},{visibility:"off"}]},{
    featureType:"road.highway",stylers:[{saturation:-100},{lightness:80},{visibility:"on"}]},{
    featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"off"}]},{
    featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"off"}]},{
    featureType:"transit",stylers:[{saturation:-100},{visibility:"off"}]},{
    featureType:"all",elementType:"labels",stylers:[{visibility:"off"}]},{
    featureType:"water",elementType:"geometry",stylers:[{lightness:100},{hue:'#D3D3D3'},{saturation:-10}]},{
    featureType:"administrative.locality",elementType:"labels",stylers:[{visibility:"on"}]/**/}]
};
  
  
var map = document.getElementById('map');
var map = new google.maps.Map(map, styles);
  var image = new google.maps.MarkerImage('img/google-logo.png',
      null, null, null, new google.maps.Size(40,36));

  var myLatLng = new google.maps.LatLng(34.0736,-118.4004);
  var marker = new google.maps.Marker({
      position: myLatLng,
      animation: google.maps.Animation.BOUNCE,
      map: map,
      icon: image,
  });

}
