<?php

require_once __DIR__.'/../vendor/autoload.php';

use Vala\Lw3\Pizza;

class Margarita extends Pizza
{
    public string $name = "Margarita";
    public string $sauce = "Ketchup and Mayonaise";
    public array $toppings = ['Sausage', 'Cheese', 'Tomato'];
}