<!-- Task 4: Fibonacci Series printing using a Function -->
<?php 
// PHP function to print the first 15 numbers in the Fibonacci series
function fibonacciFunction($count) {
    $num1 = 0;
    $num2 = 1;
    
    echo $num1 . " " . $num2 . " ";
    
    for ($i = 2; $i < $count; $i++) {
        $num = $num1 + $num2;
        
        echo $num . " ";
        $num1 = $num2;
        $num2 = $num;
    }
}

fibonacciFunction(15);

?>