<?php



/**
 * @return array
 */
function getLocations() {

    $json = file_get_contents("../js/tram.json");

    $data = json_decode($json, true);

    return $data;


}

/**
 * @return array
 */
function getLocationDetails($zoekLijn, $stationname)
{
    //haal de locaties op
    $data = getLocations();

    foreach ($data['lijnen'] as $lijn) {
        if ($lijn['lijnID'] == $zoekLijn) {
            foreach ($lijn['stations'] as $station) {
                if ($station['stationname'] == $stationname) {

                    // get image from insta

                 //   $station['instaplaatje'] = "plaatje.png";
                    return $station;
                }
            }
        }
    }
}
//hier contoleer je of er iets extras in de url staat
if (!isset($_GET['lijn'])) {
    //hier haalt die alle locaties op
    $data = getLocations();
} else {
    //hier haalt die 1 locatie op aan de hand van de waarde van de url
    $data = getLocationdetails($_GET['lijn'], $_GET['station']);
}

header("Content-Type: application/json");
echo json_encode($data);
exit;
