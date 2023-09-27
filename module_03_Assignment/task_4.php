<?php
// Task 4: Multidimensional Array
$studentGrades = [
    ['Math' => 82, 'English' => 85, 'Science' => 80],
    ['Math' => 90, 'English' => 85, 'Science' => 90],
    ['Math' => 95, 'English' => 80, 'Science' => 92]
];

function gradeAvg(array $studentGrades){
    foreach($studentGrades as $student => $grades):
        $sum = array_sum($grades);
        $totalItem = count($grades); 
        $average = number_format(($sum / $totalItem), 2); 

        echo "Student-" . ($student + 1). " average grade : {$average} .<br>";
    endforeach;
}

gradeAvg($studentGrades);

?>