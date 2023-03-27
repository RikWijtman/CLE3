<?php
$station = file_get_contents("js/bus.json");

$id = $_GET['id'];

$stationJson = json_decode($station);

echo $stationJson->stations[$id]->stationname . "<br>";
echo $stationJson->stations[$id]->placename . "<br>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bus.css">
    <title>Document</title>
</head>
<body>
    <a href="bus.php">Terug</a>
</body>
</html>