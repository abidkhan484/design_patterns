<?php

namespace App\Services;

use App\Interfaces\IArithmeticInterface;

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


