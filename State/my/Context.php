<?php

namespace State\my;

interface Context
{
    /**
     * @param int $hour
     * @return void
     */
    public function setClock($hour);

    /**
     * @param State $state
     * @return void
     */
    public function changeState(State $state);
}