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
    ageField = document.getElementById('age');
    deleteButton = document.getElementById('delete');

    fillFieldsFromLocalStorage();
    form.addEventListener('submit', formSubmitHandler);
    deleteButton.addEventListener('click', deleteClickHandler);
}

/**
 * Is local storage is available on page load? Let's fill the form
 */
function fillFieldsFromLocalStorage() {
    if (localStorage.getItem('name') !== null && localStorage.getItem('age') !== null) {
        nameField.value = localStorage.getItem('name');
        ageField.value = localStorage.getItem('age');
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
    localStorage.setItem('age', ageField.value);
}

/**
 * Make sure we clean up the local storage again
 *
 * @param e
 */
function deleteClickHandler(e) {
    localStorage.removeItem('name');
    localStorage.removeItem('age');
}

