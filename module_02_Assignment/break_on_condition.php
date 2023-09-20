<!-- Task 3: Break on Condition -->
<?php 
// Break on Condition Fibonacci numbers

$num1 = 0;
$num2 = 1;

echo $num1 . " " . $num2 . " ";

for($i = 2; $i < 10; $i++) {
    $num = $num1 + $num2;
    if ($num > 100) {
        break;
    }

    echo $num . " ";
    $num1 = $num2;
    $num2 = $num;
    
}

?>