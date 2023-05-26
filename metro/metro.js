let button = document.getElementById('tips');
button.addEventListener('click', addItem);
let listActive = false;

    function addItem() {
    fetch("tips.json")
        .then(response => response.json())
        .then(data => {
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

document.getElementById("fetchStationsButton").addEventListener("click", function() {
    fetch('server.php')
        .then(response => response.json())
        .then(data => {
            let objectContainer = document.getElementById("objectContainer");

            // Clear the objectContainer
            objectContainer.innerHTML = "";

            // Loop through the data and create boxes
            Object.values(data).forEach(station => {
                let stationBox = document.createElement("div");
                stationBox.classList.add("station-box");

                let stationName = document.createElement("div");
                stationName.textContent = "Stationname: " + station.stationname;
                stationBox.appendChild(stationName);

                let placeName = document.createElement("div");
                placeName.textContent = "Placename: " + station.placename;
                stationBox.appendChild(placeName);

                let todoList = document.createElement("ul");
                station.todo.forEach(todoItem => {
                    let todoItemLi = document.createElement("li");
                    todoItemLi.textContent = todoItem;
                    todoList.appendChild(todoItemLi);
                });
                stationBox.appendChild(todoList);

                objectContainer.appendChild(stationBox);
            });
        })
        .catch(error => {
            console.log(error);
        });
});



