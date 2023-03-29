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
    <h1>U reist momenteel met de bus</h1>
    <h2>Busroute Zoetermeer naar Delft.</h2>
    <div class="cols">
        <div>
            <img src="img/MapBus.png" width="384" draggable="false" usemap="#workmap" alt="">
            <map name="workmap">
                <area shape="circle" coords="62,10,20" alt="" href="busstations.php">
            </map>
        </div>
        <div>
            <button id="tips">Tips</button>
            <div id="list">
            </div>
        </div>
    </div>
</body>
</html>