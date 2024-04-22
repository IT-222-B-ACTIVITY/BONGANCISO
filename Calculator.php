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
$addResult = $calculator->add(34, 10);
$subResult = $calculator->subtract(28, 10);
$mulResult = $calculator->multiply(23, 5);
$divResult = $calculator->divide(82, 3);

echo "Addition: $addResult\n";
echo "Subtraction: $subResult\n";
echo "Multiplication: $mulResult\n";
echo "Division: $divResult";

?>
