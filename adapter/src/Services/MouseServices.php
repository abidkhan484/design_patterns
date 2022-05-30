<?php

namespace App\Services;

use App\Interfaces\IMouseInterface;

class MouseServices implements IMouseInterface
{
    public function click() {
        echo "Mouse clicked\n";
    }
}
