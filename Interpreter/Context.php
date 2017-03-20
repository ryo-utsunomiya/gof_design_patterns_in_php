<?php

namespace Interpreter;

class Context
{
    /**
     * @var StringTokenizer
     */
    private $tokenizer;

    /**
     * @var string
     */
    private $currentToken;

    public function __construct($text)
    {
        $this->tokenizer = new StringTokenizer($text);
        $this->nextToken();
    }

    public function nextToken()
    {
        if ($this->tokenizer->hasMoreTokens()) {
            $this->currentToken = $this->tokenizer->nextToken();
        } else {
            $this->currentToken = null;
        }

        return $this->currentToken;
    }

    public function currentToken()
    {
        return $this->currentToken;
    }

    /**
     * @param string $token
     * @throws ParseException
     */
    public function skipToken($token)
    {
        if ($token !== $this->currentToken) {
            throw new ParseException(sprintf('Warning: expected: %s actual %s', $token, $this->currentToken));
        }
        $this->nextToken();
    }

    /**
     * @return int
     */
    public function currentNumber()
    {
        return (int)$this->currentToken;
    }
}