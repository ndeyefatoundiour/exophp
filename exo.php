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
afficheCategorieSansProduit($categories);

//3
function chercherIndex(array $tableau, string $cle, string $valeurCherchee): int {
    for ($i = 0; $i < count($tableau); $i++) {
        if ($tableau[$i][$cle] === $valeurCherchee) {
            return $i;
        }
    }
    return -1;
}

function creerCategorie(array &$categories): void {
    echo "\n Création d'une catégorie \n";
    
    do {
        $code = trim(readline("Entrez le code : "));
        $indexCode = chercherIndex($categories, "code", $code);
        if ($code === "") echo "Champs obligatoire.\n";
        if ($indexCode !== -1) echo "Ce code existe déjà.\n";
    } while ($code === "" || $indexCode !== -1);

    do {
        $nom = trim(readline("Entrez le nom : "));
        $indexNom = chercherIndex($categories, "nom", $nom);
        if ($nom === "") echo "Champs obligatoire.\n";
        if ($indexNom !== -1) echo "Ce nom existe déjà.\n";
    } while ($nom === "" || $indexNom !== -1);

    $categories[] = ["code" => $code, "nom" => $nom, "produits" => []];
    echo "Catégorie ajoutée avec succès !\n";
}

creerCategorie($categories);

//4 5

function ajouterProduit(array &$categories): void {
    echo "\n--- Saisie d'un nouveau produit ---\n";
    
    do {
        $ref = trim(readline("Entrez la référence : "));
        $refExiste = false;
        for ($i = 0; $i < count($categories); $i++) {
            if (chercherIndex($categories[$i]["produits"], "reference", $ref) !== -1) {
                $refExiste = true;
                break;
            }
        }
        if ($ref === "") echo "Champs obligatoire.\n";
        if ($refExiste) echo "Cette référence existe déjà.\n";
    } while ($ref === "" || $refExiste);

    do {
        $nomProd = trim(readline("Entrez le nom du produit : "));
    } while ($nomProd === "");

    do {
        $prix = trim(readline("Entrez le prix : "));
    } while ($prix === "" || (int)$prix < 0);

    do {
        $quantite = trim(readline("Entrez la quantité : "));
    } while ($quantite === "" || (int)$quantite < 0);

    $nouveauProduit = ["nom" => $nomProd, "reference" => $ref, "prix" => (int)$prix, "quantite" => (int)$quantite];

    echo "\n Affectation du produit \n";
    do {
        $codeCible = trim(readline("Entrez le code de la catégorie cible : "));
        $indexCible = chercherIndex($categories, "code", $codeCible);
        if ($indexCible === -1) echo "Cette catégorie n'existe pas. Réessayez.\n";
    } while ($indexCible === -1);

    $categories[$indexCible]["produits"][] = $nouveauProduit;
    echo "\nSuccès ! Le produit a été ajouté à la catégorie " . $categories[$indexCible]["nom"] . ".\n";
}

ajouterProduit($categories);


?>