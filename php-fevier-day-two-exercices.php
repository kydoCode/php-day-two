<?php
    #EXERCICE 1:
    # Tableau associatif avec quelques données
    $nombres = [
        "citySpeed" => 50,
        "countrySpeed" => 80,
        "highwaySpeed" => 130,
    ];
    # Destructuration de données des deux premières valeurs de l'array
    ["citySpeed" => $citySpeed, "countrySpeed" => $countrySpeed, "highwaySpeed" => $highwaySpeed] = $nombres;
    # On passe ces var à l'affichage
    echo "Vitesse en ville: $citySpeed, vitesse hors agglomération: $countrySpeed, vitesse sur autoroute: $highwaySpeed";
    echo "<br><br>";

    #EXERCICE 2:
    $personne = [
        "nom" => "OkuneChance", 
        "prénom" => "William",
        "âge" => 37,
        "ville" => "Arcachon"
    ];

    ["nom" => $nom, "prénom" => $prenom, "âge" => $age, "ville" => $ville] = $personne;

    echo "Il s'appelle $prenom $nom, il a $age ans et il vient d'$ville.";
    echo "<br><br>";

    #EXERCICE 3:
    $prix = [
        "chemise jaune" => 10,
        "panaché" => 2.5,
        "téléphone" => 79
    ];

    ["chemise jaune" => $yellowShirt, "panaché" => $deathDrink, "téléphone" => $hasbeenPhone] = $prix;

    echo "Le prix de la chemise de William en EUR est de $yellowShirt EUR, en dollars de" .($yellowShirt * 1.18). "USD.";
    echo "<br><br>";

    #EXERCICE 4:
    $commande = [
        "café" => 30,
        "compote" => 20,
        "coco" => 10,
        "platCuisiné" => 7
    ];

    ["café" => $coffee, "compote" => $compote, "coco" => $flour, "platCuisiné" => $untastyDish] = $commande;

    echo "La commande du jour pour le code à la carte est de : $coffee cafés, $compote compotes, $flour barres de coco, $untastyDish plats cuisinés.";
    echo "<br><br>";

    #EXERCICE 5:

    $couleurs = [
        "couleurUne" => "noir",
        "couleurDeux" => "blanc",
    ];

    ["couleurUne" => $colorOne, "couleurDeux" => $colorTwo] = $couleurs;

    echo "Lee couleurs en présence sont $colorOne et $colorTwo.";
?>