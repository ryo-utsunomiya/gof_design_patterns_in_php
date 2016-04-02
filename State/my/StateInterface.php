<?php

namespace State\my;

interface StateInterface
{
    /**
     * @param ContextInterface $context
     * @param int              $hour
     * @return void
     */
    public function doClock(ContextInterface $context, $hour);

    /**
     * @return string
     */
    public function __toString();
}