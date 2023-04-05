<?php
    $stations = [
    1 => [
        "id" => 1,
        "stationname" => "Hoek van Holland",
        "placename" => "hoek van holland",
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
        "placename"=> "Schiedam",
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
        "placename"=> "rotterdam",
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
        "placename"=> "rotterdam",
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
        "placename"=> "rotterdam",
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
        "placename"=> "rotterdam",
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
        "placename"=> "rotterdam",
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
        "placename"=> "capelle",
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
        "placename"=> "capelle",
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
        "placename"=> "rotterdam nesselande",
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
    echo json_encode($stations);

