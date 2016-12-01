<?php

namespace ChainOfResponsibility;

class SpecialSupport extends Support
{
    /**
     * @var int
     */
    private $number;

    /**
     * SpecialSupport constructor.
     * @param string $name
     * @param int $number
     */
    public function __construct($name, $number)
    {
        parent::__construct($name);
        $this->number = $number;
    }

    /**
     * @param Trouble $trouble
     * @return bool
     */
    protected function resolve(Trouble $trouble)
    {
        return $trouble->getNumber() === $this->number;
    }
}