<?php

namespace Bridge;

class Display
{
    /**
     * @var DisplayImpl
     */
    private $impl;

    /**
     * Display constructor.
     *
     * @param DisplayImpl $impl
     */
    public function __construct(DisplayImpl $impl)
    {
        $this->impl = $impl;
    }

    public function open()
    {
        $this->impl->rawOpen();
    }

    public function show()
    {
        $this->impl->rawShow();
    }

    public function close()
    {
        $this->impl->rawClose();
    }

    public function display()
    {
        $this->open();
        $this->show();
        $this->close();
    }
}
