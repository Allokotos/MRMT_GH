<?php

require_once __DIR__.'/../vendor/autoload.php';

use Vala\Lw3\Pizza;

class Kebab extends Pizza
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