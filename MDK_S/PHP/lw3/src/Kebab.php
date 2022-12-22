<?php

require_once 'ydekor/github/blob/main/php/lw2/src/pizza.php';

use src\pizzaStore;

class Kebab extends pizza
{
    public string $sauce;
    public string $meatType;

    public function createKebab(string $sus, string $meat)
    {
        $this->sauce = $sus;
        $this->meatType = $meat;
    }

    public function prepareKebab(): void
    {
        echo "Началась готовка шаурмы";
        echo "С соусом {$this->sauce}";
        echo "И мясом: {$this->meatType}";
    }
}