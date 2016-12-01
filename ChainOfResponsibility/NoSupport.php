<?php

namespace ChainOfResponsibility;

class NoSupport extends Support
{
    /**
     * @param Trouble $trouble
     * @return bool
     */
    protected function resolve(Trouble $trouble)
    {
        return false;
    }
}