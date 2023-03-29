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

