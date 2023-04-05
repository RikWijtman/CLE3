window.addEventListener('load', init);

let button = document.getElementById('tips');
let dialogButton = document.getElementById('dialogbutton')
let mapBus = document.getElementById('mapbus')
let div = document.getElementById('list')

let tipListActive = false;
let stationname;
let favoritesList = [];
let stationId;
let favoritesIdList = [];

function init() {
    button.addEventListener('click', tipsHandler);
    dialogButton.addEventListener('click', dialogHandler);
    mapBus.addEventListener('click', infoHandler);
}

function tipsHandler() {
    if (!tipListActive) {
        div.showModal();
        tipListActive = true;
    }
}
function dialogHandler() {
    if (!tipListActive) {
        return;
    }
    tipListActive = false;
    div.close();
}

function infoHandler(e) {
    let target = e.target;
    if (target.nodeName !== 'AREA') {
        return;
    }
    ajaxHandler(target.classList.value);
    infoActive = true;
}

function ajaxHandler(classid) {
    fetch(`includes/decodeRik.php?id=${classid}`)
        .then((response) => {
            if(response.ok) {
                return response.json();
            }
            throw new Error(response.statusText);
        })
        .then(ajaxSuccesHandler)
        .catch(ajaxErrorHandler);
}

function ajaxSuccesHandler(data) {
    let stationInfoBox = document.getElementById('stationinfo');

    stationInfoBox.innerText = '';

    let p = document.createElement('h1');
    p.innerHTML = `${data.stationname}, ${data.placename}`;
    stationInfoBox.appendChild(p);

    let todo = document.createElement('h2');
    todo.innerHTML = `Wat is hier te doen?`;
    stationInfoBox.appendChild(todo);

    for (let i = 0; i < data.todo.length; i++) {
        let li = document.createElement('li');
        li.innerHTML = `${data.todo[i]}`;
        stationInfoBox.appendChild(li);
    }

    if (data.transfer.length !== 0) {
        let overstap = document.createElement('h2');
        overstap.innerHTML = `Overstappen?`;
        stationInfoBox.appendChild(overstap);

        for (let i = 0; i < data.transfer.length; i++) {
            let li = document.createElement('li');
            li.innerHTML = `${data.transfer[i]}`;
            stationInfoBox.appendChild(li);
        }
    }

    let p2 = document.createElement('p');
    p2.innerHTML = `toegankelijkheid: ${data.accessibility}`;
    stationInfoBox.appendChild(p2);

    let p3 = document.createElement('p');
    p3.innerHTML = `drukte: ${data.rush}/5`;
    stationInfoBox.appendChild(p3);

    let button = document.createElement('button');
    button.innerText = 'Voeg toe als favoriet';
    button.classList.add('ingameButton');
    stationInfoBox.appendChild(button);

    stationname = data.stationname;
    stationId = data.id;

    button.addEventListener('click', favoriteHandler);
}

function favoriteHandler() {
    for (let i = 0; i < favoritesList.length; i++) {
        if (favoritesList[i] === stationname) {
            return;
        }
    }
    favoritesList.push(stationname);
    favoritesIdList.push(stationId);

    localStorage.setItem('Favorites', JSON.stringify(favoritesList));

    makeFavoriteList();
}

function makeFavoriteList() {
    let favoList = document.getElementById('favoList');
    let favorites = localStorage.getItem('Favorites');

    let newfavorite = favorites.replaceAll('[', '')
    favorites = newfavorite.replaceAll(']', '');
    newfavorite = favorites.replaceAll(`"`, '');

    let favoriteList = newfavorite.split(`,`);

    favoList.innerText = '';

    for (let i = 0; i < favoriteList.length; i++) {
        let li = document.createElement('li');
        li.innerText = favoriteList[i];
        li.id = favoritesIdList[i];
        favoList.appendChild(li);
    }

    let button = document.createElement('button');
    button.innerText = 'verwijder favorieten';
    button.classList.add('ingameButton');
    favoList.appendChild(button);

    button.addEventListener('click', deleteHandler);
    favoList.addEventListener('click', locateHandler)
}

function locateHandler(e) {
    let target = e.target;
    if (target.nodeName !== 'LI') {
        return;
    }
    ajaxHandler(target.id);
}

function deleteHandler() {
    favoritesList = [];
    localStorage.removeItem('Favorites');

    let favoList = document.getElementById('favoList');
    favoList.innerText = '';
}

function ajaxErrorHandler(data) {
    console.error(data);
}