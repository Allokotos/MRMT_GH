<?php

require_once __DIR__.'/../vendor/autoload.php';

use Vala\Lw3\Pizza;

class MeatPizza extends Pizza
{
    public string $name = "MeatPizza";
    public string $sauce = "Spicy Ketchup";
    public array $toppings = ['Sausage', 'Bacon', 'Cheese', 'Meatballs', 'Pickles'];
}