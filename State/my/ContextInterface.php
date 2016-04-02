<?php

namespace State\my;

interface ContextInterface
{
    /**
     * @param int $hour
     * @return void
     */
    public function setClock($hour);

    /**
     * @param StateInterface $state
     * @return void
     */
    public function changeState(StateInterface $state);
}