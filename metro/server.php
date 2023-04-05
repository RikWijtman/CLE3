<?php
/**
 * @return array
 */
function getLocationDetails($id)
{
    $stations = [
    1 => [
        "id" => 1,
        "stationname" => "Hoek van Holland",
        "placename" => "Delft",
        "todo" => [
            "Pizzeria",
            "IJssallon"
        ],
        "transfer" => [
            "Tram",
            "Trein"
        ],
        "accessibility"=> "Toegankelijk, ook met rolstoel",
        "rush" => 4
    ],
    2 => [
        "id" => 2,
        "stationname"=> "Schiedam Centrum",
        "placename"=> "Delft",
        "todo" => [
            "Supermarkt",
            "Winkelstraten",
            "Terrasjes",
            "Bioscoop"
        ],
        "transfer" => [

        ],
        "accessibility"=> "Toegankelijk, ook met rolstoel",
        "rush"=> 3
    ],
    3 => [
        "id" => 3,
        "stationname"=> "Dijkzigt",
        "placename"=> "Delft",
        "todo"=> [
            "IJszaak",
            "Klein parkje"
        ],
        "transfer"=> [

        ],
        "accessibility"=> "Toegankelijk, ook met rolstoel",
        "rush"=> 1
    ],
    4 => [
        "id" => 4,
        "stationname"=> "Beurs",
        "placename"=> "Delft",
        "todo"=> [
            "Technische universiteit Delft",
            "Royal Delft (Museum aardewerk)"
        ],
        "transfer"=> [

        ],
        "accessibility"=> "Toegankelijk, ook met rolstoel",
        "rush"=> 3
    ],
    5 => [
        "id" => 5,
        "stationname"=> "Blaak",
        "placename"=> "Delft",
        "todo"=> [
            "Kapper",
            "Snackbar"
        ],
        "transfer"=> [

        ],
        "accessibility"=> "Toegankelijk, ook met rolstoel",
        "rush"=> 1
    ],
    6 => [
        "id" => 6,
        "stationname"=> "Oostplein",
        "placename"=> "Delfgauw",
        "todo"=> [
            "Albert Heijn",
            "Verhage"
        ],
        "transfer"=> [

        ],
        "accessibility"=> "Toegankelijk maar kan wat smal zijn voor een rolstoel",
        "rush"=> 2
    ],
    7 => [
        "id"=> 7,
        "stationname"=> "Kralingsezoom",
        "placename"=> "Delfgauw",
        "todo"=> [
            "Pizzeria",
            "Verzorgingszaak"
        ],
        "transfer"=> [

        ],
        "accessibility"=> "Toegankelijk, ook met rolstoel",
        "rush"=> 1
    ],
    8 => [
        "id"=> 8,
        "stationname"=> "capelsebrug",
        "placename"=> "Pijnacker",
        "todo"=> [
            "Niks"
        ],
        "transfer"=> [

        ],
        "accessibility"=> "Toegankelijk, ook met rolstoel",
        "rush"=> 1
    ],
    9 => [
        "id"=> 9,
        "stationname"=> "alexander",
        "placename"=> "Pijnacker",
        "todo"=> [
            "Restaurants",
            "Winkelcentrum",
            "Markt in het weekend"
        ],
        "transfer"=> [

        ],
        "accessibility"=> "Toegankelijk, ook voor rolstoel",
        "rush"=> 2
    ],
    10 => [
        "id"=> 10,
        "stationname"=> "Nesselande",
        "placename"=> "Pijnacker",
        "todo"=> [
            "Apotheek"
        ],
        "transfer"=> [
            "Metro"
        ],
        "accessibility"=> "Toegankelijk, ook voor rolstoel",
        "rush"=> 2
        ]
    ];
    return $stations[$id];
}
