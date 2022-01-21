<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <style>
        #map {
            position: absolute; top: 0; bottom: 0; left: 0; right: 0;
        }
    </style>
</head>
<body>
    <div id="map">
    </div>
    <script>
        //var map= L.map('map').setView([0,0],3);
        var map = L.map('map',{
            center : [51.505, -0.09],
            zoomControl : true,
            zoom : 13
        });

        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=M07eNYVi1ibUzZQOZRkb',{
        attribution : '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'}).addTo(map);

        var leafleticon = L.icon({
            iconUrl: 'https://www.flaticon.com/free-icon/car-placeholder_75782',
            shadowUrl : 'https://www.flaticon.com/free-icon/car-placeholder_75782',
            iconSize: [38,95],
            iconAnchor: [22,94],
            popupAnchor: [12,-90]
        })
        //https://www.flaticon.com/free-icon/car-placeholder_75782
        var marker = L.marker([51.505, -0.09],{draggable: true, icon : leafleticon}).addTo(map);

        var circle = L.circle([51.508, -0.11],
        {
            color: 'red',
            fillColor : '#f03',
            fillOpacity : 0.5,
            radius : 500
        }).addTo(map);

        marker.bindPopup('<b>Hello World !</b>').openPopup();
        circle.bindPopup('Hello i am here !');


    </script>
</body>

</html>
