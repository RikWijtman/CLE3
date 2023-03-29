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
    $data = getLocations();
    $tot = 0;
    for ($i = 0; $i < count($data); $i++) {
        if ($id==$data[$i]["id"]) {
        return $data[$i]}
    }
}
if (!isset($_GET['id'])) {
    $data = getLocations();
} else {
    $data = getLocationdetails($_GET['id']);
}

header("Content-Type: application/json");
echo json_encode($data);
exit;
