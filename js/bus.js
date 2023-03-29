let button = document.getElementById('tips');
window.addEventListener('init', loadHandler);
let listActive = false;

function loadHandler() {
    fetch("localhost/CLE3/includes/decodeRik.php")
    .then((response) => {
        if(response.ok) {
            return response.json();
        }
        throw new Error(response.statusText);
    })
    .then(ajaxSuccesHandler)
    .catch(ajaxErrorHandler);

    button.addEventListener('click', tipsHandler);
}

function tipsHandler() {
    let div = document.getElementById('list')
    if (!listActive) {
        let item = document.createElement('p');
        item.innerText = '1)De bus kan vaak onregelmatig rijden, zorg er dus voor dat je op tijd voor je bus komt of dat je de ns app of 9292 regelmatig checkt. \n ' +
            '2)Het is mogelijk dat de bus wat voller is tijdens spits, dit houdt in dat het rond negen uur s’ochtens en rond vijf uur s’middags wat drukker kan zijn. \n' +
            '3)Stations kunnen wat lastigger te bereiken zijn voor minder mobiele mensen, check daarvoor op onze app.';
        div.appendChild(item);

        listActive = true;
    }else{
        document.querySelector("#list").innerHTML = ``;
        listActive = false;
    }
}

function ajaxSuccesHandler() {

}

function ajaxErrorHandler() {

}