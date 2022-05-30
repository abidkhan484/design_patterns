<?php

namespace App\Services;

use App\Interfaces\IKeyboardInterface;

class KeyboardServices implements IKeyboardInterface
{
    public function button_press() {
        echo "Keyboard Button Pressed\n";
    }
}
