<?php

namespace lw2\src;

abstract class Snack
{
    public string $name;
    public string $chocolate;
    public array $toppings;

    public function __construct(string $name, string $choc, array $top)
    {
        $this->name = $name;
        $this->chocolate = $choc;
        $this->toppings = $top;
    }

    public function cutType(): string
    {
        $cutType = "По вертикали";
        return $cutType;
    }

    public function prepare(): void
    {
        echo "Началось создание снэка {$this->name}";
        echo "Добавляется шоколад {$this->chocolate}";
        echo "Добавлены начинки:";
        for ($i = 0; $i < count($this->toppings); $i++) {
            echo "{$this->toppings[$i]}";
        }
    }
}
