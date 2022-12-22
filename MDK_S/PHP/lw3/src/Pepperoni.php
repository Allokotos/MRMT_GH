<?php

require_once 'ydekor/github/blob/main/php/lw2/src/pizzaStore.php';

use src\pizzaStore;

class Pepperoni extends pizzaStore
{
    public string $name = "Pepperoni";
    public string $sauce = "Ketchup";
    public array $toppings = ['Pepperoni', 'Cheese', 'Meatballs'];
}