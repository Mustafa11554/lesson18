<?php

class Additioner
{
     public function process(int $a, int $b) 
     {
         return $a + $b;
     }
}

class subtract
{
    public function process(int $a, int $b)
    {
        return $a - $b;
    }
}

class Multiplier 
{
    public function process(int $a, int $b)
    {
        return $a * $b;
    }
}

class Divider 
{
    public function process(int $a, int $b)
    {
        if($b != 0)
        {
            return $a / $b;
        }else
        {
            return "На ноль делить нельзя!";
        }
    }
}

class Calculator 
{
    private $additioner;
    private $subtractor;
    private $multiplier;
    private $divider;


public function __construct() 
{
    $this->additioner = new Additioner();
    $this->subtractor = new Subtractor();
    $this->multiplier = new Multiplier();
    $this->divider = new Divider();
}
    public function calculate($operation, $a, $b)
    {
        switch ($operation) {
            case 'add':
            return $this->additioner->process($a, $b);
            break;
            case 'subtract':
            return $this->subtractor->process($a, $b);
            break;
            case 'multiply':
            return $this->multiplier->process($a, $b);
            break;
            case 'divide':
            return $this->divider->process($a, $b);
            break;
            default:
            return "Неверная операция";
            }
    }
}

$calc = new Calculator();
echo $calc->calculate('add', 8, 4);
echo $calc->calculate('subtract', 12, 8);
echo $calc->calculate('multiply', 6, 5); 
echo $calc->calculate('divide', 24, 4); 
echo $calc->calculate('divide', 7, 0);