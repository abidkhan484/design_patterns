<?php

namespace App\Operations;

use App\Interfaces\IArithmeticInterface;

class SubtractionOperation implements IArithmeticInterface
{
    private $number1;
    private $number2;

    public function __construct($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function execute()
    {
        return $this->number1 - $this->number2;
    }
}
