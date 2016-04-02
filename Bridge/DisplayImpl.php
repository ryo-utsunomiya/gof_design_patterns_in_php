<?php

namespace Bridge;

abstract class DisplayImpl
{
    public abstract function rawOpen();

    public abstract function rawShow();

    public abstract function rawClose();
}
