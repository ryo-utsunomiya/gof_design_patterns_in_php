<?php

namespace Decorator;

abstract class Border extends Display
{
    /**
     * @var Display
     */
    protected $display;

    /**
     * Border constructor.
     * @param Display $display
     */
    protected function __construct(Display $display)
    {
        $this->display = $display;
    }
}