<?php

namespace my\PrototypeFramework;

class Manager
{
    /**
     * @var Product[]
     */
    private $showCase;

    /**
     * @param string  $name
     * @param Product $proto
     */
    public function register($name, Product $proto)
    {
        $this->showCase[$name] = $proto;
    }

    /**
     * @param string $protoName
     * @return Product
     */
    public function create($protoName)
    {
        if (isset($this->showCase[$protoName])) {
            return clone $this->showCase[$protoName];
        } else {
            throw new \InvalidArgumentException();
        }
    }
}
