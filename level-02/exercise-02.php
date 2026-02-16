<?php



$students = ["Diana" => [8, 9, 7, 6, 10],
             "Rodi" => [7, 6, 8, 9, 7],
             "Kane" => [9, 10, 8, 9, 9], 
             "Raimon" => [6, 7, 5, 8, 6], 
             "Duna" => [8, 8, 9, 7, 8]]; 


function calculateAverages(array $students): void { 
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