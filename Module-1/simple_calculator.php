<?php

function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    if ($num2 == 0) {
        return "Cannot divide by zero";
    }
    return $num1 / $num2;
}

echo "Simple Calculator\n";

$num1 = (int)readline("Enter first number: ");
$num2 = (int)readline("Enter second number: ");

echo "Select operation:\n";
echo "1. Addition\n";
echo "2. Subtraction\n";
echo "3. Multiplication\n";
echo "4. Division\n";

$choice = (int)readline("Enter your choice (1/2/3/4): ");

switch ($choice) {
    case 1:
        $result = add($num1, $num2);
        break;
    case 2:
        $result = subtract($num1, $num2);
        break;
    case 3:
        $result = multiply($num1, $num2);
        break;
    case 4:
        $result = divide($num1, $num2);
        break;
    default:
        echo "Invalid choice\n";
        exit;
}

echo "Result: $result\n";

?>
