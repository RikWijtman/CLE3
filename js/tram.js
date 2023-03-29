let button = document.getElementById('tips');
button.addEventListener('click', addItem);
let listActive = false;

function addItem() {
    let div = document.getElementById('list')
    if (!listActive) {
        let item = document.createElement('p');
        item.innerText = '1)Er komen veel verschillende trams langs met verschillende eindbestemmingen. let goed op waar u instapt. \n ' +
            '2)Het is mogelijk dat de bus wat voller is tijdens spits, dit houdt in dat het rond negen uur s’ochtens en rond vijf uur s’middags wat drukker kan zijn. \n' +
            '3)Stations kunnen wat lastigger te bereiken zijn voor minder mobiele mensen, check daarvoor op onze app.';
        div.appendChild(item);

        listActive = true;
    }else{
        document.querySelector("#list").innerHTML = ``;
        listActive = false;
    }
}
// Maak een Leaflet-kaart met de juiste coördinaten en zoomniveau
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
        })
    });

