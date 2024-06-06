<?php
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        return "Error: Division by zero";
    }
    return $a / $b;
}

function exponentiate($a, $b) {
    return pow($a, $b);
}

function percentage($a, $b) {
    return ($a / 100) * $b;
}

function sqrt_value($a) {
    return sqrt($a);
}

function logarithm($a) {
    if ($a <= 0) {
        return "Error: Logarithm of non-positive number";
    }
    return log($a);
}

$num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : null;
$num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : null;
$operation = isset($_POST['operation']) ? $_POST['operation'] : null;

$result = '';

if ($num1 !== null && $operation !== null) {
    switch ($operation) {
        case 'add':
            $result = add($num1, $num2);
            break;
        case 'subtract':
            $result = subtract($num1, $num2);
            break;
        case 'multiply':
            $result = multiply($num1, $num2);
            break;
        case 'divide':
            $result = divide($num1, $num2);
            break;
        case 'exponentiate':
            $result = exponentiate($num1, $num2);
            break;
        case 'percentage':
            $result = percentage($num1, $num2);
            break;
        case 'sqrt':
            $result = sqrt_value($num1);
            break;
        case 'logarithm':
            $result = logarithm($num1);
            break;
        default:
            $result = "Invalid Operation";
    }
} else {
    $result = "Error: Invalid input";
}

echo "<div class='result'>The result of the operation is: " . $result . "</div>";
echo "<a href='index.php'>Back to calculator</a>";
?>
