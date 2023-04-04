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
<nav class="subway row justify-around align-end">
    <div class="item column align-center">
        <hr class="line" />
        <span>Subway Stop</span>
        <div class="circle z-15"></div>
    </div>
    <div class="item column align-center">
        <hr class="line" />
        <span>Subway Stop</span>
        <div class="circle"></div>
    </div>
    <div class="item column align-center">
        <hr class="line" />
        <span>Subway Stop</span>
        <div class="circle"></div>
    </div>
    <div class="item column align-center">
        <hr class="line" />
        <span>Subway Stop</span>
        <div class="circle"></div>
    </div>
    <div class="item column align-center">
        <hr class="line" />
        <span>Subway Stop</span>
        <div class="circle"></div>
    </div>
    <div class="item column align-center">
        <hr class="line" />
        <span>Subway Stop</span>
        <div class="circle"></div>
    </div>
</nav>
<button id="tips">Toon tips</button>
<ul id="list"></ul>
<form id="form">
    <div class="form-item">
        <label for="name">Name</label>
        <input type="text" id="name" name="name"/>
    </div>
    <div class="form-item">
        <label for="age">Age</label>
        <input type="number" id="age" name="age"/>
    </div>
    <div class="form-item">
        <input type="submit" name="submit" value="Save in local storage"/>
    </div>
</form>
<button type="button" id="delete" >Delete items in local storage</button>
</body>
</html>