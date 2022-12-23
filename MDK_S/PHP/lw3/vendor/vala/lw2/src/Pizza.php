<?php

namespace Vala\Lw3;

abstract class Pizza
{
    public string $name;
    public string $sauce;
    public array $toppings;

    public function __construct(string $name, string $sus, array $top)
    {
        $this->name = $name;
        $this->sauce = $sus;
        $this->toppings = $top;
    }

    public function cut(): string
    {
        $cutType = "по диагонали";
        return $cutType;
    }

    public function prepare(): void
    {
        echo "началась готовка пиццы {$this->name}";
        echo "Добавлен соус {$this->sauce}";
        echo "Добавлены топики: ";
        for ($i = 0; $i < count($this->toppings); $i++) {
            echo "{$this->toppings[$i]}";
        }
    }
}
