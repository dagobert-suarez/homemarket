

var map = new GMaps({
   el: '#map',
  lat: 6.244203,
  lng: -75.581212,
  // mapTypeId: 'hybrid', //terrain, satellite,hybrid//  
  zoom: 11,
});

map.addMarker({
    lat: 6.285205,
    lng: -75.556511,
    title: 'Central parkour',
    click: function(e){
        alert('')
    }
})
map.addMarker({
    lat: 6.232595,
    lng: -75.589043,
    title: 'Belen',
    infoWindow: {
        content: '<img src="https://goo.gl/GQrWWt"  width="100"/> <p>Este es el exito de colombia</p>'
    }
});

// map.drawRoute({
//     origin:[6.285205, -75.556511],
//     destination:[6.232595, -75.589043],
//     travelMode: 'driving', /*'walking'*/
//     strokeColor: '#0085ff',
//     strokeOpacity: 0.6,
//     strkeWeight: 5
// });

GMaps.geolocate({
    success:function(position){
        map.setCenter(position.coords.latitude, position.coords.longitude)
    },
    error:function(error){
            alert("En serio está usando este navegador?");
    }

});
