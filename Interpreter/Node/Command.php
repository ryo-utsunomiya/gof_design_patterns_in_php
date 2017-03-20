<?php

namespace Interpreter\Node;

use Interpreter\Context;
use Interpreter\Token;

class Command extends Node
{
    /**
     * @var Node
     */
    private $node;
    
    public function parse(Context $context)
    {
        if ($context->currentToken() === Token::REPEAT) {
            $this->node = new RepeatCommand();
            $this->node->parse($context);
        } else {
            $this->node = new PrimitiveCommand();
            $this->node->parse($context);
        }
    }

    public function __toString()
    {
        return $this->node->__toString();
    }
}