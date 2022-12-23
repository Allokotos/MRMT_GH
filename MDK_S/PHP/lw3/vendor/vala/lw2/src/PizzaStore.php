<?php

namespace Vala\Lw3;

use Vala\lw3\Pizza;

abstract class PizzaStore
{
    public function orderPizza(string $type)
    {
        $piz = $this->createPizza($type);
        $piz->prepare();
        $piz->cut();
    }
    public abstract function createPizza(string $type): Pizza;
}
