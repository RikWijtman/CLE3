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
    } else {
        document.querySelector("#list").innerHTML = ``;
        listActive = false;
    }
}

let elements = document.getElementsByClassName("location");

for(let i = 0; i < elements.length; i++) {
    elements[i].onclick = function () { $('#contactForm').fadeToggle();
        var element = event.target;
        $('#Locatienaam' ).text(element.dataset.id);
 //       var element = event.target;
//      alert(element.dataset.id);

    }
}

//document.getElementById('favoriet').addEventListener("click", function (){
//    window.localStorage.setItem('station', 'Rotterdam centraal')
//})
$(function() {

    $(document).mouseup(function (e) {
        var container = $("#contactForm");

        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            container.fadeOut();
        }
    });

});