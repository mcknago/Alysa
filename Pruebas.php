<?php 
    $Usuario=1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alysa</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/Registro.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"> </script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <script src="https://unpkg.com/esri-leaflet@3.0.3/dist/esri-leaflet.js"
    integrity="sha512-kuYkbOFCV/SsxrpmaCRMEFmqU08n6vc+TfAVlIKjR1BPVgt75pmtU9nbQll+4M9PN2tmZSAgD1kGUCKL88CscA=="
    crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@3.1.1/dist/esri-leaflet-geocoder.css"
    integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
    crossorigin="">
    <script src="https://unpkg.com/esri-leaflet-geocoder@3.1.1/dist/esri-leaflet-geocoder.js"
    integrity="sha512-enHceDibjfw6LYtgWU03hke20nVTm+X5CRi9ity06lGQNtC9GkBNl/6LoER6XzSudGiXy++avi1EbIg9Ip4L1w=="
    crossorigin=""></script>

    <style>
        
    body { margin:0; padding:0; }
    #map {
      width: 80%;
      height: 400px;
      box-shadow: 5px 5px 5px #888;
      border-radius: 20px;
      opacity: 100%;

    }
  </style>
    
</head>
<body>
    <div>

    <section id="formulario">
        
    <div id="map"></div>
        <label>fanfaknf<label>
        <section>
    <div>
    <script>
        apiKey = "AAPKe31f66d7aec44ed6b5170bd321389ce72ipuUSa8Ru6xDEEUJA5IfFVY63rYpjCXm2vvkfQUPXE_WUtu2za5IsHd8_0D7koo";
        var map = L.map('map').setView([40.91, -96.63], 4);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);
        
        var A = L.layerGroup().addTo(map);

        $.post('Pruebas2.php', function(data) {
            Direcciones=JSON.parse(data)
            for(i=0;i<Direcciones.length;i++)
           {
            L.esri.Geocoding.geocode({apikey: apiKey }).text('Barranquilla, Colombia,CO, '+ Direcciones[i]['DirecRes']).run(function (err, results, response) {
                A.addLayer(L.marker(results.results[0].latlng)); });
            L.esri.Geocoding.geocode({apikey: apiKey }).text('Barranquilla, Colombia,CO, '+ Direcciones[i]['DirecTrab']).run(function (err, results, response) {
                A.addLayer(L.marker(results.results[0].latlng)); });    
           }
           map.getBounds().contains(A.getLatLng())
        });

        

    </script>

</body>
</html>