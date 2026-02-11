<?php

/*
Fes un programa que tingui un array indexat de 6 elements i després:

- Mostri per pantalla la mida de l’array anterior.
- Elimini un element de l’array anterior. Comprova que els índexs/claus de 
l'array estiguin normalitzats(s’han de reorganitzar els seus índexs perquè 
no hi hagin salts entre índexs).
- Mostri per última vegada la mida de l’array i el seu contingut.
*/


$colors = ["Cherry", "Coral", "Salmon", "Navy", "Fuchsia", "Beige"];

echo "Size: " . count($colors) . "\n"; //size 

print_r($colors) . "\n"; // show og index

unset($colors[3]); //delete navy
$colors = array_values($colors); //reorganize array!
print_r($colors) . "\n"; //show new index

echo "New size: " . count($colors) . "\n";
foreach ($colors as $color) {  //show final array
echo "- " . $color . "\n";
}







?>