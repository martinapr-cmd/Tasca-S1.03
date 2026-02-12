<?php

/* 
Imagina que tens dues llistes de convidats(representats/es únicament per noms). 
Fes un programa que et retorni:

- La llista de convidats en comú entre les dues llistes.
- La mescla de la llista de convidats(sense repeticions).
- La llista de convidats exclusius de la primera llista.
- La llista de convidats exclusius de la segona llista.

*/

$guests1 = ["Anna", "Marc", "Raimon", "Jaume", "Noah"]; 
$guests2 = ["Dalia", "Anna", "Jaume", "Mikey", "Noah", "Gorge", "Thalia"]; 


$commonGuests = array_intersect($guests1, $guests2); //common guests list 

$mergedGuests = array_unique(array_merge($guests1, $guests2)); // merged guests list and then remove duplicates 

$exclusive1 = array_diff($guests1, $guests2); // exclusive guests from guests1 that are not in guests2

$exclusive2 = array_diff($guests2, $guests1);

echo "Common guests: "; print_r($commonGuests);
echo "Merged guests: "; print_r($mergedGuests);
echo "Exclusive guests from first list: "; print_r($exclusive1);
echo "Exclusive guests from second list: "; print_r($exclusive2);


?>