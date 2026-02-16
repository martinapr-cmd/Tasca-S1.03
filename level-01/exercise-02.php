<?php


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