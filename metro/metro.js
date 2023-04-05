let button = document.getElementById('tips');
button.addEventListener('click', addItem);
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

//Global vars
let form;
let nameField;
let ageField;
let deleteButton;

function init() {
    if (typeof window.localStorage === "undefined") {
        console.error('Local storage is not available in your browser');
        return;
    }

    form = document.getElementById('form');
    nameField = document.getElementById('name');
    deleteButton = document.getElementById('delete');

    fillFieldsFromLocalStorage();
    form.addEventListener('submit', formSubmitHandler);
    deleteButton.addEventListener('click', deleteClickHandler);
}

/**
 * Is local storage is available on page load? Let's fill the form
 */
function fillFieldsFromLocalStorage() {
    if (localStorage.getItem('name') !== null) {
        nameField.value = localStorage.getItem('name');
    }
}

/**
 * After submitting the form, let's save the values in the local storage
 *
 * @param e
 */
function formSubmitHandler(e) {
    e.preventDefault();
    localStorage.setItem('name', nameField.value);
}

/**
 * Make sure we clean up the local storage again
 *
 * @param e
 */
function deleteClickHandler(e) {
    localStorage.removeItem('name');
}


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
        console.log("top");
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

fetch(`server.php`)
    .then(response => response.json())
    .then(data => {
        for (let i = 1; i <= 10; i++) {
            const circles = document.querySelectorAll(".circle" + i);
            circles.forEach(circle => {
                console.log(data);
            });
        }

        // Doe iets met de gegevens, bijvoorbeeld loggen naar de console
        console.log(data)

    })
    .catch(error => {
        // Als er een fout optreedt bij het ophalen of parsen van de JSON
        console.error('Error fetching JSON file:', error);
    });





