<?php
// Task 1: String Manipulation
$text = "The quick brown fox jumps over the lazy dog.";
function stringReplace($text) {

    $oldText = str_replace("brown", "red", strtolower($text));
    echo $oldText;
}

stringReplace($text);


?>