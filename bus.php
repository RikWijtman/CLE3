<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bus.css">
    <script type="text/javascript" src="js/bus.js" defer></script>
    <title>Document</title>
</head>
<body>
    <div id="titleContainer" class="container">
        <div class="cols">
            <img src="img/logo.png" id="logo" draggable="false" alt="logo">
            <h1 id="title">U reist momenteel met de bus</h1>
            <div class="navbar">
                <nav>
                    <ul>
                        <li><a href="metro/metro.php"> METRO</a></li>
                        <li><a href="trein.php">TREIN</a></li>
                        <li><a href="tram.php">TRAM</a></li>
                        <li><a href="index.php">HOME</a></li>
                    </ul>
                </nav>
                <img src="img/menu.png" draggable="false" alt="menu-icon">
            </div>
        </div>
    </div>
    <div class="cols">
        <div id="routeContainer" class="container">
            <h2>Busroute Zoetermeer naar Delft.</h2>
            <h3>Klik op een station om deze te bekijken</h3>
            <img src="img/MapBus.png" width="360" usemap="#mapbus" alt="" draggable="false">
            <map name="workmap" id="mapbus" draggable="false">
                <area shape="circle" coords="78,13,10" alt="" class="1">
                <area shape="circle" coords="78,72,10" alt="" class="2">
                <area shape="circle" coords="78,124,10" alt="" class="3">
                <area shape="circle" coords="78,166,10" alt="" class="4">
                <area shape="circle" coords="78,208,10" alt="" class="5">
                <area shape="circle" coords="78,252,10" alt="" class="6">

                <area shape="circle" coords="28,124,10" alt="" class="20">
                <area shape="circle" coords="28,166,10" alt="" class="21">
                <area shape="circle" coords="28,208,10" alt="" class="22">

                <area shape="circle" coords="100,252,10" alt="" class="7">
                <area shape="circle" coords="126,252,10" alt="" class="8">
                <area shape="circle" coords="166,252,10" alt="" class="9">
                <area shape="circle" coords="204,252,10" alt="" class="10">
                <area shape="circle" coords="236,252,10" alt="" class="11">
                <area shape="circle" coords="272,252,10" alt="" class="12">
                <area shape="circle" coords="305,252,10" alt="" class="13">

                <area shape="circle" coords="328,278,10" alt="" class="14">
                <area shape="circle" coords="328,312,10" alt="" class="15">
                <area shape="circle" coords="328,346,10" alt="" class="16">
                <area shape="circle" coords="328,372,10" alt="" class="17">
                <area shape="circle" coords="328,405,10" alt="" class="18">
                <area shape="circle" coords="328,450,10" alt="" class="19">

                <area shape="circle" coords="78,316,10" alt="" class="23">
                <area shape="circle" coords="78,358,10" alt="" class="24">
                <area shape="circle" coords="78,392,10" alt="" class="25">
                <area shape="circle" coords="78,428,10" alt="" class="26">
                <area shape="circle" coords="78,466,10" alt="" class="27">
            </map>
        </div>
        <div id="infoContainer" class="container">
            <img id="tips" class="button" draggable="false" src="img/Tipsknop.png" alt="">
            <dialog id="list">
                <img id="dialogbutton" class="button" draggable="false" src="img/Terugknop.png" alt="">
                <p>
                    1)De bus kan vaak onregelmatig rijden, zorg er dus voor dat je op tijd voor je bus komt of dat je de ns app of 9292 regelmatig checkt.
                </p>
                <p>
                    2)Het is mogelijk dat de bus wat voller is tijdens spits, dit houdt in dat het rond negen uur s’ochtens en rond vijf uur s’middags wat drukker kan zijn.
                </p>
                <p>
                    3)Stations kunnen wat lastiger te bereiken zijn voor minder mobiele mensen, check daarvoor op onze app.
                </p>
            </dialog>
            <div class="cols">
                <div id="stationinfo">
                </div>
                <div id="favo">
                    <div class="cols">
                        <hr>
                        <div class="favodiv">
                            <h2>Favorieten:</h2>
                            <div id="favoList">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>