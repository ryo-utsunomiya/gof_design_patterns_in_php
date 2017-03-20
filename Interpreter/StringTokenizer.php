<?php

namespace Interpreter;

class StringTokenizer
{
    /**
     * @var string[]
     */
    private $tokens = [];

    /**
     * StringTokenizer constructor.
     * @param string $text
     * @param string $delimiter
     */
    public function __construct($text, $delimiter = ' ')
    {
        $this->tokens = explode($delimiter, $text);
    }

    /**
     * @return string
     */
    public function nextToken()
    {
        return array_shift($this->tokens);
    }

    /**
     * @return string
     */
    public function currentToken()
    {
        return $this->tokens[0];
    }

    /**
     * @return bool
     */
    public function hasMoreTokens()
    {
        return (bool)$this->tokens;
    }
}