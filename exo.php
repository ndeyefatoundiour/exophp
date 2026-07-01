<?php

$categories=[
    0=> [
        "code" => "0000",
        "nom" => "categorie1",
        "produits" => [
            0 => [
                "nom" => "chips",
                "reference" => "1234ef",
                "prix" => 1000,
                "quantiter" => 55
            ],
            1 => [
                "nom" => "lait",
                "reference" => "0987ak",
                "prix" => 1500,
                "quantiter" => 105
            ]
        ]
    ],
    0=> [
        "code" => "1111",
        "nom" => "categorie2",
        "produits" => []
    ]
];

//2


function afficheCategorieSansProduit(array $categories): void{
    for ($i=0; $i < count($categories) ; $i++) { 
    if (count($categories[$i]["produits"]) == 0) {
        echo "les categories qui n'on op de produits :".$categories[$i]["nom"]."";
    }
}

}
afficheCategorieSansProduit($categories)



?>