<?php

require_once 'ydekor/github/blob/main/php/lw2/src/pizzaStore.php';

use src\pizzaStore;

class MeatPizza extends pizzaStore
{
    public string $name = "MeatPizza";
    public string $sauce = "Spicy Ketchup";
    public array $toppings = ['Sausage', 'Bacon', 'Cheese', 'Meatballs', 'Pickles'];
}