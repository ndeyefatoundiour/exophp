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

//2

for ($i=0; $i < count($categories) ; $i++) { 
    if (count($categories[$i]["produits"]) == 0) {
        echo "les categories qui n'on op de produits :".$categories[$i]["nom"]."";
    }
}

//3

echo "\nles informations de la categorie\n";

do {
    $codeValide = true;

    $code = readline("\nentre le code :\n");
    if($code === ""){
        $codeValide = false;
        echo "\n les champs son obligatoir \n";
    }else {
        for ($i=0; $i < count($categories); $i++) { 
            if ($categories[$i]["code"] === $code) {
                $codeValide = false;
                echo "\nle code doit etre unique\n";
                break;
            }
        }
    }
} while (!$codeValide);



do {

    $nomValide = true;

    $nom = readline("\nentre le nom :\n");
    if($nom === ""){
        $nomValide = false;
        echo "\n les champs son obligatoir \n";
    }else {
        for ($i=0; $i < count($categories); $i++) { 
            if ($categories[$i]["nom"] === $nom) {
                $nomValide = false;
                echo "\nle nom doit etre unique\n";
                break;
            }
        }
    }
} while (!$nomValide);

$categorie=[
            "code" => $code,
            "nom" => $nom,
            "produits" => []
        ];


$categories[]=$categorie;

//4

do {
    $referenceValide = true;

    $reference = readline("\nentre la reference :\n");
    if($reference === ""){
        $referenceValide = false;
        echo "\n les champs son obligatoir \n";
    }else {
        for ($i=0; $i < count($categories); $i++) {
            for ($j=0; $j <count($categories[$i]["produits"] ); $j++) { 
                if ($categories[$i]["produits"][$j]["reference"] === $reference) {
                    $referenceValide = false;
                    echo "\nle reference doit etre unique\n";
                    break;
                }
            }   
        }
    }

} while (!$referenceValide);



do {
    $nomProduitValide = true;

    $nomProduit = readline("\nentre le nomProduit :\n");
    if($nomProduit === ""){
        $nomProduitValide = false;
        echo "\n les champs son obligatoir \n";
    }
} while (!$nomProduitValide);


do {
    $prixValide = true;

    $prix = readline("\nentre le prix :\n");
    if($prix < 0){
        $prixValide = false;
        echo "\n les champs son obligatoir \n";
    }
} while (!$prixValide);


do {
    $quantiteValide = true;

    $quantite = readline("\nentre le quantite :\n");
    if($quantite < 0){
        $quantiteValide = false;
        echo "\n les champs son obligatoir \n";
    }
} while (!$quantiteValide);


    $categorieExiste = false;

    $coderecherche = readline("\nentre le code :\n");
    
        for ($i=0; $i < count($categories); $i++) { 
            if ($categories[$i]["code"] === $coderecherche) {
                $categorieExiste = true;
                break
                
            }
        }

    if ($categorieExiste) {
        $produit = [
                "nom" => $nomProduit,
                "reference" => $reference,
                "prix" =>$prix,
                "quantite" => $quantite 
            ];

            $categories[$i]["produits"][]=$produit;
        
    }





?>