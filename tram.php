 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tram pagina</title>
    <link rel="stylesheet" href="./css/tramstyle.css">
    <script type="text/javascript" src="js/tram.js" defer></script>
</head>
<body>
<div class="container">
    <div class="navbar">
        <img src="img/logo.png" alt="logo">
        <nav>
            <ul>
                <li><a href="Metro"> METRO</a></li>
                <li><a href="Trein">TREIN</a></li>
                <li><a href="Bus">BUS</a></li>
                <li><a href="Tram">TRAM</a></li>
            </ul>
        </nav>
        <img src="img/menu.png" alt="menu-icon">
    </div>
    <div>
        <button id="tips">Tips</button>
        <div id="list">
        </div>
        </div>
    <h1>Tramhaltes Rotterdam</h1>
    <div id="map"></div>

    <script> src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
    <script>
        function initMap(// Maak een Leaflet-kaart met de juiste coördinaten en zoomniveau
        var map = L.map('mapid').setView([51.9244201, 4.4777325], 13);

        // Voeg een basiskaart toe aan de kaart (bijvoorbeeld OpenStreetMap)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Tramhaltes data &copy; <a href="https://www.ret.nl/">RET</a>',
            maxZoom: 18
        }).addTo(map);

        // Haal de gegevens van de tramhaltes op via de API van de RET
        fetch('https://api.ret.net/v1/lines/14/stops')
            .then(response => response.json())
            .then(data => {
                // Verwerk de gegevens en voeg markers toe aan de kaart
                data.forEach(stop => {
                    var marker = L.marker([stop.location.latitude, stop.location.longitude]).addTo(map);
                    marker.bindPopup(stop.name);
                });
            });) {
            // voeg hier de JavaScript-code voor het weergeven van de tramhaltes in Rotterdam toe

        }
    </script>

</body>
</html>
