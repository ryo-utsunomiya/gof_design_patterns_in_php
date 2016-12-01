<?php

namespace ChainOfResponsibility;

class OddSupport extends Support
{
    /**
     * @param Trouble $trouble
     * @return bool
     */
    protected function resolve(Trouble $trouble)
    {
        return $trouble->getNumber() % 2 === 1;
    }
}