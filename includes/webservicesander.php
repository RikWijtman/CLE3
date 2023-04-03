<?php

/**
 * @return array
 */
function getLocations() {
    return [
        [
            "id" => 1,
            "stationname" => "Station Delft",
            "placename" => "Delft"
        ],
        [
            "id" => 2,
            "stationname"=> "Zuidpoort",
            "placename"=> "Delft"
        ],
        [
            "id" => 3,
            "stationname"=> "Julianalaan",
            "placename"=> "Delft"
        ],
        [
            "id" => 4,
            "stationname"=> "Aula",
            "placename"=> "Delft"
        ],
        [
            "id" => 5,
            "stationname"=> "Prof. Krausstraat",
            "placename"=> "Delft"
        ],
        [
            "id" => 6,
            "stationname"=> "Laan Der Zeven Linden",
            "placename"=> "Delfgauw"
        ],
        [
            "id"=> 7,
            "stationname"=> "Delfgauwseplein",
            "placename"=> "Delfgauw"
        ],
        [
            "id"=> 8,
            "stationname"=> "Rijskade",
            "placename"=> "Pijnacker"
        ],
        [
            "id"=> 9,
            "stationname"=> "Raadhuisplein",
            "placename"=> "Pijnacker"
        ],
        [
            "id"=> 10,
            "stationname"=> "Station Pijnacker Centrum",
            "placename"=> "Pijnacker"
        ],
        [
            "id"=> 11,
            "stationname"=> "Vlielandseweg",
            "placename"=> "Pijnacker"
        ],
        [
            "id"=> 12,
            "stationname"=> "Zijdeweg",
            "placename"=> "Pijnacker"
        ],
        [
            "id"=> 13,
            "stationname"=> "Katwijkerlaan Nr. 105",
            "placename"=> "Pijnacker"
        ],
        [
            "id"=> 14,
            "stationname"=> "Driesprong",
            "placename"=> "Zoetermeer"
        ],
        [
            "id"=> 15,
            "stationname"=> "Nathaliegang",
            "placename"=> "Zoetermeer"
        ],
        [
            "id"=> 16,
            "stationname"=> "Station Zoetermeer",
            "placename"=> "Zoetermeer"
        ],
        [
            "id"=> 17,
            "stationname"=> "Viaduct Afrikaweg",
            "placename"=> "Zoetermeer"
        ],
        [
            "id"=> 18,
            "stationname"=> "Meerzichtlaan",
            "placename"=> "Zoetermeer"
        ],
        [
            "id"=> 19,
            "stationname"=> "Centrum West",
            "placename"=> "Zoetermeer"
        ]
    ];
}

/**
 * @return array
 */
function getLocationDetails($id)
{
    //haal de locaties op
    $data = getLocations();
    // $i is 0 als die kleiner is het getal van het id doet de code +1
    for ($i = 0; $i < count($data); $i++) {
        //hier word het id gecontroleerd of de id overeenkomt met de data
        if ($id==$data[$i]["id"]) {
            //als die gelijk is laat hij de gegevens van de tram zien op de website
        return $data[$i];
        }
    }
}
//hier contoleer je of er iets extras in de url staat
if (!isset($_GET['id'])) {
    //hier haalt die alle locaties op
    $data = getLocations();
} else {
    //hier haalt die 1 locatie op aan de hand van de waarde van de url
    $data = getLocationdetails($_GET['id']);
}

header("Content-Type: application/json");
echo json_encode($data);
exit;
