<?php

require_once __DIR__.'/../vendor/autoload.php';

use Vala\Lw3\Pizza;

class FourCheese extends Pizza
{
    public string $name = "Four Cheese";
    public string $sauce = "Mayonaise";
    public array $toppings = ['Mozzarella', 'Gorgonzola', 'Parmigiano', 'Goat Cheese'];
}