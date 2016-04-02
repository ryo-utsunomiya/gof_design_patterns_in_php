<?php

namespace Bridge;

class CountDisplay extends Display
{
    /**
     * CountDisplay constructor.
     *
     * @param DisplayImpl $impl
     */
    public function __construct(DisplayImpl $impl)
    {
        parent::__construct($impl);
    }

    public function multiDisplay($times)
    {
        $this->open();

        for ($i = 0; $i < $times; $i++) {
            $this->show();
        }

        $this->close();
    }
}
