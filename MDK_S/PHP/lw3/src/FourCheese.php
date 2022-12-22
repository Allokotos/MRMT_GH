<?php

require_once 'ydekor/github/blob/main/php/lw2/src/pizzaStore.php';

use src\pizzaStore;

class FourCheese extends pizzaStore
{
    public string $name = "Four Cheese";
    public string $sauce = "Mayonaise";
    public array $toppings = ['Mozzarella', 'Gorgonzola', 'Parmigiano', 'Goat Cheese'];
}