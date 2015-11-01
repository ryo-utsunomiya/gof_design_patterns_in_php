<?php

namespace idcard;

use FactoryMethodFramework\Factory;

class IDCardFactory extends Factory
{
    /**
     * @var array
     */
    private $database = [];

    /**
     * @var int
     */
    private $serial = 100;

    /**
     * @param string $owner
     * @return IDCard
     */
    protected function createProduct($owner)
    {
        return new IDCard($owner, $this->serial++);
    }

    /**
     * @param IDCard $product
     */
    protected function registerProduct($product)
    {
        if (!$product instanceof IDCard) {
            throw new \InvalidArgumentException();
        }
        $this->database[$product->getSerial()] = $product->getOwner();
    }

    /**
     * @return array
     */
    public function getDatabase()
    {
        return $this->database;
    }
}
