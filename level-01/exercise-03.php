<?php

/*
Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. 
La funció ens retorna true si totes les paraules de l’array tenen el caràcter 
passat com a segon paràmetre.

Per exemple:
Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem 
per “h” però fals si preguntem per “l”.

*/

function containsLetter(array $words, string $letter): bool {   //dont need [] for the array in function
    foreach ($words as $word) {
        if (!str_contains(strtolower($word), strtolower($letter))) { 
            return false;
        }    
    }
    return true;
}

$words = ["hola", "Php", "html"];

$result = containsLetter($words, "i");
if ($result) {
    echo "It's true!";
} else { 
    echo "It's false!";
}


?>