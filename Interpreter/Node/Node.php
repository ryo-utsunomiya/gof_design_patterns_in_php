<?php

namespace Interpreter\Node;

use Interpreter\Context;
use Interpreter\ParseException;

abstract class Node
{
    /**
     * @param Context $context
     * @return void
     * @throws ParseException
     */
    abstract public function parse(Context $context);

    /**
     * @return string
     */
    abstract public function __toString();
}