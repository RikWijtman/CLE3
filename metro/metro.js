let stored = localStorage.getItem("stations")
let tosti =['kaas', 'brood', 'ham']
localStorage.setItem('lunch', JSON.stringify(tosti))
let stations = [
    {welke: "beurs", drukte: "heel druk", overstappen: "lijn A/B/C/D"},
    {welke: "blaak", drukte: "heel druk", overstappen: "lijn A/B/C/D en trein" },
    {welke: "de terp", drukte: "rustig", overstappen: "bus"}
]
localStorage.setItem('stations', JSON.stringify(stations))
if (stored){
    stations = JSON.parse(stored)
}
// voor de tip knop
let button = document.getElementById('tips');
button.addEventListener('click', addItem);
let listActive = false;

function addItem() {
    let div = document.getElementById('list')
    if (!listActive) {
        let item = document.createElement('p');
        item.innerText = '1)De metro kan vaak onregelmatig rijden, zorg er dus voor dat je op tijd voor je bus komt of dat je de ns app of 9292 regelmatig checkt. \n ' +
            '2)Het is mogelijk dat de metro wat voller is tijdens spits, dit houdt in dat het rond negen uur s’ochtens en rond vijf uur s’middags wat drukker kan zijn. \n' +
            '3)Stations kunnen wat lastiger te bereiken zijn voor minder mobiele mensen, check daarvoor op onze app.';
        div.appendChild(item);

        listActive = true;
    }else{
        document.querySelector("#list").innerHTML = ``;
        listActive = false;
    }
}
