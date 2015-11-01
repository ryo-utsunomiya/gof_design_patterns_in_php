<?php

namespace FactoryMethodFramework;

abstract class Factory
{
    /**
     * @param $owner
     * @return Product
     */
    final public function create($owner)
    {
        $product = $this->createProduct($owner);
        $this->registerProduct($product);

        return $product;
    }

    /**
     * @param string $owner
     * @return Product
     */
    abstract protected function createProduct($owner);

    /**
     * @param Product $product
     */
    abstract protected function registerProduct($product);
}
