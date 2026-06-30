<?php

$categories = [

   0 =>      [
            "code" => "0000",
            "nom" => "categorie1",
            "produits" => [
                  0 => [
                    "nom" => "chips",
                    "reference" => "1345tf",
                    "prix" => 1000,
                    "quantite" => 50 
                  ],
                  1 => [
                    "nom" => "lait",
                    "reference" => "9876gv",
                    "prix" => 1500,
                    "quantite" => 30 
                  ]
            ]
         ],
   1 =>      [
            "code" => "1111",
            "nom" => "categorie2",
            "produits" => []
         ]
];


for ($i=0; $i < count($categories) ; $i++) { 
    if (count($categories[$i]["produits"]) == 0) {
        echo "les categories qui n'on op de produits :".$categories[$i]["nom"]."";
    }
}



?>