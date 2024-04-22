<?php

class Calculator {
    public function add($n1, $n2) {
        return $n1 + $n2;
    }
    
    public function subtract($n1, $n2) {
        return $n1 - $n2;
    }
    
    public function multiply($n1, $n2) {
        return $n1 * $n2;
    }
    
    public function divide($n1, $n2) {
        if ($n2 != 0) {
            return $n1 / $n2;
        } else {
            return "Error: Division by zero is not allowed.";
        }
    }
}

$calculator = new Calculator();
$additionResult = $calculator->add(59, 10);
$subtractionResult = $calculator->subtract(79, 10);
$multiplicationResult = $calculator->multiply(23, 3);
$divisionResult = $calculator->divide(828, 12);

echo "Addition: $additionResult\n";
echo "Subtraction: $subtractionResult\n";
echo "Multiplication: $multiplicationResult\n";
echo "Division: $divisionResult";

?>