<?php

namespace State\my;

interface State
{
    /**
     * @param Context $context
     * @param int     $hour
     * @return void
     */
    public function doClock(Context $context, $hour);

    /**
     * @return string
     */
    public function __toString();
}