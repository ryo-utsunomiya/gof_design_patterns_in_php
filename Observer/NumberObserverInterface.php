<?php


namespace Observer;


interface NumberObserverInterface
{
    /**
     * @param NumberGenerator $generator
     * @return void
     */
    function update(NumberGenerator $generator);
}