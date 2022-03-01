let marker =[];
let infoWindow =[];

function initMap() {
  map = document.getElementById("map");

  let center = {lat: 33.23906, lng: 131.61272};

  var styles =[
      {
        "featureType": "poi.business",
        "elementType": "labels",
        "stylers": [{"color": "#b5b5b5" }]
      },
      {
        "featureType": "poi.business",
        "elementType": "labels.text.stroke",
        "stylers": [{"color": "#ffffff"}]
      },
      {
        "featureType": "poi.medical",
        "elementType": "labels",
        "stylers": [{"color": "#c9c9c9"}]
      },
      {
        "featureType": "poi.medical",
        "elementType": "labels.text.stroke",
        "stylers": [{"color": "#ffffff"}]
      },
      {
        "featureType": "poi.school",
        "elementType": "labels.text",
        "stylers": [{"color": "#ffffff"}]
      },
      {
        "featureType": "poi.school",
        "elementType": "labels.icon",
        "stylers": [{"visibility": "off"}]
      },
      {
        "featureType": "poi.school",
        "elementType": "labels.text.stroke",
        "stylers": [{"color": "#ffffff"}]
      }
    ];

  opt = {
      zoom: 15,
      center: center,
      mapTypeControl: false,
      scrollwheel: false,
      styles: styles,
  };

  mapObj = new google.maps.Map(map, opt);

  for (var i = 0; i < data.length; i++){
    const image = "img/marker.png";
    const id = data[i]['id'];
    let markerLatLng = new google.maps.LatLng({lat: data[i]['lat'], lng:data[i]['lng']});
    marker[i] = new google.maps.Marker({
      position: markerLatLng,
      map: mapObj,
      icon: {
        url: image,
        scaledSize: new google.maps.Size(25,45)
      }
    });

    infoWindow[i] = new google.maps.InfoWindow({
      content: `<a href=/detail/${id}>${data[i]['name']}</a>`
    });
    markerEvent(i);
  }
  function markerEvent(i){
    marker[i].addListener('click', function(){
      infoWindow[i].open(map,marker[i]);
    });

  }


}