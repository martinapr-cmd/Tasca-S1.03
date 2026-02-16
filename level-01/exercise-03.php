<?php


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