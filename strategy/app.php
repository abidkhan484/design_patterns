<?php

require_once realpath("vendor/autoload.php");

use App\Operations\SummationOperation;
use App\Operations\SubtractionOperation;
use App\Services\ArithmeticOperation;

$number1 = 8;
$number2 = 2;

$summation = new SummationOperation($number1, $number2);
$operation = new ArithmeticOperation($summation);
$result = $operation->execute();
echo "==========================\n";
echo $number1 . " + " . $number2 . " = " . $result;
echo "\n==========================\n";


/**
 * The below SubtractionOperation class is implemented later.
 * And doesn't require any modification in other source.
 * This is called "Open Close Principle" in SOLID
 */
$subtraction = new SubtractionOperation($number1, $number2);
$operation = new ArithmeticOperation($subtraction);
$result = $operation->execute();
echo "==========================\n";
echo $number1 . " - " . $number2 . " = " . $result;
echo "\n==========================\n";

