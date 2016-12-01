<?php

namespace Visitor;

interface ElementInterface
{
    /**
     * @param Visitor $visitor
     * @return void
     */
    public function accept(Visitor $visitor);
}