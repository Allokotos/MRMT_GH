<?php

namespace lw2\src;

use lw2\src\Snack;

abstract class ChocolateFactory
{
    public function orderSnack(string $type)
    {
        $yummie = $this->createSnack($type);
        $yummie->prepare();
        $yummie->cutType();
    }

    public abstract function createSnack(string $type): Snack;
}