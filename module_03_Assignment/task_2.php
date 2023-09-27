<?php
// Task 2: Array Manipulation
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function oddNum($num){
    return $num%2!=0;
}

$evenNum = array_filter($numbers, 'oddNum');
print_r($evenNum);

?>