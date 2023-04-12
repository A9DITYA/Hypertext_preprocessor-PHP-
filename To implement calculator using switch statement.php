<?php
$num1 = 90; // First operand
$num2 = 75; // Second operand
$operator = "/"; // Operator (+, -, *, /)

switch ($operator) {
    case"+":
        $result = $num1 + $num2;
        echo "$num1 + $num2 = $result";
        break;
    case "-":
        $result = $num1 - $num2;
        echo "$num1 - $num2 = $result";
        break;
    case "*":
        $result = $num1 * $num2;
        echo "$num1 * $num2 = $result";
        break;
    case "/":
        if ($num2 == 0) {
            echo "Error: Division by zero";
        } else {
            $result = $num1 / $num2;
            echo "$num1 / $num2 = $result";
        }
        break;
    default:
        echo "Error: Invalid operator";
        break;
}
?>
