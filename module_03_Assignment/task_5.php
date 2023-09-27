<?php
// Task 5: Password Generator
function generatePass($length) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialCharacter = '!@#$%^&*()_+';

    $allCharacter = $lowercase . $uppercase . $numbers . $specialCharacter;
    $password = '';

    $charCount = strlen($allCharacter);

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $charCount - 1);
        $password .= $allCharacter[$randomIndex];
    }
    return $password;
}

$password = generatePass(12);

echo "New Generated Password: " . $password;


?>