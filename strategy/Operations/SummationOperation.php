<?php

require_once(__DIR__."/../Interfaces/IArithmeticInterface.php");

class SummationOperation implements IArithmeticInterface
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
        return $this->number1 + $this->number2;
    }    
}

