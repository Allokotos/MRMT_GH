<?php

require_once __DIR__.'/../vendor/autoload.php';

use Vala\Lw3\Pizza;

class Pepperoni extends Pizza
{
    public string $name = "Pepperoni";
    public string $sauce = "Ketchup";
    public array $toppings = ['Pepperoni', 'Cheese', 'Meatballs'];
}