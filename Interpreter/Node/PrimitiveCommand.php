<?php

namespace Interpreter\Node;

use Interpreter\Context;
use Interpreter\ParseException;
use Interpreter\Token;

class PrimitiveCommand extends Node
{
    /**
     * @var string
     */
    private $name;

    public function parse(Context $context)
    {
        $this->name = $context->currentToken();
        $context->skipToken($this->name);

        if (!in_array($this->name, [Token::GO, Token::LEFT, Token::RIGHT])) {
            throw new ParseException($this->name . ' is undefined');
        }
    }

    public function __toString()
    {
        return $this->name;
    }
}