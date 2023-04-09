<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tram pagina</title>
    <!-- Development -->
    <script src="https://unpkg.com/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@6.3.7/dist/tippy-bundle.umd.js"></script>
    <script   src="https://code.jquery.com/jquery-3.6.4.min.js"   integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="   crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/tramstyle.css">
    <script type="text/javascript" src="js/tram.js" defer></script>
</head>
<body>
<div class="container">
    <div class="navbar">
        <img src="img/logo.png" alt="logo">
        <nav>
            <ul>
                <li><a href="Metro"> METRO</a></li>
                <li><a href="Trein">TREIN</a></li>
                <li><a href="Bus">BUS</a></li>
                <li><a href="index.php">HOME</a></li>
            </ul>
        </nav>
        <img src="img/menu.png" alt="menu-icon">
    </div>
    <div>


        <div id="mydynamiclocations"></div>

        <div id="contactForm">

            <h1 id=Locatienaam></h1>
            <small>Tram</small>

            <p id=</p>

            <button id="toevoegen-knop">Toevoegen aan favorieten</button>


            <hr>

            <ul id="favorieten-lijst"></ul>

        </div>

        <div style="display: flex;">
            <button id="tips">Tips</button>
            <div id="list">
            </div>
            <button id="tonen-knop">Toon favorieten</button>
            <div id="tonen-favoriet"></div>
        <button id="verwijderen-knop">Verwijder favorieten</button>
        </div>

        </div>

    <script>

        fetch('http://localhost/CLE3/includes/webservicesander.php')
            .then (response=> {
                return response.json();
            })
            .then(json=> {
                console.log(json);
                buildMyHtml(json);
            });

        function buildMyHtml(json){
            var lijnen=json.lijnen;
            var dynamiclocations = document.getElementById("mydynamiclocations");
            var tel2 = 1;
            lijnen.forEach(function(favoriet) {console.log(favoriet)
                var createDiv = document.createElement("h2");
                createDiv.innerHTML = favoriet.lijnnaam
                var autoDiv = document.createElement("div");
                autoDiv.classList.add("rental-manager-progress-bar-container");
                autoDiv.classList.add("lijn"+tel2);
                tel2++
                var tel = 1;

                favoriet.stations.forEach(function(favoriet) {console.log(favoriet)
                    var createDiv = document.createElement("div");
                    createDiv.dataset.id=favoriet.stationname;
                    createDiv.innerHTML = tel;
                    createDiv.classList.add("location");
                    createDiv.onclick = function () {
                      //  http://localhost/CLE3/includes/webservicesander.php?lijn=7&station=Rotterdam centraal

                        $('#contactForm').fadeToggle();
                        var element = event.target;
                        $('#Locatienaam' ).text(element.dataset.id);

                    }
                    autoDiv.appendChild(createDiv);
                    // With the above scripts loaded, you can call `tippy()` with a CSS
                    // selector and a `content` prop:
                    tippy('.location[data-id="'+favoriet.stationname+'"]', {
                        content:favoriet.stationname,
                        placement: 'bottom',
                    });
                    tel++
                })


                dynamiclocations.appendChild(createDiv);

                dynamiclocations.appendChild(autoDiv);
                var createDiv = document.createElement("div");

                console.log(favoriet.stationname)

// With the above scripts loaded, you can call `tippy()` with a CSS
// selector and a `content` prop:
                tippy('.location[data-id="'+favoriet.stationname+'"]', {
                    content:favoriet.stationname,
                    placement: 'bottom',
                });
            })

        }

        const title = document.getElementById('Locatienaam');
        const addFavoriteBtn = document.getElementById('toevoegen-knop');

        addFavoriteBtn.addEventListener("click", function(event) {
            const locatienaam = title.textContent; // get the text content of the title element
            const favorieten = JSON.parse(localStorage.getItem("favorieten")) || []; // get existing favorites or initialize an empty array
            if (favorieten.includes(locatienaam)) {
                alert("Deze locatie staat al in uw favorieten.");
            } else {
               var element = document.querySelector('[data-id="'+locatienaam+'"]');
                element.classList.add("actief");
                favorieten.push(locatienaam); // add the current location name to the favorites array
                localStorage.setItem("favorieten", JSON.stringify(favorieten)); // store the updated favorites array in localStorage
                console.log("Added " + locatienaam + " to favorites."); // log a message to the console
            }

        });

        // get all div elements with class name "location"
        const locationDivs = document.querySelectorAll(".rental-manager-progress-bar-container .location");

        // add a click event listener to each location div
        locationDivs.forEach(function(div) {
            div.addEventListener("click", function(event) {
                // get the value of the data-id attribute from the clicked div element
                const dataId = event.target.getAttribute("data-id");
                console.log(dataId); // print the value of dataId to the console
            });
        });

        // voeg een click-eventlistener toe aan de toevoegen-knop
        var toevoegenKnop = document.getElementById("toevoegen-knop");
        toevoegenKnop.addEventListener("click", function() {
            // voeg de huidige URL toe aan de favorieten-lijst
            const divElement = document.getElementById('Locatienaam');
            const locatieNaam = divElement.textContent;

            // create a new list item element
            var newListItem = document.createElement("li");
            // set the text content of the new list item to the Locatienaam
            newListItem.textContent = locatieNaam;
            // append the new list item to the favorieten-lijst
            document.getElementById("favorieten-lijst").appendChild(newListItem);

            // add the Locatienaam to the favorieten array and store it in local storage
            favorieten.push(locatieNaam);
            localStorage.setItem("favorieten", JSON.stringify(favorieten));
        });

        // voeg een click-eventlistener toe aan de tonen-knop
        var tonenKnop = document.getElementById("tonen-knop");
        tonenKnop.addEventListener("click", function() {
            // maak de favorieten-lijst leeg
            var favorietenLijst = document.getElementById("tonen-favoriet");
            favorietenLijst.innerHTML = "";

            // toon alle opgeslagen favorieten op de pagina
            var favorieten = JSON.parse(localStorage.getItem("favorieten")) || [];
            favorieten.forEach(function(favoriet) {
                var listItem = document.createElement("li");
                var link = document.createElement("a");
                link.href = favoriet;
                link.textContent = favoriet;
                listItem.appendChild(link);
                favorietenLijst.appendChild(listItem);
            });
        });

        // voeg een click-eventlistener toe aan de verwijderen-knop
        var verwijderenKnop = document.getElementById("verwijderen-knop");
        verwijderenKnop.addEventListener("click", function() {

            var favorieten = JSON.parse(localStorage.getItem("favorieten")) || [];

            favorieten.forEach(function(favo){

                var element = document.querySelector('[data-id="'+favo+'"]');
                element.classList.remove("actief");
            });


            // verwijder alle opgeslagen favorieten uit de lokale opslag
            localStorage.removeItem("favorieten");

            // maak de favorieten-lijst leeg
            var favorietenLijst = document.getElementById("favorieten-lijst");
            favorietenLijst.innerHTML = "";
            document.getElementById("tonen-favoriet").innerHTML = "";



        });
    </script>

</body>
</html>
