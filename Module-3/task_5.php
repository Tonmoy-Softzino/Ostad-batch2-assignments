<?php
function generatePassword($length = 12) {
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numericChars = '0123456789';
    $specialChars = '!@#$%^&*()-_+=<>?';

    $allChars = $lowercaseChars . $uppercaseChars . $numericChars . $specialChars;
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, strlen($allChars) - 1);
        $password .= $allChars[$randomIndex];
    }

    return $password;
}

$password = generatePassword(6);
echo $password;

?>
