<?php

namespace Visitor;

abstract class Visitor
{
    /**
     * @param ElementInterface $element
     * @return void
     */
    abstract public function visit(ElementInterface $element);
}