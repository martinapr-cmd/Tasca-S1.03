<?php

/*
Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. 
La funció ens retorna true si totes les paraules de l’array tenen el caràcter 
passat com a segon paràmetre.

Per exemple:
Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem 
per “h” però fals si preguntem per “l”.

*/

function containsLetter($words, $letter) {   //dont need [] for the awway in function
    for ($i = 0; $i < count($words); $i++) {
            if (str_contains(strtolower($words[$i]), strtolower($letter))) { 
                return true;
            }    
         } return false;
    }

$words = ["hola", "Php", "html"];

$result = containsLetter($words, "i");
if ($result) {
    echo "It's true!";
} else { 
    echo "It's false!";
}


?>