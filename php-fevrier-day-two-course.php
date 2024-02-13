<?php
$donnees = "cle2"; // La valeur de la variable

$tableau = [
    "cle1" => "Valeur 1",
    "cle2" => "Valeur 2",
    "clef3" => "Valeur 3"
];

if (array_key_exists($donnees, $tableau)) {
    echo "Contenu pour la clé $donnees : " .$tableau[$donnees];
} else {
    echo "Clé non trouvée dans le tableau. ";
}

?>