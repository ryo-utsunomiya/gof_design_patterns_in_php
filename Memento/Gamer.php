<?php

namespace Memento;

use function Util\println;

class Gamer
{
    private $money;
    private $fruits = [];
    private $fruitsName = ['Apple', 'Grape', 'Banana', 'Orange'];

    public function __construct($money)
    {
        $this->money = $money;
    }

    /**
     * @return int
     */
    public function getMoney()
    {
        return $this->money;
    }

    public function bet()
    {
        $dice = mt_rand(1, 6);
        if ($dice === 1) {
            $this->money += 100;
            println("Got 100 money");
        } else if ($dice === 2) {
            $this->money /= 2;
            println("Lost half of my money...");
        } else if ($dice === 6) {
            $f = $this->getFruit();
            printf("Got fruit %s !\n", $f);
            $this->fruits[] = $f;
        } else {
            println("Nothing happened.");
        }
    }

    public function createMemento()
    {
        $memento = new Memento($this->money);
        foreach ($this->fruits as $fruit) {
            if (0 === strpos($fruit, 'Delicious')) {
                $memento->addFruit($fruit);
            }
        }
        return $memento;
    }

    public function restoreMemento(Memento $memento)
    {
        $this->money = $memento->getMoney();
        $this->fruits = $memento->getFruits();
    }

    private function getFruit()
    {
        $prefix = '';
        if (mt_rand() % 2 === 0) {
            $prefix = 'Delicious ';
        }
        return $prefix . $this->fruitsName[mt_rand(0, count($this->fruitsName) - 1)];
    }

    public function __toString()
    {
        return sprintf('[money = %s, fruits = %s]', $this->money, implode(',', $this->fruits));
    }
}