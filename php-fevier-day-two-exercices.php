<?php
    #EXERCICE 1:
    # Tableau associatif avec quelques données
    $nombres = array(
        1 => 50,
        2 => 80,
        3 => 130,
    );
    # Destructuration de données des deux premières valeurs de l'array
    [1 => $citySpeed, 2 => $countrySpeed, 3 => $highwaySpeed] = $nombres;
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
    echo "<br><br>"
?>

<?php
    #EXERCICE 1:
    $a = 20;
    $b = 14; 
    echo "Le résultat de: $a + $b = " .($a+$b);
    echo "<br><br>";

    #EXERCICE 2:
    $a = 20;
    $b = 17;
    echo "Le résultat de: $a - $b = " .($a-$b);
    echo "<br><br>";

    #EXERCICE 3:
    $a = 107;
    $b = 205;
    echo "Le résultat de : $a * $b = " .($a*$b);
    echo "<br><br>";

    #EXERCICE 4:
    $a = 50;
    $b = 4;
    echo "Le résultat de : $a / $b = " .($a/$b);
    echo "<br><br>";

    #EXERCICE 5:
    $a = 13;
    $b = 4;
    echo "Le reste de $a % $b = ".($a%$b);
    echo "<br><br>";

    #EXERCICE 6:
    $c = 109;
    echo "La valeur de $c + 1 est égal à :".($c+=1);
    echo "<br><br>";

    #EXERCICE 7:
    $d = 28;
    echo "La valeur de $d - 1 est égal à: ".($d-=1);
    echo "<br><br>";

    #EXERCICE 8:
    $e; 
    echo "La valeur de la variable passe désormais à ".($e = 700);
    echo "<br><br>";

    #EXERCICE 9:
    $f = 10;
    echo $f." est la valeur de f. On ajoute 5 à f: ".($f+=5);
    echo "<br><br>";

    #EXERCICE 10:
    $g = 200;
    echo $g." est la valeur de g. On enlève 25 à g: ".($g-25);
    echo "<br><br>";

    #EXERCICE 11:
    $h = 67;
    echo $h." est la valeur de h. On multiple h par 10: ".($h*10);
    echo"<br><br>";

    #EXERCICE 12:
    $i = 89;
    echo $i." est la valeur de i. On divise i par 3: ".($i/3);
?>  
