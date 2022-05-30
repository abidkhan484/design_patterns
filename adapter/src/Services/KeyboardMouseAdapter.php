<?php

namespace App\Services;

use App\Interfaces\IKeyboardInterface;
use App\Interfaces\IKeyboardMouseInterface;

class KeyboardMouseAdapter implements IKeyboardMouseInterface
{
    public function __construct(IKeyboardInterface $keyboardInterface) {
        $this->keyboardInterface = $keyboardInterface;
    }

    public function click() {
        $this->keyboardInterface->button_press();
    }
}

