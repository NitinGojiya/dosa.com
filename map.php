<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaflet Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        /* Set the size of the map container */
        #map {
            height: 400px;
            width:450px;
        }
        
    </style>
</head>
<body>

<h3 style="color:white;">Krishna Dwarka</h3>
<!-- The div element for the map -->
<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    // Initialize the mapss
    const map = L.map('map').setView([22.2371, 68.9676], 50);

    // Set up the OSM layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    // Add a marker
    const marker = L.marker([22.2371, 68.9676]).addTo(map)
        .bindPopup('<b>Dwarka!</b><br />Dwarka .').openPopup();
</script>

</body>
</html>
