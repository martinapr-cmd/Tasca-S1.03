<?php

/*
Fes un array associatiu que representi informació de tu mateix/a. 
En concret ha d’incloure:

- nom
- edat
- email
- menjar favorit
*/

$me = ["nom" => "Martina", "edat" => 24, "email" => "marpouradressa@gmail.com", 
"menjar favorit" => "Udon"];

echo "My name is " . $me["nom"] . " and i'm " . $me["edat"] . ".\n";
echo "My gmail is: " . $me["email"] . "\n";
echo "And my favorite food is " . $me["menjar favorit"] . "!\n"; 

?>