<?php

namespace Adapter\my;

class PrintBanner extends Banner implements IPrint
{
    public function printWeak()
    {
        $this->showWithParen();
    }

    public function printStrong()
    {
        $this->showWithAster();
    }
}
