let button = document.getElementById('tips');
button.addEventListener('click', addItem);
let listActive = false;

function addItem() {
    let div = document.getElementById('list')
    if (!listActive) {
        let item = document.createElement('p');
        item.innerText = '1)Er komen veel verschillende trams langs met verschillende eindbestemmingen. let goed op waar u instapt. \n ' +
            '2)Het is mogelijk dat de bus wat voller is tijdens spits, dit houdt in dat het rond negen uur s’ochtens en rond vijf uur s’middags wat drukker kan zijn. \n' +
            '3)Stations kunnen wat lastigger te bereiken zijn voor minder mobiele mensen, check daarvoor op onze app.';
        div.appendChild(item);

        listActive = true;
    }else{
        document.querySelector("#list").innerHTML = ``;
        listActive = false;
    }
}
