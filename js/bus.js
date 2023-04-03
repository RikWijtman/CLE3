let button = document.getElementById('tips');
let mapBus = document.getElementById('mapbus')

button.addEventListener('click', tipsHandler);
mapBus.addEventListener('click', infoHandler);

let tipListActive = false;
let infoActive = false;

function tipsHandler() {
    let div = document.getElementById('list')
    if (!tipListActive) {
        let item = document.createElement('p');
        item.innerText = '1)De bus kan vaak onregelmatig rijden, zorg er dus voor dat je op tijd voor je bus komt of dat je de ns app of 9292 regelmatig checkt. \n ' +
            '2)Het is mogelijk dat de bus wat voller is tijdens spits, dit houdt in dat het rond negen uur s’ochtens en rond vijf uur s’middags wat drukker kan zijn. \n' +
            '3)Stations kunnen wat lastiger te bereiken zijn voor minder mobiele mensen, check daarvoor op onze app.';
        div.appendChild(item);

        tipListActive = true;
    }else{
        document.querySelector("#list").innerHTML = ``;
        tipListActive = false;
    }
}

function infoHandler(e) {
    let target = e.target;
    if (target.nodeName !== 'AREA') {
        return;
    }
    if (!infoActive) {
        ajaxHandler();
        infoActive = true;
    }else{
        document.querySelector("#stationinfo").innerHTML = ``;
        infoActive = false;
    }
}

function ajaxHandler() {
    fetch("includes/decodeRik.php?id=1")
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
    let p = document.createElement('p');
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
}

function ajaxErrorHandler(data) {
    console.error(data);
}