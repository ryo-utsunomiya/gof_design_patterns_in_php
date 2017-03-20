<?php

namespace Interpreter\Node;

use Interpreter\Context;
use Interpreter\Token;

class RepeatCommand extends Node
{
    /**
     * @var int
     */
    private $number;

    /**
     * @var CommandList
     */
    private $commandList;

    public function parse(Context $context)
    {
        $context->skipToken(Token::REPEAT);
        $this->number = $context->currentNumber();
        $context->nextToken();
        $this->commandList = new CommandList();
        $this->commandList->parse($context);
    }

    public function __toString()
    {
        return sprintf('[%s %d %s]', Token::REPEAT, $this->number, $this->commandList);
    }
}