<?php

$categories = [

   0 => [
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
   1 => [
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

echo "\nles informations de la categorie\n";

do {
    $codevalide = true;

    $code = readline("\nentre le code :\n");
    if($code === ""){
        $codevalide = false;
        echo "\n les champs son obligatoir \n";
    }else {
        for ($i=0; $i < count($categories); $i++) { 
            if ($categories[$i]["code"] == $code) {
                $codevalide = false;
                echo "\nle code doit etre unique\n";
                break;
            }
        }
    }
} while (!$codevalide);



do {

    $nomvalide = true;

    $nom = readline("\nentre le nom :\n");
    if($nom == ""){
        $nomvalide = false;
        echo "\n les champs son obligatoir \n";
    }else {
        for ($i=0; $i < count($categories); $i++) { 
            if ($categories[$i]["nom"] == $nom) {
                $nomvalide = false;
                echo "\nle nom doit etre unique\n";
                break;
            }
        }
    }
} while (!$nomvalide);

$categorie=[
            "code" => $code,
            "nom" => $nom,
            "produits" => []
        ];


$categories[]=$categorie;




?>