<?php

class Calculator
{
    public float $exp;

    public function __construct()
    {
        $this->exp = 0.0;
    }

    public function sum(float $num): self
    {
        $this->exp += $num;
        return $this;
    }

    public function minus(float $num): self
    {
        $this->exp -= $num;
        return $this;
    }

    public function product(float $num): self
    {
        $this->exp *= $num;
        return $this;
    }

    public function division(float $num): self
    {
        if ($num !== 0.0) {
            $this->exp /= $num;
        } else {
            $this->exp = 0.0;
        }
        return $this;
    }

    public function getResult(): string
    {
        return $this->exp;
    }

    public function resetResult()
    {
        $this->exp = 0.0;
    }
}

$calculator = new Calculator();
echo "First result: ";
echo $calculator->sum(1)->sum(2)->product(3)->division(3)->getResult() . "\n"; // 3
$calculator->resetResult();
echo "Second result: ";
echo $calculator->sum(3)->sum(3)->minus(3)->division(3)->getResult() . "\n"; // 1
$calculator->resetResult();
echo "Third result: ";
echo $calculator->sum(1.4)->sum(2.6)->product(4)->getResult() . "\n"; // 16
$calculator->resetResult();
echo "Fourth result: ";
echo $calculator->sum(1)->sum(2)->product(3)->division(0)->getResult() . "\n"; // Exception
$calculator->resetResult();