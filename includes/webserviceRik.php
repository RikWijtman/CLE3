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
    $tags = [
        1 => [
            "id" => 1,
            "stationname" => "Station Delft",
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
            "stationname"=> "Zuidpoort",
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
            "stationname"=> "Julianalaan",
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
            "stationname"=> "Aula",
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
            "stationname"=> "Prof. Krausstraat",
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
            "stationname"=> "Laan Der Zeven Linden",
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
            "stationname"=> "Delfgauwseplein",
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
            "stationname"=> "Rijskade",
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
            "stationname"=> "Raadhuisplein",
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
            "stationname"=> "Station Pijnacker Centrum",
            "placename"=> "Pijnacker",
            "todo"=> [
                "Apotheek"
            ],
            "transfer"=> [
                "Metro"
            ],
            "accessibility"=> "Toegankelijk, ook voor rolstoel",
            "rush"=> 2
        ],
        11 => [
            "id"=> 11,
            "stationname"=> "Vlielandseweg",
            "placename"=> "Pijnacker",
            "todo"=> [
                "Niks"
            ],
            "transfer"=> [

            ],
            "accessibility"=> "Toegankelijk, ook voor rolstoel",
            "rush"=> 1
        ],
        12 => [
            "id"=> 12,
            "stationname"=> "Zijdeweg",
            "placename"=> "Pijnacker",
            "todo"=> [
                "Dierenwinkel",
                "Electronicawinkel"
            ],
            "transfer"=> [

            ],
            "accessibility"=> "Toegankelijk, ook voor rolstoel",
            "rush"=> 1
        ],
        13 => [
            "id"=> 13,
            "stationname"=> "Katwijkerlaan Nr. 105",
            "placename"=> "Pijnacker",
            "todo"=> [
                "Beautycentrum"
            ],
            "transfer"=> [

            ],
            "accessibility"=> "Toegankelijk, ook voor rolstoel",
            "rush"=> 1
        ],
        14 => [
            "id"=> 14,
            "stationname"=> "Driesprong",
            "placename"=> "Zoetermeer",
            "todo"=> [
                "Tuincentrum"
            ],
            "transfer"=> [

            ],
            "accessibility"=> "toegankelijk, ook voor rolstoel",
            "rush"=> 1
        ],
        15 => [
            "id"=> 15,
            "stationname"=> "Nathaliegang",
            "placename"=> "Zoetermeer",
            "todo"=> [
                "Winkelcentrum",
                "Eetgelegenheden",
                "Bibliotheek"
            ],
            "transfer"=> [

            ],
            "accessibility"=> "Toegankelijk, ook voor rolstoel",
            "rush"=> 3
        ],
        16 => [
            "id"=> 16,
            "stationname"=> "Station Zoetermeer",
            "placename"=> "Zoetermeer",
            "todo"=> [
                "Station"
            ],
            "transfer"=> [
                "Trein"
            ],
            "accessibility"=> "Toegankelijk, ook voor rolstoel",
            "rush"=> 4
        ],
        17 => [
            "id"=> 17,
            "stationname"=> "Viaduct Afrikaweg",
            "placename"=> "Zoetermeer",
            "todo"=> [
                "Niks"
            ],
            "transfer"=> [

            ],
            "accessibility"=> "Toegankelijk, ook voor rolstoel",
            "rush"=> 1
        ],
        18 =>[
            "id"=> 18,
            "stationname"=> "Meerzichtlaan",
            "placename"=> "Zoetermeer",
            "todo"=> [
                "Graffititunnel"
            ],
            "transfer"=> [

            ],
            "accessibility"=> "Toegankelijk, ook voor rolstoel",
            "rush"=> 1
        ],
        19 => [
            "id"=> 19,
            "stationname"=> "Centrum West",
            "placename"=> "Zoetermeer",
            "todo"=> [
                "Eetgelegenheden",
                "Winkelcentrum"
            ],
            "transfer"=> [
                "Tram",
                "Trein"
            ],
            "accessibility"=> "Toegankelijk, ook voor rolstoel",
            "rush"=> 4
        ]
    ];

    return $tags[$id];
}