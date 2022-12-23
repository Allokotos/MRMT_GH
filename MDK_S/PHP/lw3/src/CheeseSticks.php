<?php

require_once __DIR__.'/../vendor/autoload.php';

use Vala\Lw3\PizzaStore;

class CheeseSticks extends PizzaStore
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