let button1 = document.getElementById('tips');
button1.addEventListener('click', addItem);
let listActive = false;

    function addItem() {
    fetch("tips.json")
        .then(response => response.json())
        .then(data => {
            console.log(data);
            let list = document.getElementById('list');
            list.innerHTML = ""; // Clear previous items from the list
            for (let i = 0; i <= 3; i++) {
                let tip = data.tips;
                let tipItem = document.createElement('li');
                tipItem.textContent = tip[i].text;
                list.appendChild(tipItem);
            }
        })
}
window.addEventListener('load', init);

// Selecteer alle elementen met class naam 'circle'
const circles = document.querySelectorAll('.circle');

// Loop door alle gevonden elementen heen
circles.forEach(circle => {
    // Maak een nieuwe button
    const button2 = document.createElement('button');

    // Geef de button tekst
    button2.innerText = '';

    // Voeg een click event listener toe aan de button
    button2.addEventListener('click', function() {
        console.log('Je hebt op de knop geklikt!');
    });

    // Vervang de circle met de button
    circle.parentNode.replaceChild(button2, circle);

    // Voeg de class 'circle' toe aan de button
    button2.classList.add('circle');
});

// Haal het JSON-bestand op met behulp van een HTTP-request
fetch('data.json')
    .then(response => response.json())
    .then(data => {
        // Haal de gewenste gegevens uit het JSON-object
        const stationName = data.stationname;
        const placeName = data.placename;
        const todo = data.todo;
        const accessibility = data.accessibility;
        const rush = data.rush;

        // Doe iets met de gegevens, bijvoorbeeld loggen naar de console
        console.log(data)

    })
    .catch(error => {
        // Als er een fout optreedt bij het ophalen of parsen van de JSON
        console.error('Error fetching JSON file:', error);
    });









