function initMap() {

    const Brasov = { lat:45.657974 , lng: 25.601198 };
  
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 13,
      center: Brasov,
    });
   function addMarker(location){
    const marker = new google.maps.Marker({
      position: location,
      map: map,
  })
  
   }
   addMarker({ lat:45.649770 , lng: 25.610690 });
   addMarker({ lat:45.665832, lng: 25.615160 });



  }
