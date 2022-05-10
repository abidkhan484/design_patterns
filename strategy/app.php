<?php

require_once(__DIR__."/ArithmeticOperation.php");

$number1 = 8;
$number2 = 2;

$summation = new SummationOperation($number1, $number2);
$operation = new ArithmeticOperation($summation);
$result = $operation->execute();
echo "==========================\n";
echo $number1 . " + " . $number2 . " = " . $result;
echo "\n==========================\n";



