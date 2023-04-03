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
            <div class="location" data-id="eendrachts plein">3</div>
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
            <button id="favoriet">voeg toe aan favoriet</button>
        </div>
        <button id="tips">Tips</button>
        <div id="list">
        </div>
        </div>

</body>
</html>
