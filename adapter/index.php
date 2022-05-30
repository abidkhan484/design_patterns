<?php

require_once realpath("vendor/autoload.php");

use App\Services\KeyboardServices;
use App\Services\MouseServices;
use App\Services\KeyboardMouseAdapter;

$keyboard = new KeyboardServices();
$keyboard->button_press();

$mouse = new MouseServices();
$mouse->click();

/**
 * The below class is the adapter between Keyboard and Mouse interfaces.
 * Here, Keyboard can call the click method like Mouse interface.
 */
$KeyboardMouseAdapter = new KeyboardMouseAdapter($keyboard);
$KeyboardMouseAdapter->click();
