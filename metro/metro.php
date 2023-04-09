<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="metro.css">
    <script type="text/javascript" src="metro.js" defer></script>
    <title>Document</title>
</head>
<body>
<br>
<nav class="subway row justify-around align-end">
    <div class="item column align-center">
        <hr class="line" />
        <span>Hoek van Holland</span>
        <div class="circle z-15" data-id="1"></div>
    </div>
    <div class="item column align-center">
        <hr class="line" />
        <span>Schiedam Centrum</span>
        <div class="circle" data-id="2"></div>
    </div>
    <div class="item column align-center">
        <hr class="line" />
        <span>Dijkzigt</span>
        <div class="circle" data-id="3"></div>
    </div>
    <div class="item column align-center">
        <hr class="line" />
        <span>beurs</span>
        <div class="circle" data-id="4"></div>
    </div>
    <div class="item column align-center">
        <hr class="line" />
        <span>Blaak</span>
        <div class="circle" data-id="5"></div>
    </div>
    <div class="item column align-center">
        <hr class="line" />
        <span>Oostplein</span>
        <div class="circle" data-id="6"></div>
    </div>
    <div class="item column align-center">
        <hr class="line" />
        <span>Kralingsezoom</span>
        <div class="circle" data-id="7"></div>
    </div>
    <div class="item column align-center">
        <hr class="line" />
        <span>Capelsebrug</span>
        <div class="circle" data-id="8"></div>
    </div>
    <div class="item column align-center">
        <hr class="line" />
        <span>Alexander</span>
        <div class="circle" data-id="9"></div>
    </div>
    <div class="item column align-center">
        <hr class="line" />
        <span>Nesselande</span>
        <div class="circle" data-id="10"></div>
    </div>



</nav>
<button id="tips">Toon tips</button>
<ul id="list"></ul>
<form id="form">
    <div class="form-item">
        <label for="name">jou veel gebruikte station </label>
        <input type="text" id="name" name="name"/>
    </div>
    <div class="form-item">
        <input type="submit" name="submit" value="Save in local storage"/>
    </div>
</form>
<button type="button" id="delete" >Delete items in local storage</button>
<br>


</body>
</html>