<html>
  <head>
    <title>Add Map</title>

    <!-- jsFiddle will insert css and js -->
  </head>
  <style type="text/css">
  #map {
  height: 400px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}
</style>
  <body>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpmFBfU630NkEhFhn2lSDe7SzfqzZeNM4&callback=initMap&libraries=&v=weekly&channel=2"
      async
    ></script>
  </body>
  <script type="text/javascript">
  function initMap() {
  // The location of Uluru
  const uluru = { lat: 26.9124, lng: 75.7873 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}
</script>
</html>