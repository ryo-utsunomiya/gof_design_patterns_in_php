<?php

namespace Interpreter\Node;

use Interpreter\Context;
use Interpreter\ParseException;
use Interpreter\Token;

class CommandList extends Node
{
    /**
     * @var Command[]
     */
    private $list = [];

    public function parse(Context $context)
    {
        while (true) {
            if ($context->currentToken() === null) {
                throw new ParseException(sprintf("Missing '%s'", Token::END));
            } elseif ($context->currentToken() === Token::END) {
                $context->skipToken(Token::END);
                break;
            } else {
                $command = new Command();
                $command->parse($context);
                $this->list[] = $command;
            }
        }
    }

    public function __toString()
    {
        return '[' . implode(', ', $this->list) . ']';
    }
}