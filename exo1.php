<?php
echo "hello";
//Consigne 1 : Tableau avec 5 fruits et légumes
$fruitsLegumes = ["Pommes", "Salade", "Carotte", "Fraise", "Kiwi"];

//Consigne 2 : AJouter un fruit au tableau existant
$fruitsLegumes[] = "Framboises";
var_dump($fruitsLegumes);

//Consigne 3 : Supprimer un fruit ou légume du tableau
unset($fruitsLegumes[2]);
var_dump($fruitsLegumes);

// Afficher en HTML sous forme de liste
echo "<ul>";
    echo "<li>{$fruitsLegumes[0]}</li>";
    echo "<li>{$fruitsLegumes[1]}</li>";
    echo "<li>{$fruitsLegumes[3]}</li>";
    echo "<li>{$fruitsLegumes[4]}</li>";
    echo "<li>{$fruitsLegumes[5]}</li>";
echo "</ul>";

for($i=0;$i <= count($fruitsLegumes);$i++){
    if(isset($fruitsLegumes[$i])){
        echo "<p>Voici le contenu de l'index {$i} : {$fruitsLegumes[$i]}</p>";
    }
}

foreach ($fruitsLegumes as $key => $item){
    echo "<p>J'ai acheté {$item} située à l'index {$key}</p>";
}

$arrayFruits = [
    "F" => "Fraise",
    "A" => "Abricot",
    "P" => "Pomme",
];
echo "<p>{$arrayFruits["F"]}</p>";
foreach ($arrayFruits as $key => $value){
    echo "<p>L'index {$key} propose {$value}</p>";
}





