<?php
//Load file contents in PHP var
$station = file_get_contents("js/bus.json");
//print_r($playlist);
//exit;

//Decode JSON to PHP object
$stationJson = json_decode($station);

//echo "<pre>";
//print_r($playlistJson);
//echo "</pre>";

//Echo properties directly
echo $stationJson->stations[0]->stationname . "<br/>";

//Loop through list of albums from all artist & print title
foreach ($stationJson->stations as $station) {
    echo $station->stationname . "<br>";
    echo $station->placename . "<br>";
}
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