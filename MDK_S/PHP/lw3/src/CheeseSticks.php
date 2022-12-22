<?php

require_once 'ydekor/github/blob/main/php/lw2/src/pizza.php';

use src\pizzaStore;

class CheeseSticks extends pizza
{
    public string $covering;
    public string $flavour;

    public function createCheeseSticks(string $cover, string $flav)
    {
        $this->covering = $cover;
        $this->flavour = $flav;
    }

    public function prepareCheeseSticks(): void
    {
        echo "Началась готовка сырных палочек";
        echo "Покрытых: {$this->covering}";
        echo "Со вкусом: {$this->flavour}";
    }
}