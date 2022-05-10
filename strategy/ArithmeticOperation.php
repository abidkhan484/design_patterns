<?php

require_once(__DIR__."/Interfaces/IArithmeticInterface.php");
require_once(__DIR__."/Operations/SummationOperation.php");

class ArithmeticOperation
{
    private $arithmetic_operation;

    public function __construct(IArithmeticInterface $arithmetic_operation)
    {
        $this->arithmetic_operation = $arithmetic_operation;
    }

    public function execute()
    {
        return $this->arithmetic_operation->execute();
    }

}


