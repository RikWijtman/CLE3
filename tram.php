 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tram pagina</title>
    <!-- Development -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
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

        <h2> Tram lijn 7 </h2>
        <div class="rental-manager-progress-bar-container">
            <div class="location" data-id="Rotterdam centraal">1</div>
            <div class="location" data-id="kruisplein">2</div>
            <div class="location" data-id="eendrachtsplein">3</div>
            <div class="location" data-id="museumpark">4</div>
            <div class="location" data-id="westplein">5</div>
            <div class="location" data-id="willemskade">6</div>
            <div class="location" data-id="willemsplein">7</div>
            <div class="location" data-id="westerstraat">8</div>
        </div>

        <h2>Tram lijn 8</h2>
        <div class="rental-manager-progress-bar-container-twee">
            <div class="location" data-id="Rotterdam centraal">1</div>
            <div class="location" data-id="Kruisplein">2</div>
            <div class="location" data-id="Beurs">3</div>
            <div class="location" data-id="Leuvehaven">4</div>
            <div class="location" data-id="Vasteland">5</div>
            <div class="location" data-id="Kievitslaan">6</div>
            <div class="location" data-id="Euromast/Erasmus MC">7</div>
            <div class="location" data-id="P.de hoofdweg">8</div>
        </div>

        
        <div id="contactForm">

            <h1 id=Locatienaam></h1>
            <small>Tram</small>
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
        // haal opgeslagen favorieten op uit de lokale opslag
        var favorieten = JSON.parse(localStorage.getItem("favorieten")) || [];

        // voeg een click-eventlistener toe aan de toevoegen-knop
        var toevoegenKnop = document.getElementById("toevoegen-knop");
        toevoegenKnop.addEventListener("click", function() {
            // voeg de huidige URL toe aan de favorieten-lijst
            const divElement = document.querySelector('div'); // select the div element
            const dataId = divElement.getAttribute('data-id'); // get the value of the data-id attribute
            favorieten.push("");

            // sla de favorieten op in de lokale opslag
            localStorage.setItem("favorieten", JSON.stringify(favorieten));
        });

        // voeg een click-eventlistener toe aan de tonen-knop
        var tonenKnop = document.getElementById("tonen-knop");
        tonenKnop.addEventListener("click", function() {
            // maak de favorieten-lijst leeg
            var favorietenLijst = document.getElementById("tonen-favoriet");
            favorietenLijst.innerHTML = "";

            // toon alle opgeslagen favorieten op de pagina
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
            // verwijder alle opgeslagen favorieten uit de lokale opslag
            localStorage.removeItem("favorieten");

            // maak de favorieten-lijst leeg
            var favorietenLijst = document.getElementById("favorieten-lijst");
            favorietenLijst.innerHTML = "";
        });
    </script>

</body>
</html>
