<?php

namespace Interpreter\Node;

use Interpreter\Context;
use Interpreter\Token;

class Program extends Node
{
    /**
     * @var Node
     */
    private $commandList;

    public function parse(Context $context)
    {
        $context->skipToken(Token::PROGRAM);
        $this->commandList = new CommandList();
        $this->commandList->parse($context);
    }

    public function __toString()
    {
        return sprintf('[%s %s]', Token::PROGRAM, $this->commandList);
    }
}