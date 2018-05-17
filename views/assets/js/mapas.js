var map;
  map = new GMaps({
    el: '#map',
    lat: 6.244203 ,
    lng: -75.581212,
    zoom: 12
  });

  //crear marcadores
  function mapUser(latitude,longitude,title){
     var merker = map.addMarker({
                  lat: latitude,
                  lng: longitude,
                  title: title,
                  click: function(e){
                    if(console.log)
                      console.log(e);
                    alert('You clicked in this marker');
                  },
                  click: function(e){
                     var infowindow = new google.maps.InfoWindow({
                            content: title
                    });
                      infowindow.open(map, merker);
                  }
          });
  }


  //latitud y longitud segun la direccion
    function getLat(dir,nombre) {
            GMaps.geocode({
              address: dir,
              callback: function(results, status){
                // console.log(status);
                if(status=='OK'){
                  var latlng = results[0].geometry.location;
                  map.setCenter(latlng.lat(), latlng.lng());
                  mapUser(latlng.lat(), latlng.lng() , nombre+": "+results[0].formatted_address);
                }
              }
            });
    }

    $.ajax({
        url: "ver-supermercados",
        type: "POST",
        dataType:'json',
        success: function(result){
          console.log(result);
          for (var i = 0; i < result.length; i++) {
            var dir = result[i].nom_ciu+" "+result[i].dir_sup ;
            // console.log(dir);
            getLat(dir,result[i].nom_sup);
          }
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
            alert("vamo probar");
    }

});
