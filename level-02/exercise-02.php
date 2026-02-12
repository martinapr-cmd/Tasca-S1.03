<?php


/*

Crea un programa que llisti les notes dels/les alumnes d’una classe. 
Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. 
Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes, 
ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.

*/


$students = ["Diana" => [8, 9, 7, 6, 10],
             "Rodi" => [7, 6, 8, 9, 7],
             "Kane" => [9, 10, 8, 9, 9], 
             "Raimon" => [6, 7, 5, 8, 6], 
             "Duna" => [8, 8, 9, 7, 8]]; 


function calculateAverages($students) { 
    $gradesSum = 0; // sum of all grades values
    $gradesCount = 0; // the amount of grades
    foreach ($students as $name => $grades) { // for each student on the students array, get their grades
        
        $studentTotalGrades = array_sum($grades); // sum of all grades of that student
        $studentGradeCount = count($grades); // the amount of grades (5)

        $average = $studentTotalGrades / $studentGradeCount; // average = (sum of grades) / (amount of grades)
        
        echo "$name's average: " . round($average, 2) . "\n"; // round(average, 2) rounds to 2 decimals
        
        // for the class average: sum all the grades values and count total grade amount
        $gradesSum += $studentTotalGrades; // $gradesSum = $gradesSum + $studentTotalGrades
        $gradesCount += $studentGradeCount;
        
        } 

        // (total of ALL grades) / (total amount of grades) = class average
        $classAverage = $gradesSum / $gradesCount; 
        echo "Class average: " . round($classAverage, 2) . "\n"; 
        } 


 calculateAverages($students);




?>