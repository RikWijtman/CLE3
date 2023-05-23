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
                tipItem.textContent = tip[i];
                list.appendChild(tipItem);
            }
        })
}
window.addEventListener('load', init);

// Click event handler
let showObjectsButton = document.getElementById("showObjectsButton");
showObjectsButton.addEventListener("click", createObjects);

function createObjects() {
    // Gegevens ophalen van de PHP-server
    fetch('server.php')
        .then(response => response.json())
        .then(data => {
            let objectContainer = document.getElementById("objectContainer");

            // Loop door de gegevens en maak objecten
            Object.values(data).forEach(station => {
                let newObject = document.createElement("div");
                newObject.textContent = "Stationname: " + station.stationname;
                objectContainer.appendChild(newObject);
            });
        })
        .catch(error => {
            console.log(error);
        });
}