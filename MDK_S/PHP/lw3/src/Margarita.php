<?php

require_once 'ydekor/github/blob/main/php/lw2/src/pizzaStore.php';

use src\pizzaStore;

class Margarita extends pizzaStore
{
    public string $name = "Margarita";
    public string $sauce = "Ketchup and Mayonaise";
    public array $toppings = ['Sausage', 'Cheese', 'Tomato'];
}