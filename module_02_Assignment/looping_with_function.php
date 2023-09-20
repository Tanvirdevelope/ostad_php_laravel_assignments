<!-- Task 1: Looping with Increment using a Function -->

<?php

// For loop using a function
function evenNumberFor(int $start, int $end, int $step) {
    $start+=1;
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i .'<br>';
    }
}
evenNumberFor(1, 20, 2);

// While loop using a function
function evenNumWhile(int $start, int $end, int $step) {
    $start+=1;
    $i = $start;
    while ($i <= $end) {
        echo $i . "<br>";
        $i += $step;
    }
}
evenNumWhile(1, 20, 2);

// Do While loop using a function
function evenNumDoWhile(int $start, int $end, int $step) {
    $start+=1;
    $i = $start;

        do {
            echo $i . "<br>";
            $i += $step;
        } while ($i <= $end);
    }

    evenNumDoWhile(1, 20, 2);

?>